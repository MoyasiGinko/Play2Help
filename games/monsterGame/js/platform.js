export default class Platform {
  constructor(x, y, width, height) {
    this.x = x;
    this.y = y;
    this.width = width;
    this.height = height;
    this.color = "brown"; // Platform color
  }

  // Draw the platform
  draw(ctx, offsetX) {
    ctx.fillStyle = this.color;
    ctx.fillRect(this.x - offsetX, this.y, this.width, this.height);
  }
}
