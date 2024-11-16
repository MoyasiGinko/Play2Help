import Coin from "./coin.js";
import Platform from "./platform.js";
import Monster from "./monster.js";

export function createMap() {
  const groundTexture = "./assets/ground.png";
  const floatingTexture = "./assets/brick.png";
  const monsterTexture = "./assets/monster.png";

  // Get the canvas and calculate the y-coordinate for ground platforms
  const canvas = document.getElementById("gameCanvas");
  const groundY = canvas.height - 50; // 50 is the height of the ground platform

  // Ground platforms where monsters will be placed
  const groundTerrain = [
    new Platform(0, groundY, 800, 50, groundTexture),
    new Platform(850, groundY, 800, 50, groundTexture),
    new Platform(1750, groundY, 800, 50, groundTexture),
    new Platform(2750, groundY, 800, 50, groundTexture),
    new Platform(3700, groundY, 800, 50, groundTexture),
  ];

  // Floating platforms for coins (positions relative to groundY)
  const floatingPlatforms = [
    new Platform(200, groundY - 100, 120, 20, floatingTexture),
    new Platform(400, groundY - 150, 120, 20, floatingTexture),
    new Platform(600, groundY - 130, 150, 20, floatingTexture),
    new Platform(900, groundY - 170, 220, 20, floatingTexture),
    new Platform(1300, groundY - 230, 200, 20, floatingTexture),
    new Platform(1600, groundY - 250, 80, 20, floatingTexture),
    new Platform(1900, groundY - 200, 100, 20, floatingTexture),
    new Platform(2100, groundY - 100, 120, 20, floatingTexture),
    new Platform(2400, groundY - 50, 100, 20, floatingTexture),
    new Platform(2700, groundY - 150, 150, 20, floatingTexture),
    new Platform(3100, groundY - 250, 100, 20, floatingTexture),
    new Platform(3400, groundY - 200, 120, 20, floatingTexture),
  ];

  // Coins placed above the floating platforms
  const coins = floatingPlatforms.map(
    (platform) => new Coin(platform.x + platform.width / 2, platform.y - 20)
  );

  // Monsters placed on the ground platforms
  const monsters = groundTerrain.map(
    (platform) =>
      new Monster(
        platform.x + platform.width / 2,
        platform.y - 2,
        monsterTexture
      )
  );

  // Gap platforms
  const gapPlatforms = [
    new Platform(1200, groundY, 50, 50, groundTexture),
    new Platform(1800, groundY, 50, 50, groundTexture),
    new Platform(3300, groundY, 50, 50, groundTexture),
  ];

  // Return the map object with all elements
  return {
    platforms: [...groundTerrain, ...floatingPlatforms, ...gapPlatforms],
    coins,
    monsters, // Include monsters in the map
  };
}
