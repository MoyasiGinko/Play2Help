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
  speed: 5,
};
let coins = [];
let obstacles = [];
let score = 0;
let gameOver = false;
let gamePaused = false;
let animationFrame;

// Cart controls
document.addEventListener("keydown", (event) => {
  if (!gamePaused) {
    if (event.key === "ArrowLeft" && cart.x > 0) {
      cart.x -= cart.speed;
    } else if (
      event.key === "ArrowRight" &&
      cart.x + cart.width < canvas.width
    ) {
      cart.x += cart.speed;
    }
  }
});

function generateCoins() {
  if (Math.random() < 0.05) {
    coins.push({
      x: Math.random() * (canvas.width - 20),
      y: 0,
      width: 20,
      height: 20,
    });
  }
  coins.forEach((coin, index) => {
    coin.y += 2;
    if (coin.y > canvas.height) coins.splice(index, 1);
  });
}

function generateObstacles() {
  if (Math.random() < 0.03) {
    obstacles.push({
      x: Math.random() * (canvas.width - 50),
      y: 0,
      width: 50,
      height: 30,
    });
  }
  obstacles.forEach((obstacle, index) => {
    obstacle.y += 4;
    if (obstacle.y > canvas.height) obstacles.splice(index, 1);
  });
}

function detectCollisions() {
  coins.forEach((coin, index) => {
    if (
      cart.x < coin.x + coin.width &&
      cart.x + cart.width > coin.x &&
      cart.y < coin.y + coin.height &&
      cart.y + cart.height > coin.y
    ) {
      coins.splice(index, 1);
      score += 10;
    }
  });

  obstacles.forEach((obstacle) => {
    if (
      cart.x < obstacle.x + obstacle.width &&
      cart.x + cart.width > obstacle.x &&
      cart.y < obstacle.y + obstacle.height &&
      cart.y + cart.height > obstacle.y
    ) {
      gameOver = true;
      retryButton.style.display = "block";
      cancelAnimationFrame(animationFrame);
    }
  });
}

// Draw functions for cart, coins, obstacles, score, and rails
function drawCart() {
  ctx.fillStyle = "#ff6347"; // Train body
  ctx.fillRect(cart.x, cart.y, cart.width, cart.height);
  ctx.fillStyle = "#000";
  ctx.fillRect(cart.x + 5, cart.y + 5, cart.width - 10, cart.height - 10); // Window
}

function drawCoins() {
  ctx.fillStyle = "#FFD700";
  coins.forEach((coin) => {
    ctx.fillRect(coin.x, coin.y, coin.width, coin.height);
  });
}

function drawObstacles() {
  ctx.fillStyle = "#8B4513";
  obstacles.forEach((obstacle) => {
    ctx.fillRect(obstacle.x, obstacle.y, obstacle.width, obstacle.height);
  });
}

function drawScore() {
  ctx.fillStyle = "#fff";
  ctx.font = "20px Arial";
  ctx.fillText("Score: " + score, 10, 20);
}

// Draw rails with cross-ties
function drawRails() {
  ctx.strokeStyle = "#555";
  ctx.lineWidth = 4;
  ctx.beginPath();
  ctx.moveTo(150, 0);
  ctx.lineTo(150, canvas.height);
  ctx.moveTo(350, 0);
  ctx.lineTo(350, canvas.height);
  ctx.stroke();

  // Cross-ties
  ctx.strokeStyle = "#888";
  ctx.lineWidth = 2;
  for (let i = 0; i < canvas.height; i += 40) {
    ctx.beginPath();
    ctx.moveTo(140, i);
    ctx.lineTo(360, i);
    ctx.stroke();
  }
}

function gameLoop() {
  if (gameOver) return;

  ctx.clearRect(0, 0, canvas.width, canvas.height);

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
