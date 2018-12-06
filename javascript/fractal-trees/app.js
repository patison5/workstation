
var axiom = "A";

var rules = [];
var sentence = axiom;

rules[0] = {
	a: "A",
	b: "AB"
}
rules[1] = {
	a: "B",
	b: "A"
}

function generate() {
	var nextSentence = "";

	for (var i = 0; i < sentence.length; i++) {
		var current = sentence.charAt(i);
		var found = false;

		for (var j = 0; j < rules.length; j++) { 
			if (current == rules[j].a) {
				found = true;
				nextsentence += rules[j].b;
				break;
			}
		}
		if (!found) nextSentence += current;
	}	

	sentence = nextSentence;
}


function setup() {
	createCanvas(600,600)
	background(51)
	createP(axiom)	

	var button = createButton("generate");
	button.mousePressed(generate);
}

// function draw() {
	
// }