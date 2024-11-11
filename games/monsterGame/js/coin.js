// coin.js

export default class Coin {
  constructor(x, y) {
    this.x = x;
    this.y = y;
    this.radius = 10;
    this.collected = false;
    this.color = "yellow"; // Coin color
  }

  draw(ctx, offsetX) {
    if (!this.collected) {
      ctx.fillStyle = this.color;
      ctx.beginPath();
      ctx.arc(this.x - offsetX, this.y, this.radius, 0, Math.PI * 2);
      ctx.fill();
    }
  }

  collect(player) {
    const dist = Math.sqrt(
      Math.pow(this.x - player.x, 2) + Math.pow(this.y - player.y, 2)
    );
    if (dist < this.radius + player.width / 2 && !this.collected) {
      this.collected = true;
      score += 10; // Increase score
    }
  }
}
