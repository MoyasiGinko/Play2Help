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
  if (keys.ArrowLeft) player.x -= 5;
  if (keys.ArrowRight) player.x += 5;

  // Jump only if the player is on the ground
  if (keys.Space && player.isOnGround == true) {
    player.jump();
  }
}
