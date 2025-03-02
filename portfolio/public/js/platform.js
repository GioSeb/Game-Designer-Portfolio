/* // Get the sprite and platforms
const sprite = document.getElementById('sprite');
const platforms = document.querySelectorAll('.platform');

// Function to check collision between two rectangles
function isColliding(rect1, rect2) {
    return (
        rect1.left < rect2.right &&
        rect1.right > rect2.left &&
        rect1.top < rect2.bottom &&
        rect1.bottom > rect2.top
    );
}

// Function to handle collision
function handleCollision(platformRect) {
    console.log('Collision detected with platform!');
    // Here you can implement logic to stop the sprite from falling through the platform
}

// Main loop to check collisions
function checkCollisions() {
    const spriteRect = sprite.getBoundingClientRect();
    platforms.forEach(platform => {
        const platformRect = platform.getBoundingClientRect();
        if (isColliding(spriteRect, platformRect)) {
            handleCollision(platformRect);
        }
    });
}

// Call this function repeatedly to check for collisions
setInterval(checkCollisions, 100); // Check every 100ms */
