/* TO DO clean the code */
// Get the sprite element
const sprite = document.getElementById('sprite');
const platforms = document.querySelectorAll('.platform');

//Get sprite boundaries
let spriteBoundaries = sprite.getBoundingClientRect();
/* sprite.style.bottom = `${spriteBoundaries.bottom}px`;
sprite.style.top = `${spriteBoundaries.top}px`;
sprite.style.right = `${spriteBoundaries.right}px`;
sprite.style.left = `${spriteBoundaries.left}px`; */

//Initial sprite variables to be modified
let spriteRight = 0;
let spriteLeft = 0;
let spriteTop = 0;

//Get body height
let bodyHeight = Math.max(
    document.body.scrollHeight,
    document.documentElement.scrollHeight,
    document.body.offsetHeight,
    document.documentElement.offsetHeight,
    document.body.clientHeight,
    document.documentElement.clientHeight
);

//Get body bottom
let bodyBottom = Math.max(
    document.body.scrollHeight,
    document.documentElement.scrollHeight,
    document.body.offsetHeight,
    document.documentElement.offsetHeight,
    document.body.clientHeight,
    document.documentElement.clientHeight
);

// Initial sprite position
sprite.style.bottom = `${bodyHeight - 0}px`; // Start at the top
spriteLeft = window.innerWidth / 2 - 25; // Centered horizontally
sprite.style.left = `${spriteLeft}px`;

// Initial sprite variables to be modified
let spriteBottom = bodyHeight; // Start at the top

// Movement variables
let velocityY = 0; // Vertical velocity (for jumping)
let gravity = 0.5; // Gravity acceleration
let jumpVelocity = 30; // Initial upward velocity when jumping

// TO DO smooth the animation, allow it to move while jumping, fix collision when jumping


// Function to check collision between platform and sprite
function isColliding(rect1, rect2) {
    return (
        rect1.left < rect2.right &&
        rect1.right > rect2.left &&
        rect1.top < rect2.bottom &&
        rect1.bottom > rect2.top
    );
}

// Function to check collision and adjust sprite position
function collisionCheck() {
    let isOnPlatform = false; // Flag to check if sprite is on a platform
    platforms.forEach(platform => {
        const platformBoundaries = platform.getBoundingClientRect();
        if (isColliding(spriteBoundaries, platformBoundaries) && !isJumping) {
            isOnPlatform = true; // Set flag if collision detected
            // Adjust sprite position to the top of the platform
            const spriteHeight = spriteBoundaries.height;
            const platformTop = platformBoundaries.top;
            spriteBottom = platformTop + spriteHeight;
            sprite.style.bottom = `${spriteBottom}px`;
            velocityY = 0; // Reset velocity when landing on a platform
            isOnPlatform = true;
            return; // Exit loop early if collision found
        }
    });
}

/* // Function to handle collision
function handleCollision(spriteBoundaries, platformRect) {
    console.log('Collision detected with platform!');
    // Adjust sprite position to prevent it from falling through the platform
    platforms.forEach(platform => {
        const platformBoundaries = platform.getBoundingClientRect();

    });
    const spriteHeight = spriteBoundaries.height;
    const platformTop = platformRect.top;
    sprite.style.bottom = `${window.innerHeight - platformTop + spriteHeight}px`;
    velocityY = 0; // Reset velocity when landing on a platform
} */

let isJumping = false;
//check if canJump to manipulate later
let canJump = false;
function checkCanJump() {
    if(!isJumping && velocityY === 0){
        canJump = true;
    } else {
        canJump = false; // Reset canJump if conditions are not met
    }
}

//implementing checkCanJump
checkCanJump();
// Handle key presses
document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft') {
        spriteLeft -= 10; // Move left
    } else if (e.key === 'ArrowRight') {
        spriteLeft += 10; // Move right
    } else if (e.key === ' ') {
        e.preventDefault(); // Prevent default scrolling behavior immediatel
        checkCanJump;
        if (!isJumping && canJump){ // Allow jump if nearly on the ground
            velocityY = -jumpVelocity; // Note: Negative for upward movement
            isJumping = true; // Set jump flag
/*             setTimeout(() => {
                isJumping = false; // Reset jump flag after a delay
            }, 10); // Adjust the delay as needed
            console.log(isJumping); */
        }
    }
});
document.addEventListener('keyup', (e) => {
    if (e.key === ' ') {
        isJumping = false; // Reset flag when space bar is released
    }
});

// Function to update sprite position
function updateSpritePosition() {

/*     // Apply gravity
    let isOnPlatform = false; // Flag to check if sprite is on a platform
    platforms.forEach(platform => {
        const platformBoundaries = platform.getBoundingClientRect();
        if (isColliding(spriteBoundaries, platformBoundaries)) {
            isOnPlatform = true; // Set flag if collision detected
            return; // Exit loop early if collision found
        }
        if (isOnPlatform && !isJumping) { // Reset velocity if on a platform and not jumping
            velocityY = 0;
        } else if (!isOnPlatform) { // Apply gravity if not on a platform
            velocityY += gravity;
        }
    }); */

        // Apply gravity
    velocityY = 0 + gravity;
    let isOnPlatform = false; // Flag to check if sprite is on a platform
    console.log(velocityY);

    platforms.forEach(platform => {
        const platformBoundaries = platform.getBoundingClientRect();
        if (isColliding(spriteBoundaries, platformBoundaries)) {
            isOnPlatform = true; // Set flag if collision detected
            if(velocityY >= 0){
            // Adjust sprite position to prevent it from falling through the platform
            const spriteHeight = spriteBoundaries.height;
            const platformTop = platformBoundaries.top;
            sprite.style.bottom = `${platformTop + spriteHeight}px`;
            velocityY = 0; // Reset velocity when landing on a platform
            return;
            }
        }
    });



    if (!isOnPlatform) {
        // Apply gravity if not on a platform
        velocityY += gravity;
    }
    console.log(isJumping);

    // Update vertical position
    spriteBottom -= velocityY; // Note: Subtract velocityY to move down
    sprite.style.bottom = `${spriteBottom}px`;

    // Update sprite's style for horizontal movement
    sprite.style.left = `${spriteLeft}px`; // Update left position regardless of jump state

/*     // Prevent sprite from falling off the screen
    if (spriteBoundaries.bottom > bodyBottom - 150) {
        spriteBottom = bodyBottom - 150 - spriteBoundaries.height; // Correct positioning
        sprite.style.bottom = `${spriteBottom}px`;
        velocityY = 0; // Reset velocity when hitting the ground
    } */

    // Update sprite's style
    sprite.style.left = `${spriteLeft}px`;

    // Update sprite boundaries after position change
    spriteBoundaries = sprite.getBoundingClientRect();

}




// Update sprite position repeatedly
setInterval(updateSpritePosition, 16); // Approximately 60 FPS

/* function updateSpritePosition() {
    // ... (same logic as above)

    requestAnimationFrame(updateSpritePosition);
}

updateSpritePosition(); // Start the animation loop */

/* // Function to handle collision
function handleCollision(platformRect) {
    console.log('Collision detected with platform!');
    // Adjust sprite position to prevent it from falling through the platform
    const spriteRect = sprite.getBoundingClientRect();
    spriteBottom = window.innerHeight - platformRect.top - spriteRect.height;
    velocityY = 0; // Reset velocity when landing on a platform
} */


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
