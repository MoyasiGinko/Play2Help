import Platform from "./platform.js";

export function createMap() {
  // Paths to your images
  const groundTexture = "./assets/ground.png"; // Path to your ground texture
  const floatingTexture = "./assets/brick.png"; // Path to your brick texture for floating platforms

  const groundTerrain = [
    new Platform(0, 350, 800, 50, groundTexture),
    new Platform(850, 350, 800, 50, groundTexture),
    new Platform(1750, 350, 800, 50, groundTexture),
    new Platform(2750, 350, 800, 50, groundTexture),
    new Platform(3700, 350, 800, 50, groundTexture),
  ];

  const floatingPlatforms = [
    new Platform(200, 250, 120, 20, floatingTexture),
    new Platform(400, 200, 120, 20, floatingTexture),
    new Platform(600, 220, 150, 20, floatingTexture),
    new Platform(900, 180, 220, 20, floatingTexture),
    new Platform(1300, 120, 200, 20, floatingTexture),
    new Platform(1600, 100, 80, 20, floatingTexture),
    new Platform(1900, 150, 100, 20, floatingTexture),
    new Platform(2100, 250, 120, 20, floatingTexture),
    new Platform(2400, 300, 100, 20, floatingTexture),
    new Platform(2700, 200, 150, 20, floatingTexture),
    new Platform(3100, 100, 100, 20, floatingTexture),
    new Platform(3400, 150, 120, 20, floatingTexture),
  ];

  const gapPlatforms = [
    new Platform(1200, 350, 50, 50, groundTexture),
    new Platform(1800, 350, 50, 50, groundTexture),
    new Platform(3300, 350, 50, 50, groundTexture),
  ];

  return [...groundTerrain, ...floatingPlatforms, ...gapPlatforms];
}
