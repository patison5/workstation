var express = require("express");
const bodyParser = require("body-parser");
const fs = require('fs');

const parse = require('csv-parse')
const generate = require('csv-generate')
const transform = require('stream-transform')

var app = express();

app.set("view engine", "ejs");
app.use(bodyParser.urlencoded({ extended: true }));

const data = ["hello", "world", "hi"];

fs.open('csv_example.csv', 'r', (err, fd) => {
  if (err) {
    if (err.code === 'ENOENT') {
      console.error('myfile does not exist');
      return;
    }

    throw err;
  }

  console.log(fd);
});

app.get("/", function(req, res) {
	res.render("index", { data: data });
	// res.send('Hello World');
});

app.get("/create", function(req, res) {
	res.render("create");
});

app.post("/create", function(req, res) {
	console.log(req.body);
	data.push(req.body.text);
	res.redirect("/");
});

app.listen(3000, function() {
	console.log("Example app listening on port 3000!");
});




const generator = generate({
  length: 20
})
const parser = parse({
  delimiter: ':'
})
const transformer = transform(function(record, callback){
  setTimeout(function(){
    callback(null, record.join(' ')+'\n')
  }, 500)
}, {
  parallel: 5
})
generator.pipe(parser).pipe(transformer).pipe(process.stdout)

console.log(generator)