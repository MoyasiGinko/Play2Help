const keys = { ArrowLeft: false, ArrowRight: false };

export function handleInput(player) {
  document.addEventListener("keydown", (event) => {
    if (event.code === "ArrowLeft") keys.ArrowLeft = true;
    if (event.code === "ArrowRight") keys.ArrowRight = true;
    if (event.code === "Space") player.jump();
  });

  document.addEventListener("keyup", (event) => {
    if (event.code === "ArrowLeft") keys.ArrowLeft = false;
    if (event.code === "ArrowRight") keys.ArrowRight = false;
  });

  // Apply movement based on key states
  if (keys.ArrowLeft) player.x -= 5;
  if (keys.ArrowRight) player.x += 5;
}
