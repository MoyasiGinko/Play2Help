const canvas = document.getElementById("gameCanvas");
const ctx = canvas.getContext("2d");

const playButton = document.getElementById("playButton");
const pauseButton = document.getElementById("pauseButton");
const retryButton = document.getElementById("retryButton");

let cart = {
  x: canvas.width / 2 - 20,
  y: canvas.height - 80,
  width: 50,
  height: 30,
  speed: 30,
};
let coins = [];
let obstacles = [];
let score = 0;
let gameOver = false;
let gamePaused = false;
let animationFrame;
let railOffset = 0;

// Controls
document.addEventListener("keydown", (event) => {
  if (!gamePaused) {
    if (event.key === "ArrowLeft" && cart.x > 50) {
      cart.x -= cart.speed;
    } else if (
      event.key === "ArrowRight" &&
      cart.x + cart.width < canvas.width - 50
    ) {
      cart.x += cart.speed;
    }
  }
});

// Generate coins and obstacles
function generateCoins() {
  if (Math.random() < 0.02) {
    // Slower frequency
    coins.push({
      x: Math.random() * (canvas.width - 100) + 50,
      y: 0,
      radius: 10,
    });
  }
  coins.forEach((coin, index) => {
    coin.y += 1.5; // Slower speed
    if (coin.y > canvas.height) coins.splice(index, 1);
  });
}

function generateObstacles() {
  if (Math.random() < 0.02) {
    obstacles.push({
      x: Math.random() * (canvas.width - 100) + 50,
      y: 0,
      type: Math.random() < 0.5 ? "rock" : "bomb",
    });
  }
  obstacles.forEach((obstacle, index) => {
    obstacle.y += 2; // Slower speed
    if (obstacle.y > canvas.height) obstacles.splice(index, 1);
  });
}

function detectCollisions() {
  coins.forEach((coin, index) => {
    if (
      cart.x < coin.x + coin.radius &&
      cart.x + cart.width > coin.x &&
      cart.y < coin.y + coin.radius &&
      cart.y + cart.height > coin.y
    ) {
      coins.splice(index, 1);
      score += 10;
    }
  });

  obstacles.forEach((obstacle) => {
    if (
      cart.x < obstacle.x + 20 &&
      cart.x + cart.width > obstacle.x &&
      cart.y < obstacle.y + 20 &&
      cart.y + cart.height > obstacle.y
    ) {
      gameOver = true;
      retryButton.style.display = "block";
      cancelAnimationFrame(animationFrame);
    }
  });
}

// Draw objects
function drawCart() {
  ctx.fillStyle = "#ff6347"; // Train body
  ctx.fillRect(cart.x, cart.y, cart.width, cart.height);
  ctx.fillStyle = "#000";
  ctx.fillRect(cart.x + 5, cart.y + 5, cart.width - 10, cart.height - 10); // Window
}

function drawCoins() {
  ctx.fillStyle = "#FFD700";
  coins.forEach((coin) => {
    ctx.beginPath();
    ctx.arc(coin.x, coin.y, coin.radius, 0, Math.PI * 2);
    ctx.fill();
  });
}

function drawObstacles() {
  obstacles.forEach((obstacle) => {
    if (obstacle.type === "rock") {
      ctx.fillStyle = "#8B4513";
      ctx.beginPath();
      ctx.arc(obstacle.x, obstacle.y, 20, 0, Math.PI * 2);
      ctx.fill();
    } else {
      ctx.fillStyle = "#555";
      ctx.beginPath();
      ctx.arc(obstacle.x, obstacle.y, 15, 0, Math.PI * 2);
      ctx.fill();
      ctx.strokeStyle = "#FF0000";
      ctx.lineWidth = 2;
      ctx.moveTo(obstacle.x - 10, obstacle.y);
      ctx.lineTo(obstacle.x + 10, obstacle.y);
      ctx.moveTo(obstacle.x, obstacle.y - 10);
      ctx.lineTo(obstacle.x, obstacle.y + 10);
      ctx.stroke();
    }
  });
}

// Background scenery
function drawMountains() {
  ctx.fillStyle = "#5D5";
  ctx.beginPath();
  ctx.moveTo(0, canvas.height);
  ctx.lineTo(100, 500);
  ctx.lineTo(200, canvas.height);
  ctx.fill();

  ctx.beginPath();
  ctx.moveTo(canvas.width, canvas.height);
  ctx.lineTo(canvas.width - 100, 500);
  ctx.lineTo(canvas.width - 200, canvas.height);
  ctx.fill();
}

function drawRails() {
  railOffset += 2;
  if (railOffset > 40) railOffset = 0;

  // Draw vertical rails
  ctx.strokeStyle = "#555";
  ctx.lineWidth = 4;
  ctx.beginPath();
  ctx.moveTo(150, 0);
  ctx.lineTo(150, canvas.height);
  ctx.moveTo(350, 0);
  ctx.lineTo(350, canvas.height);
  ctx.stroke();

  // Draw cross-ties
  ctx.strokeStyle = "#888";
  ctx.lineWidth = 2;
  for (let i = railOffset; i < canvas.height; i += 40) {
    ctx.beginPath();
    ctx.moveTo(140, i);
    ctx.lineTo(360, i);
    ctx.stroke();
  }
}

function drawScore() {
  ctx.fillStyle = "#fff";
  ctx.font = "20px Arial";
  ctx.fillText("Score: " + score, 10, 20);
}

// Game loop
function gameLoop() {
  if (gameOver) return;

  ctx.clearRect(0, 0, canvas.width, canvas.height);

  drawMountains();
  drawRails();
  generateCoins();
  generateObstacles();
  detectCollisions();

  drawCart();
  drawCoins();
  drawObstacles();
  drawScore();

  animationFrame = requestAnimationFrame(gameLoop);
}

// Play and Pause controls
playButton.addEventListener("click", () => {
  if (gamePaused || !animationFrame) {
    gamePaused = false;
    gameLoop();
  }
});

pauseButton.addEventListener("click", () => {
  gamePaused = true;
  cancelAnimationFrame(animationFrame);
});

// Reset game
function resetGame() {
  cart = {
    x: canvas.width / 2 - 20,
    y: canvas.height - 80,
    width: 50,
    height: 30,
    speed: 5,
  };
  coins = [];
  obstacles = [];
  score = 0;
  gameOver = false;
  gamePaused = false;
  retryButton.style.display = "none";
  gameLoop();
}

// Start the game paused initially
gamePaused = true;
