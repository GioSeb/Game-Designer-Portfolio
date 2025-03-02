// Get the sprite element
const sprite = document.getElementById('sprite');
const platforms = document.querySelectorAll('.platform');

// Initial sprite position
let spriteBottom = document.body.offsetHeight - 150; // Use document body height
let spriteLeft = window.innerWidth / 2 - 25; // Centered horizontally

// Movement variables
let velocityY = 0; // Vertical velocity (for jumping)
let gravity = 0.5; // Gravity acceleration
let jumpVelocity = -10; // Initial upward velocity when jumping

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
    // Adjust sprite position to prevent it from falling through the platform
    const spriteRect = sprite.getBoundingClientRect();
    sprite.style.bottom = `${platformRect.top - spriteRect.height}px`;
}

// Function to update sprite position
function updateSpritePosition() {
    // Apply gravity
    velocityY += gravity;

    // Update vertical position
    spriteBottom += velocityY;

    // Prevent sprite from falling off the screen
    if (spriteBottom > window.innerHeight - 150) {
        spriteBottom = window.innerHeight - 150;
        velocityY = 0; // Reset velocity when hitting the ground
    }

    // Check for collisions with platforms
    const spriteRect = sprite.getBoundingClientRect();
    platforms.forEach(platform => {
        const platformRect = platform.getBoundingClientRect();
        if (isColliding(spriteRect, platformRect)) {
            handleCollision(platformRect);
        }
    });

    // Update sprite's style
    sprite.style.bottom = `${spriteBottom}px`;
    sprite.style.left = `${spriteLeft}px`;
}

// Handle key presses
document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft') {
        spriteLeft -= 10; // Move left
    } else if (e.key === 'ArrowRight') {
        spriteLeft += 10; // Move right
    } else if (e.key === ' ') {
        if (velocityY === 0) { // Only jump if on the ground
            velocityY = jumpVelocity;
        }
    }
});

// Update sprite position repeatedly
setInterval(updateSpritePosition, 16); // Approximately 60 FPS
