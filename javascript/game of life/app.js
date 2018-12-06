function make2DArray (cols, rows) {
	let arr = new Array(cols);
	for (let i = 0; i < arr.length; i++) {
		arr[i] = new Array(rows);
	}
	
	return arr;	
}


let grid;
let cols;
let rows;
let resolution = 5;

function setup () {
	frameRate(24);
	createCanvas(displayWidth, displayHeight - 150);

	console.log(displayHeight)
	cols = width / resolution;
	rows = height / resolution;

	grid = make2DArray(cols, rows);

	for (let i = 0; i < cols; i++) {
		for (let j = 0; j < rows; j++) {
			grid[i][j] = floor(random(2));
		}
	}
}



function draw () {
	background(51);

	for (let i = 0; i < cols; i++) {
		for (let j = 0; j < rows; j++) {
			let x = i * resolution;
			let y = j * resolution;

			if (grid[i][j] == 1) {
				fill(230, 230, 230);
				stroke(51);
				rect(x, y, resolution-1, resolution-1);
			}
		}
	}

	let next = make2DArray(cols, rows);

	for (let i = 0; i < cols; i++) {
		for (let j = 0; j < rows; j++) {

			if (i == 0 || i == cols - 1 || j == 0 || j == rows - 1) {
				next[i][j] = grid[i][j];
			}

			let sum = 0;
			let neighbors = countNeighbors(grid, i, j);

			let state = grid[i][j];

			if (state == 0 && neighbors == 3) {
				next[i][j] = 1
			} else if (state == 1 && (neighbors < 2 || neighbors > 3)) {
				next[i][j] = 0;
			} else {
				next[i][j] = state;
			}
		}
	}
	// compute next render	
	grid = next
}

function countNeighbors (grid, x, y) {
	let sum = 0;

	for (let i = -1; i < 2; i++) {
		for (let j = -1; j < 2; j++) {
			let col = (x + i + cols) % cols;
			let row = (y + j + rows) % rows;

			sum += grid[col][row];
		}
	}

	sum -= grid[x][y];
	 return sum;
}