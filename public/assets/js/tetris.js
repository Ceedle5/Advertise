const canvas = document.getElementById('tetris');
const context = canvas.getContext('2d');
context.scale(25, 25); // 25px per block


// ——— Tetromino Definitions (4 rotations) ———
const tetrominoes = {
  T: [
    [[0,0,0],[1,1,1],[0,1,0]],
    [[0,1,0],[1,1,0],[0,1,0]],
    [[0,1,0],[1,1,1],[0,0,0]],
    [[0,1,0],[0,1,1],[0,1,0]],
  ],
  O: [ [[2,2],[2,2]] , [[2,2],[2,2]] , [[2,2],[2,2]] , [[2,2],[2,2]] ],
  L: [
    [[0,3,0],[0,3,0],[0,3,3]],
    [[0,0,0],[3,3,3],[3,0,0]],
    [[3,3,0],[0,3,0],[0,3,0]],
    [[0,0,3],[3,3,3],[0,0,0]],
  ],
  J: [
    [[0,4,0],[0,4,0],[4,4,0]],
    [[4,0,0],[4,4,4],[0,0,0]],
    [[0,4,4],[0,4,0],[0,4,0]],
    [[0,0,0],[4,4,4],[0,0,4]],
  ],
  I: [
    [[0,5,0,0],[0,5,0,0],[0,5,0,0],[0,5,0,0]],
    [[0,0,0,0],[5,5,5,5],[0,0,0,0],[0,0,0,0]],
    [[0,0,5,0],[0,0,5,0],[0,0,5,0],[0,0,5,0]],
    [[0,0,0,0],[0,0,0,0],[5,5,5,5],[0,0,0,0]],
  ],
  S: [
    [[0,6,6],[6,6,0],[0,0,0]],
    [[0,6,0],[0,6,6],[0,0,6]],
    [[0,0,0],[0,6,6],[6,6,0]],
    [[6,0,0],[6,6,0],[0,6,0]],
  ],
  Z: [
    [[7,7,0],[0,7,7],[0,0,0]],
    [[0,0,7],[0,7,7],[0,7,0]],
    [[0,0,0],[7,7,0],[0,7,7]],
    [[0,7,0],[7,7,0],[7,0,0]],
  ],
};

// ——— Block Colors ———
const colors = [
    null,
    '#FF0D72', // pink
    '#0DC2FF', // cyan
    '#0DFF72', // green
    '#F538FF', // purple
    '#FF8E0D', // orange
    '#FFE138', // yellow
    '#3877FF'  // blue
  ];
  

// ——— Game State ———
let arena       = createMatrix(12, 20);
let dropCounter = 0;
const dropInterval = 1000;
let lastTime    = 0;
let comboCount  = 0;

// ——— Player State ———
const matrix = [
    [0, 1, 0],
    [1, 1, 1],
    [0, 0, 0]
  ];
  
  const player = {
    pos: { x: 4, y: 0 },
    matrix: matrix
  };

// ——— Helpers ———
function createMatrix(w, h) {
  const m = [];
  while (h--) m.push(new Array(w).fill(0));
  return m;
}

function collide(arena, player) {
  const [m, o] = [player.matrix, player.pos];
  for (let y = 0; y < m.length; ++y) {
    for (let x = 0; x < m[y].length; ++x) {
      if (
        m[y][x] !== 0 &&
        (arena[y + o.y] && arena[y + o.y][x + o.x]) !== 0
      ) {
        return true;
      }
    }
  }
  return false;
}

function merge(arena, player) {
  player.matrix.forEach((row, y) =>
    row.forEach((value, x) => {
      if (value !== 0) {
        arena[y + player.pos.y][x + player.pos.x] = value;
      }
    })
  );
}

// ——— Player Actions ———
function playerReset() {
  const types = Object.keys(tetrominoes);
  player.type   = types[Math.floor(Math.random() * types.length)];
  player.rot    = 0;
  player.matrix = tetrominoes[player.type][0];
  player.pos.y  = 0;
  player.pos.x  = ((arena[0].length / 2) | 0) - ((player.matrix[0].length / 2) | 0);
  if (collide(arena, player)) {
    arena.forEach(row => row.fill(0));
    player.score = 0;
  }
  comboCount = 0;
}

function playerDrop() {
  player.pos.y++;
  if (collide(arena, player)) {
    player.pos.y--;
    merge(arena, player);
    arenaSweep();
    playerReset();
  }
  dropCounter = 0;
}

