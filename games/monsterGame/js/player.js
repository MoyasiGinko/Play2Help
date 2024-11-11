export default class Player {
  constructor(x, y) {
    this.x = x;
    this.y = y;
    this.width = 30;
    this.height = 30;
    this.color = "red";
    this.dy = 0;
    this.jumpStrength = -16;
    this.isOnGround = false;
  }

  jump() {
    if (this.isOnGround) {
      this.dy = this.jumpStrength;
      this.isOnGround = false;
    }
  }

  draw(ctx, offsetX) {
    ctx.fillStyle = this.color;
    ctx.fillRect(this.x - offsetX, this.y, this.width, this.height);
  }
}
