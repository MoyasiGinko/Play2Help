import Player from "./player.js";
import Platform from "./platform.js";
import { handleInput } from "./input.js";
import { applyGravity, checkCollision } from "./physics.js";

const canvas = document.getElementById("gameCanvas");
const ctx = canvas.getContext("2d");
canvas.width = 800;
canvas.height = 400;

let player = new Player(50, 300);
let platforms = [
  new Platform(0, 350, 800, 50),
  new Platform(200, 250, 100, 20),
];

function gameLoop() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);

  // Apply input to player
  handleInput(player);

  // Apply gravity and check collisions with platforms
  applyGravity(player);
  platforms.forEach((platform) => checkCollision(player, platform));

  // Draw player and platforms
  player.draw(ctx);
  platforms.forEach((platform) => platform.draw(ctx));

  requestAnimationFrame(gameLoop);
}

gameLoop();
