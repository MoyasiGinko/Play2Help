const canvas = document.getElementById("gameCanvas");
const ctx = canvas.getContext("2d");

const playButton = document.getElementById("playButton");
const pauseButton = document.getElementById("pauseButton");
const retryButton = document.getElementById("retryButton");

const railPositions = [80, 240, 400]; // Center x-coordinates for each rail track
let currentRailIndex = 1; // Start on the middle rail

let cart = {
  x: railPositions[currentRailIndex] - 40,
  y: canvas.height - 100,
  width: 100, // Larger cart size
  height: 80,
};

// Load images for cart, rock, bomb, and coin
const cartImage = new Image();
cartImage.src = "./assets/main-object.gif"; // Make sure the path is correct

const rockImage = new Image();
rockImage.src = "./assets/rock.gif";

const bombImage = new Image();
bombImage.src = "./assets/bomb.gif";

const coinImage = new Image(); // New image for the coin
coinImage.src = "./assets/coin.gif"; // Path for the coin GIF

let coins = [];
let obstacles = [];
let score = 0;
let gameOver = false;
let gamePaused = false;
let animationFrame;
let railOffset = 0;

// Controls for switching rails
document.addEventListener("keydown", (event) => {
  if (!gamePaused) {
    if (event.key === "ArrowLeft" && currentRailIndex > 0) {
      currentRailIndex--;
      cart.x = railPositions[currentRailIndex] - 40;
    } else if (
      event.key === "ArrowRight" &&
      currentRailIndex < railPositions.length - 1
    ) {
      currentRailIndex++;
      cart.x = railPositions[currentRailIndex] - 40;
    }
  }
});

// Generate coins and obstacles on rails
function generateCoins() {
  if (Math.random() < 0.02) {
    const randomRail = Math.floor(Math.random() * railPositions.length);
    coins.push({
      x: railPositions[randomRail],
      y: 0,
      radius: 20, // Keep the radius for collision detection
    });
  }
  coins.forEach((coin, index) => {
    coin.y += 2;
    if (coin.y > canvas.height) coins.splice(index, 1);
  });
}

function generateObstacles() {
  if (Math.random() < 0.005) {
    const randomRail = Math.floor(Math.random() * railPositions.length);
    obstacles.push({
      x: railPositions[randomRail],
      y: 0,
      type: Math.random() < 0.5 ? "rock" : "bomb",
    });
  }
  obstacles.forEach((obstacle, index) => {
    obstacle.y += 2;
    if (obstacle.y > canvas.height) obstacles.splice(index, 1);
  });
}

// Detect collisions
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
      cart.x < obstacle.x + 40 &&
      cart.x + cart.width > obstacle.x &&
      cart.y < obstacle.y + 40 &&
      cart.y + cart.height > obstacle.y
    ) {
      gameOver = true;
      retryButton.style.display = "block";
      cancelAnimationFrame(animationFrame);
    }
  });
}

// Draw cart with GIF
function drawCart() {
  ctx.drawImage(cartImage, cart.x, cart.y, cart.width, cart.height);
}

// Draw coins using the coin GIF
function drawCoins() {
  coins.forEach((coin) => {
    ctx.drawImage(coinImage, coin.x - 20, coin.y - 20, 40, 40); // Adjust size as needed
  });
}

// Draw obstacles with GIFs
function drawObstacles() {
  obstacles.forEach((obstacle) => {
    if (obstacle.type === "rock") {
      ctx.drawImage(rockImage, obstacle.x - 40, obstacle.y - 40, 80, 80); // Larger rock
    } else {
      ctx.drawImage(bombImage, obstacle.x - 30, obstacle.y - 30, 60, 60); // Larger bomb
    }
  });
}

// Draw complete rail tracks
function drawRails() {
  railOffset += 2;
  if (railOffset > 40) railOffset = 0;

  ctx.lineWidth = 4;
  ctx.strokeStyle = "#555";

  railPositions.forEach((x) => {
    ctx.beginPath();
    ctx.moveTo(x - 15, 0);
    ctx.lineTo(x - 15, canvas.height);
    ctx.stroke();

    ctx.beginPath();
    ctx.moveTo(x + 15, 0);
    ctx.lineTo(x + 15, canvas.height);
    ctx.stroke();

    for (let i = railOffset; i < canvas.height; i += 40) {
      ctx.beginPath();
      ctx.moveTo(x - 20, i);
      ctx.lineTo(x + 20, i);
      ctx.lineWidth = 2;
      ctx.strokeStyle = "#888";
      ctx.stroke();
    }
  });
}

// Draw score
function drawScore() {
  ctx.fillStyle = "#fff";
  ctx.font = "20px Arial";
  ctx.fillText("Score: " + score, 10, 20);
}

// Game loop
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
  cart.x = railPositions[currentRailIndex] - 40;
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
