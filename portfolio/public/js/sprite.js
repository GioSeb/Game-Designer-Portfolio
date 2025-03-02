let x = 0;
let y = 0;

function sprite() {
    return {
      x: 50, // Initial X position
      y: 300, // Initial Y position
      velocityY: 0,
      gravity: 1,
      isJumping: false,
      platforms: [
        { id: 1, x: 50, y: 400, width: 100, height: 20 },
        { id: 2, x: 200, y: 300, width: 100, height: 20 },
        { id: 3, x: 350, y: 200, width: 100, height: 20 },
      ],

      init() {
        this.$nextTick(() => this.applyGravity());
      },

      applyGravity() {
        setInterval(() => {
          if (!this.isJumping) {
            this.y += this.velocityY;
            this.velocityY += this.gravity;

            // Check collision with platforms
            this.platforms.forEach(platform => {
              if (
                this.y + 10 >= platform.y &&
                this.y + 10 <= platform.y + platform.height &&
                this.x + 10 >= platform.x &&
                this.x <= platform.x + platform.width
              ) {
                this.y = platform.y - 10; // Adjust sprite to stand on the platform
                this.velocityY = 0;
              }
            });

            // Prevent sprite from falling below screen
            if (this.y > window.innerHeight - 10) {
              this.y = window.innerHeight - 10;
              this.velocityY = 0;
            }
          }
        }, 16); // Run every frame (~60 FPS)
      },

      move(event) {
        const step = 10;
        if (event.key === "ArrowLeft") {
          this.x -= step;
        } else if (event.key === "ArrowRight") {
          this.x += step;
        } else if (event.key === "ArrowUp" && !this.isJumping) {
          this.isJumping = true;
          let jumpHeight = -15; // Negative for upward movement
          let jumpInterval = setInterval(() => {
            this.y += jumpHeight;
            jumpHeight += this.gravity;

            if (jumpHeight > 0) {
              clearInterval(jumpInterval);
              this.isJumping = false;
            }
          }, 16);
        }
      }
    };
  }
