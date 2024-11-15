import Player from "./player.js";
import { handleInput } from "./input.js";
import { applyGravity, checkCollision } from "./physics.js";
import { createMap } from "./terrain.js";

const canvas = document.getElementById("gameCanvas");
const ctx = canvas.getContext("2d");
canvas.width = 800;
canvas.height = 400;

let gameOver = false;
let player = new Player(50, 300);
let { platforms, coins, monsters } = createMap();

let score = 0;
let highestScore = 0; // Track the highest score

// Background image
const background = new Image();
background.src = "./assets/origbig.png"; // Your sky background image

// Camera offset to follow the player
let offsetX = 0;

// Draw the background with a parallax effect
function drawBackground() {
  const bgWidth = canvas.width * 2; // Repeat background for width continuity
  ctx.drawImage(background, -offsetX % bgWidth, 0, bgWidth, canvas.height);
  ctx.drawImage(
    background,
    (-offsetX % bgWidth) + bgWidth,
    0,
    bgWidth,
    canvas.height
  );
}

// Reset the game state
function resetGame() {
  gameOver = false;
  score = 0;
  player = new Player(50, 300); // Reset player to initial position
  const mapData = createMap(); // Recreate the map
  platforms = mapData.platforms;
  coins = mapData.coins;
  monsters = mapData.monsters;
  offsetX = 0; // Reset camera offset
  gameLoop(); // Restart the game loop
}

// Main game loop
function gameLoop() {
  if (gameOver) {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Display "Game Over" message
    ctx.fillStyle = "black";
    ctx.font = "40px Arial";
    ctx.textAlign = "center";
    ctx.fillText("Game Over!", canvas.width / 2, canvas.height / 2 - 20);

    // Display highest score
    ctx.font = "20px Arial";
    ctx.fillText(
      `Highest Score: ${highestScore}`,
      canvas.width / 2,
      canvas.height / 2 + 20
    );

    // Display "Retry" button instructions
    ctx.font = "20px Arial";
    ctx.fillText(
      "Press 'R' to Retry",
      canvas.width / 2,
      canvas.height / 2 + 50
    );

    // Listen for retry input
    document.addEventListener("keydown", (event) => {
      if (event.key === "r" || event.key === "R") {
        resetGame();
      }
    });

    return; // Stop the game loop
  }

  ctx.clearRect(0, 0, canvas.width, canvas.height);

  // Draw background
  drawBackground();

  // Apply player input and gravity
  handleInput(player);
  applyGravity(player);

  // Update camera offset to keep the player centered
  offsetX = player.x - canvas.width / 2;

  // Apply collision detection with platforms
  platforms.forEach((platform) => checkCollision(player, platform));

  // Check for coin collection and update score
  coins.forEach((coin) => {
    const coinCollected = coin.collect(player);
    score += coinCollected;
  });

  // Check for monster collision
  monsters.forEach((monster) => {
    if (monster.checkCollision(player)) {
      console.log("Monster Collision! Game Over");
      highestScore = Math.max(score, highestScore); // Update the highest score
      gameOver = true; // End the game if a monster is touched
    }
  });

  // Draw all objects relative to the camera offset
  platforms.forEach((platform) => platform.draw(ctx, offsetX));
  coins.forEach((coin) => coin.draw(ctx, offsetX));
  monsters.forEach((monster) => monster.draw(ctx, offsetX));
  player.draw(ctx, offsetX);

  // Display score
  ctx.fillStyle = "black";
  ctx.font = "20px Arial";
  ctx.fillText(`Score: ${score}`, 20, 30);

  requestAnimationFrame(gameLoop);
}

gameLoop();
