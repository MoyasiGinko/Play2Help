export function applyGravity(player) {
  const gravity = 0.5;

  if (!player.isOnGround) {
    player.dy += gravity;
    player.y += player.dy;
  }

  // Ensure the player does not fall below the floor
  if (player.y + player.height > 400) {
    // Assuming 400 is the ground level
    player.y = 400 - player.height;
    player.dy = 0;
    player.isOnGround = true;
  }
}

export function checkCollision(player, platform) {
  if (
    player.y + player.height <= platform.y && // Player is above the platform
    player.y + player.height + player.dy >= platform.y && // Moving downward towards platform
    player.x + player.width > platform.x && // Within platform width
    player.x < platform.x + platform.width
  ) {
    player.dy = 0; // Stop downward movement
    player.y = platform.y - player.height; // Place player on top of platform
    player.isOnGround = true; // Mark as on ground
  } else if (player.y + player.height < platform.y) {
    player.isOnGround = false; // Reset if not on any platform
  }
}
