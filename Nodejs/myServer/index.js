const app = require('./app')
const db = require('./db');


db.connect("myServer", function(err) {
	if (err) 
		return console.log(err);

	app.listen(3000, function () {
		console.log("Example app listening on port 3000!");
	})
});


// db.test();