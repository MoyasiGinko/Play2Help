// terrain.js
import Platform from "./platform.js";

export function createMap() {
  // Main ground terrain, simulating a scrolling platformer
  const groundTerrain = [
    new Platform(0, 350, 800, 50), // Start platform
    new Platform(850, 350, 800, 50), // Extended ground to create continuity
    new Platform(1750, 350, 800, 50),
    new Platform(2750, 350, 800, 50),
    new Platform(3700, 350, 800, 50), // Further along, so the map is very long
  ];

  // Floating platforms for challenges (at various heights and distances)
  const floatingPlatforms = [
    new Platform(200, 220, 120, 20), // Small platform
    new Platform(400, 300, 120, 20), // Higher platform
    new Platform(600, 300, 150, 20), // Wider platform
    new Platform(900, 300, 100, 20), // Smaller and higher
    new Platform(1300, 300, 200, 20), // Larger floating platform
    new Platform(1600, 300, 80, 20), // Small, very high up
    new Platform(1900, 300, 100, 20), // High and small
    new Platform(2100, 300, 120, 20), // Lower floating platform
    new Platform(2400, 300, 100, 20), // Medium-high platform
    new Platform(2700, 300, 150, 20), // Wider, closer to ground
    new Platform(3100, 300, 100, 20), // High up
    new Platform(3400, 300, 120, 20), // Near end, at medium height
  ];

  // Creating gaps to increase challenge and variety
  const gapPlatforms = [
    new Platform(1200, 350, 50, 50), // Small gap requiring jump
    new Platform(1800, 350, 50, 50), // Another small gap
    new Platform(3300, 350, 50, 50), // Towards the end, another jump
  ];

  return [...groundTerrain, ...floatingPlatforms, ...gapPlatforms];
}
