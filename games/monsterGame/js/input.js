const keys = { ArrowLeft: false, ArrowRight: false, Space: false };

// Register event listeners
document.addEventListener("keydown", (event) => {
  if (event.code === "ArrowLeft") keys.ArrowLeft = true;
  if (event.code === "ArrowRight") keys.ArrowRight = true;
  if (event.code === "Space") keys.Space = true;
});

document.addEventListener("keyup", (event) => {
  if (event.code === "ArrowLeft") keys.ArrowLeft = false;
  if (event.code === "ArrowRight") keys.ArrowRight = false;
  if (event.code === "Space") keys.Space = false;
});

// Handle input
export function handleInput(player) {
  // Move player left or right
  if (keys.ArrowLeft) {
    player.x -= 5; // Move left
  }
  if (keys.ArrowRight) {
    player.x += 5; // Move right
  }

  // Jump only if the player is on the ground
  if (keys.Space && player.isOnGround) {
    player.jump();
  }

  // Prevent player from moving out of the canvas from left side only
  if (player.x < 0) {
    player.x = 0;
  }
}
