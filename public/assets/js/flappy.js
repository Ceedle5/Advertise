const canvas = document.getElementById("flappy");
const ctx = canvas.getContext("2d");
const retryBtn = document.getElementById("retryBtn");

let frames = 0;
let score = 0;
let gameOver = false;

const DEGREE = Math.PI / 180;

const bird = {
  x: 80,
  y: 150,
  radius: 15,
  gravity: 0.25,
  jump: 4.6,
  speed: 0,
  rotation: 0,
  flap() {
    this.speed = -this.jump;
  },
  update() {
    this.speed += this.gravity;
    this.y += this.speed;

    if (this.y + this.radius >= canvas.height) {
      this.y = canvas.height - this.radius;
      this.speed = 0;
      gameOver = true;
    }

    this.rotation = this.speed >= this.jump ? 90 * DEGREE : -25 * DEGREE;
  },
  draw() {
    ctx.save();
    ctx.translate(this.x, this.y);
    ctx.rotate(this.rotation);

    ctx.fillStyle = "#fff";
    ctx.beginPath();
    ctx.arc(0, 0, this.radius, 0, Math.PI * 2);
    ctx.fill();

    ctx.fillStyle = "#000";
    ctx.beginPath();
    ctx.arc(5, -5, 2, 0, Math.PI * 2);
    ctx.fill();

    ctx.fillStyle = "orange";
    ctx.beginPath();
    ctx.moveTo(15, 0);
    ctx.lineTo(20, -3);
    ctx.lineTo(20, 3);
    ctx.closePath();
    ctx.fill();

    ctx.fillStyle = "red";
    ctx.beginPath();
    ctx.arc(-3, -15, 4, 0, Math.PI * 2);
    ctx.fill();

    ctx.restore();
  }
};

const pipes = [];
const pipeGap = 150;
const pipeWidth = 50;
const pipeInterval = 100;

function drawTrees() {
    for (let i = 0; i < pipes.length; i++) {
      let p = pipes[i];
  
      // === TOP TREE ===
      ctx.fillStyle = "#8B4513"; // tree trunk (brown)
      ctx.fillRect(p.x + pipeWidth / 3, 0, pipeWidth / 3, p.top);
  
      drawLeafCluster(p.x + pipeWidth / 2, p.top);
  
      // === BOTTOM TREE ===
      ctx.fillStyle = "#8B4513";
      ctx.fillRect(p.x + pipeWidth / 3, p.top + pipeGap, pipeWidth / 3, canvas.height - p.top - pipeGap);
  
      drawLeafCluster(p.x + pipeWidth / 2, p.top + pipeGap);
    }
  }
  


  function drawLeafCluster(x, y) {
    ctx.fillStyle = "#2E8B57"; // green
  
    // Main round leaf
    ctx.beginPath();
    ctx.arc(x, y, 25, 0, Math.PI * 2);
    ctx.fill();
  
    // Side leaves
    ctx.beginPath();
    ctx.arc(x - 15, y + 5, 15, 0, Math.PI * 2);
    ctx.fill();
  
    ctx.beginPath();
    ctx.arc(x + 15, y + 5, 15, 0, Math.PI * 2);
    ctx.fill();
  
    ctx.beginPath();
    ctx.arc(x, y + 20, 18, 0, Math.PI * 2);
    ctx.fill();
  }
  
  
  

function checkCollisionWithPipes() {
  for (let p of pipes) {
    if (
      bird.x + bird.radius > p.x &&
      bird.x - bird.radius < p.x + pipeWidth
    ) {
      if (
        bird.y - bird.radius < p.top ||
        bird.y + bird.radius > p.top + pipeGap
      ) {
        gameOver = true;
      }
    }
  }
}

const grenades = [];

function drawGrenades() {
  grenades.forEach(grenade => {
    if (!grenade.exploded) {
      ctx.fillStyle = grenade.color;
      ctx.beginPath();
      ctx.arc(grenade.x, grenade.y, grenade.radius, 0, Math.PI * 2);
      ctx.fill();
    }
  });
}

function updateGrenades() {
  grenades.forEach(grenade => {
    if (!grenade.exploded) {
      grenade.x += grenade.speedX;
      grenade.y += grenade.speedY;

      // Check if the bird hits the grenade
      const dx = bird.x - grenade.x;
      const dy = bird.y - grenade.y;
      const distance = Math.sqrt(dx * dx + dy * dy);

      if (distance < bird.radius + grenade.radius) {
        gameOver = true;
        grenade.exploded = true;
        triggerExplosion(grenade);
      }
    }
  });
}

function triggerExplosion(grenade) {
  ctx.fillStyle = "yellow";
  ctx.beginPath();
  ctx.arc(grenade.x, grenade.y, grenade.radius * 2, 0, Math.PI * 2);
  ctx.fill();
  setTimeout(() => {
    ctx.clearRect(grenade.x - grenade.radius * 2, grenade.y - grenade.radius * 2, grenade.radius * 4, grenade.radius * 4);
  }, 200);
}

let screenShake = 0;

