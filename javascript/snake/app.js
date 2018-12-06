var s;
var scl = 10;
var numberOfFood = 5;

var food = [];
var score = 0;

function setup () {
	createCanvas(600,600);
	s = new Snake();
	frameRate(10);

	for (let i = 0; i < numberOfFood; i++) {
		pickLocation();
	}
}

function draw() {
	background(51);

	s.death();
	s.update();
	s.show();

	setText('Score: ' + score);

	for (let i = 0; i < food.length; i++) {
		if (s.eat(food[i])) {
			food.splice(i, 1);
			pickLocation();
		}
	}

	for (let i = 0; i < food.length; i++) {
		fill(255,0,100);
		rect(food[i].x, food[i].y, scl, scl);
	}
}

function pickLocation() {
	var cols = floor(width / scl);
	var rows = floor(height / scl);

	var f = createVector(floor(random(cols)), floor(random(rows)));
	f.mult(scl);
	food.push(f);
}

function setText (message) {
	fill(255);
	textSize(20);
	text(message, 20, 40); // Text wraps within text boxThe quick brown fox jumped over the lazy dog.editresetcop
}

function keyPressed() {
	if (keyCode == UP_ARROW) {
		s.dir(0,-1);
	} else if (keyCode == DOWN_ARROW)  {
		s.dir(0, 1);
	} else if (keyCode == RIGHT_ARROW) {
		s.dir(1, 0);
	} else if (keyCode == LEFT_ARROW)  {
		s.dir(-1, 0);
	}
}

