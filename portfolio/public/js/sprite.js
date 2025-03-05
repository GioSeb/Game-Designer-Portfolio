// Get the sprite element
const sprite = document.getElementById('sprite');
const platforms = document.querySelectorAll('.platform');
console.log(platforms);

/* //Get platforms boundings
platforms.forEach(platform => {
    platformBoundaries = platform.getBoundingClientRect();
    console.log(platformBoundaries);
});

//Get sprite boundaries
let spriteBoundaries = sprite.getBoundingClientRect(); */

// Function to check collision between platform and sprite
function isColliding(rect1, rect2) {
    return (
        rect1.left < rect2.right &&
        rect1.right > rect2.left &&
        rect1.top < rect2.bottom &&
        rect1.bottom > rect2.top
    );
}

//Get sprite boundaries
let spriteBoundaries = sprite.getBoundingClientRect();

// Initial sprite position
let spriteBottom = document.body.offsetHeight - 150; // Use document body height
let spriteLeft = window.innerWidth / 2 - 25; // Centered horizontally

// Movement variables
let velocityY = 0; // Vertical velocity (for jumping)
let gravity = 0.5; // Gravity acceleration
let jumpVelocity = 30; // Initial upward velocity when jumping

// Function to handle collision
function handleCollision(platformRect) {
    console.log('Collision detected with platform!');
    // Adjust sprite position to prevent it from falling through the platform
    const spriteRect = sprite.getBoundingClientRect();
    spriteBottom = window.innerHeight - platformRect.top - spriteRect.height;
    velocityY = 0; // Reset velocity when landing on a platform
}

// Function to update sprite position
function updateSpritePosition() {
    // Apply gravity
    velocityY += gravity; // Corrected gravity application

    // Update vertical position
    spriteBottom -= velocityY; // Move sprite based on velocity

    console.log(`Velocity Y: ${velocityY}`);
    // Prevent sprite from falling off the screen
    if (spriteBottom > window.innerHeight - 150) {
        spriteBottom = window.innerHeight - 150;
        velocityY = 0; // Reset velocity when hitting the ground
    }

    // Check for collisions with platforms
    const spriteRect = sprite.getBoundingClientRect();
    console.log(spriteRect);

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
        e.preventDefault(); // Prevent default scrolling behavior
        if (velocityY === 0) { // Only jump if on the ground
            velocityY = jumpVelocity; // Set initial jump velocity
        }
    }
});

// Update sprite position repeatedly
setInterval(updateSpritePosition, 16); // Approximately 60 FPS

/* // Movement variables
let velocityY = 0; // Vertical velocity (for jumping)
let gravity = 0.5; // Gravity acceleration
let jumpVelocity = 30; // Initial upward velocity when jumping



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
    console.log(`Velocity Y: ${velocityY}`);
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

document.addEventListener('keydown', function(event) {
    // Check if the pressed key is the space bar (keyCode 32 or key " ")
    if (event.code === 'Space' || event.keyCode === 32) {
        event.preventDefault(); // Prevent the default scrolling behavior
    }
});

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
 */
