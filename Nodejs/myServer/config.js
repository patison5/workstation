const mysql = require('mysql');

const db = mysql.createConnection({
  host     : 'localhost',
  user     : 'root',
  password : '',
  database: "myServer"
});

	// временный коннект, заменить (спать уже хочу)
const dbMulti = mysql.createConnection({
  host     : 'localhost',
  user     : 'root',
  password : '',
  database: "myServer",
  multipleStatements: true
});

// testing connection to server
const test = function () {
	db.connect(function (err) {
		if (err) {
			console.log('error');
		} else {
			console.log('connected')
		}
	})
}


// need to test
const insert = function (table, rows, values, callback) {
	db.query('INSERT INTO ?? (??) VALUES (?)', [table, rows, values], function (error, results, fields) {
	  if (error) {
	  	throw error;

	  	if (callback)
	  		callback(error)
	  }
	});
}


// var post  = {user_login: 'Robert', user_hash: 'Hello MySQL'};
// var query = db.query('INSERT INTO users SET ?', post, function (error, results, fields) {
//   if (error) throw error;
//   // Neat!
// });
// console.log(query.sql); // INSERT INTO posts SET `id` = 1, `title` = 'Hello MySQL'

module.exports = {
	test: test, 
	db: db, 
	dbMulti: dbMulti
}
