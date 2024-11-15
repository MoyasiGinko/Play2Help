export default class Monster {
  constructor(x, y) {
    this.x = x;
    this.y = y;
    this.width = 30; // Monster width
    this.height = 50; // Monster height
    this.color = "red"; // Monster color
    this.active = true; // Monster is active until player collides
  }

  draw(ctx, offsetX) {
    if (this.active) {
      ctx.fillStyle = this.color;
      ctx.fillRect(
        this.x - offsetX,
        this.y - this.height,
        this.width,
        this.height
      );
    }
  }

  checkCollision(player) {
    if (
      this.active &&
      player.x < this.x + this.width &&
      player.x + player.width > this.x &&
      player.y < this.y &&
      player.y + player.height > this.y
    ) {
      this.active = false; // Monster is deactivated upon collision
      return true; // Collision detected
    }
    return false; // No collision
  }
}