function playerMove(dir) {
  player.pos.x += dir;
  if (collide(arena, player)) player.pos.x -= dir;
}

function playerRotate(dir) {
  const prevRot = player.rot;
  player.rot    = (player.rot + dir + 4) % 4;
  player.matrix = tetrominoes[player.type][player.rot];
  if (collide(arena, player)) {
    // basic wall‑kick
    player.rot    = prevRot;
    player.matrix = tetrominoes[player.type][prevRot];
  }
}

// ——— Line Clears & Combo Popups ———
function arenaSweep() {
  let rowCount = 1;
  for (let y = arena.length - 1; y >= 0; --y) {
    if (arena[y].every(cell => cell !== 0)) {
      const row = arena.splice(y, 1)[0].fill(0);
      arena.unshift(row);
      player.score += rowCount * 10;
      rowCount *= 2;
      comboCount++;
      if (comboCount > 1) showComboPopup(`${comboCount}× COMBO!`);
      y++; // re-check this index
    }
  }
}

// ——— Drawing ———
function drawMatrix(matrix, offset) {
    matrix.forEach((row, y) => {
      row.forEach((value, x) => {
        if (value !== 0) {
          const px = x + offset.x;
          const py = y + offset.y;
  
          // fill
          context.fillStyle   = colors[value];
          context.shadowColor = colors[value];
          context.shadowBlur  = 10;
          context.fillRect(px, py, 1, 1);
  
          // stroke
          context.lineWidth   = 0.05;
          context.strokeStyle = '#000';
          context.strokeRect(px, py, 1, 1);
  
          // reset shadow
          context.shadowBlur = 0;
        }
      });
    });
  }
  
function draw() {
  context.clearRect(0, 0, canvas.width, canvas.height);
  drawMatrix(arena,         { x: 0, y: 0 });
  drawMatrix(player.matrix, player.pos);
  context.fillStyle = 'white';
  context.font       = '16px monospace';
  context.fillText(`Score: ${player.score}`, 1, 1);
}

// ——— Pop‑up Utilities ———
function showPopup(text, className = 'popup') {
  const pop = document.createElement('div');
  pop.className   = className;
  pop.textContent = text;
  document.body.appendChild(pop);
  setTimeout(() => {
    pop.style.transform = 'translate(-50%, -250%) scale(0.8)';
    pop.style.opacity   = '0';
  }, 800);
  setTimeout(() => pop.remove(), 1600);
}

function showComboPopup(text) {
  showPopup(text, 'combo-popup');
}
function showStartPopup() {
  showPopup('Get Ready!', 'start-popup');
}

// ——— Game Loop ———
function update(time = 0) {
  const delta = time - lastTime;
  lastTime    = time;
  dropCounter += delta;
  if (dropCounter > dropInterval) playerDrop();
  draw();
  requestAnimationFrame(update);
}

// ——— Input Handling ———
document.addEventListener('keydown', event => {
  switch (event.keyCode) {
    case 37: // ←
      playerMove(-1);
      break;
    case 39: // →
      playerMove(1);
      break;
    case 40: // ↓ soft drop
      playerDrop();
      break;
    case 38: // ↑ rotate
      playerRotate(1);
      break;
    case 32: // Space = soft drop one
      playerDrop();
      break;
  }
});

// ——— Start the Game ———
showStartPopup();
setTimeout(() => {
  playerReset();
  update();
}, 1200);

// Existing code...

// Function to drop the block one step when spacebar is pressed
// Instantly drop the piece to the bottom
function playerHardDrop() {
    // Move down until collision
    while (!collide(arena, player)) {
      player.pos.y++;
    }
    // Back up one row, merge, reset, and sweep
    player.pos.y--;
    merge(arena, player);
    playerReset();
    arenaSweep();
    dropCounter = 0;  // reset the drop timer
  }
  

// Event listener for key presses
document.addEventListener('keydown', event => {
    switch (event.keyCode) {
      case 37: // ←
        playerMove(-1);
        break;
      case 39: // →
        playerMove(1);
        break;
      case 40: // ↓
        playerDrop();
        break;
      case 81: // Q
        playerRotate(-1);
        break;
      case 87: // W
        playerRotate(1);
        break;
      case 32: // Spacebar for hard drop
        event.preventDefault(); // prevent page scroll
        playerHardDrop();
        break;
        case ' ':
            event.preventDefault(); // Stop scrolling!
            break;
    }
  });
  


  