import Player from "./player.js";
import { handleInput } from "./input.js";
import { applyGravity, checkCollision } from "./physics.js";
import { createMap } from "./terrain.js";

const canvas = document.getElementById("gameCanvas");
const ctx = canvas.getContext("2d");
canvas.width = 800;
canvas.height = 400;

let player = new Player(50, 300);
let { platforms, coins } = createMap();

let score = 0;

// Background image
const background = new Image();
background.src = "./assets/origbig.png"; // Your sky background image

// Camera offset to follow the player
let offsetX = 0;

function drawBackground() {
  // Draw the background based on offsetX, for a parallax effect
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

function gameLoop() {
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
    score += coin.collect(player); // Add the coin's score if collected
  });

  // Draw all objects relative to the camera offset
  platforms.forEach((platform) => platform.draw(ctx, offsetX));
  coins.forEach((coin) => coin.draw(ctx, offsetX));
  player.draw(ctx, offsetX);

  // Display score
  ctx.fillStyle = "black";
  ctx.font = "20px Arial";
  ctx.fillText(`Score: ${score}`, 20, 30);

  requestAnimationFrame(gameLoop);
}

gameLoop();