const boss = {
  x: canvas.width - 100,
  y: 50,
  w: 60,
  h: 60,
  throwInterval: 150,
  throwTimer: 0,
  charge: false,
  throwGrenade() {
    // Calculate direction towards bird
    const dx = bird.x - this.x;
    const dy = bird.y - this.y;
    const angle = Math.atan2(dy, dx);
    
    // Grenade's speed and direction
    const grenadeSpeed = 3;
    const speedX = Math.cos(angle) * grenadeSpeed;
    const speedY = Math.sin(angle) * grenadeSpeed;

    grenades.push({
      x: this.x + this.w / 2,
      y: this.y + this.h,
      radius: 10,
      speedX: speedX,
      speedY: speedY,
      color: "red",
      exploded: false
    });
  },
  draw() {
    ctx.save();
  
    if (screenShake > 0) {
      const shakeX = (Math.random() - 0.5) * 10;
      const shakeY = (Math.random() - 0.5) * 10;
      ctx.translate(shakeX, shakeY);
    }
  
    // Boss Body
    ctx.fillStyle = "#3B0A0A";
    ctx.beginPath();
    ctx.arc(this.x + this.w / 2, this.y + this.h / 2, this.w / 2, 0, Math.PI * 2);
    ctx.fill();
  
    // Eyes
    ctx.fillStyle = "#fff";
    ctx.beginPath();
    ctx.arc(this.x + 20, this.y + 25, 5, 0, Math.PI * 2);
    ctx.arc(this.x + 40, this.y + 25, 5, 0, Math.PI * 2);
    ctx.fill();
  
    // Mouth
    ctx.fillStyle = "red";
    ctx.fillRect(this.x + 20, this.y + 40, 20, 5);
  
    // Eyebrows
    ctx.strokeStyle = "#000";
    ctx.lineWidth = 2;
    ctx.beginPath();
    ctx.moveTo(this.x + 15, this.y + 20);
    ctx.lineTo(this.x + 25, this.y + 15);
    ctx.moveTo(this.x + 35, this.y + 15);
    ctx.lineTo(this.x + 45, this.y + 20);
    ctx.stroke();
  
    ctx.restore();
  },
  
  update() {
    this.throwTimer++;
  
    if (this.throwTimer >= this.throwInterval - Math.random() * 50) {
      this.throwGrenade();
      this.throwTimer = 0;
      screenShake = 10;
    }
  
    if (screenShake > 0) screenShake--;
  }
  
};

function draw() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  drawTrees();
    bird.draw();
  drawGrenades();

  ctx.fillStyle = "#fff";
  ctx.font = "24px Arial";
  ctx.fillText("Score: " + score, 20, 40);

  if (gameOver) {
    ctx.fillStyle = "#fff";
    ctx.font = "48px Arial";
    ctx.fillText("Game Over", canvas.width / 2 - 120, canvas.height / 2);
    retryBtn.style.display = "block";
  }
}


function updateDrones() {
    for (let drone of drones) {
      drone.x -= 2;
  
      drone.fireDelay++;
      if (drone.fireDelay >= 100) {
        drone.laserY = drone.y + drone.h;
        drone.fireDelay = 0;
      }
  
      // Laser hits bird?
      if (
        drone.laserY &&
        bird.x > drone.x && bird.x < drone.x + drone.w &&
        bird.y > drone.laserY && bird.y < drone.laserY + 10
      ) {
        gameOver = true;
      }
    }
  }
  
  function drawDrones() {
    for (let drone of drones) {
      ctx.fillStyle = "#555";
      ctx.fillRect(drone.x, drone.y, drone.w, drone.h);
  
      ctx.fillStyle = "#0ff";
      ctx.beginPath();
      ctx.arc(drone.x + drone.w / 2, drone.y + drone.h / 2, 4, 0, Math.PI * 2);
      ctx.fill();
  
      if (drone.laserY) {
        ctx.strokeStyle = "red";
        ctx.lineWidth = 2;
        ctx.beginPath();
        ctx.moveTo(drone.x + drone.w / 2, drone.y + drone.h);
        ctx.lineTo(drone.x + drone.w / 2, drone.laserY + 10);
        ctx.stroke();
      }
    }
  }

  

function update() {
  frames++;
  bird.update();
  updateGrenades();

  if (frames % pipeInterval === 0) {
    const top = Math.random() * (canvas.height - pipeGap - 100) + 50;
    pipes.push({ x: canvas.width, top: top });
  }

  for (let i = 0; i < pipes.length; i++) {
    let p = pipes[i];
    p.x -= 2;

    if (
      bird.x + bird.radius > p.x &&
      bird.x - bird.radius < p.x + pipeWidth &&
      (bird.y - bird.radius < p.top || bird.y + bird.radius > p.top + pipeGap)
    ) {
      gameOver = true;
    }

    if (p.x + pipeWidth < bird.x && !p.passed) {
      score++;
      p.passed = true;
    }
  }

  if (pipes.length && pipes[0].x + pipeWidth < 0) {
    pipes.shift();
  }

  boss.update();
}

function loop() {
  update();
  draw();

  if (!gameOver) {
    requestAnimationFrame(loop);
  }
}

document.addEventListener("keydown", (e) => {
  if (e.code === "Space" || e.code === "ArrowUp") {
    bird.flap();
  }

  if (["ArrowUp", "ArrowDown"].includes(e.code)) {
    e.preventDefault();
  }
});

retryBtn.addEventListener("click", resetGame);

function resetGame() {
  frames = 0;
  score = 0;
  gameOver = false;
  pipes.length = 0;
  grenades.length = 0;
  bird.y = 150;
  bird.speed = 0;
  retryBtn.style.display = "none";
  loop();
}

loop();
