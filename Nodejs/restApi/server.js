const express = require('express');
const bodyParser = require('body-parser');
const MongoClient = require('mongodb').MongoClient;
const ObjectID = require('mongodb').ObjectID;
const db = require('./db');
const artistsController = require('./controllers/artists')

const app = express();

const uri = "mongodb://patison5:Ehp6MA-vJ-CZ-bw@apiserver-database-shard-00-00-95ymd.mongodb.net:27017,apiserver-database-shard-00-01-95ymd.mongodb.net:27017,apiserver-database-shard-00-02-95ymd.mongodb.net:27017/test?ssl=true&replicaSet=APIServer-Database-shard-0&authSource=admin&retryWrites=true";
// const uri = "mongodb+srv://patison5:Ehp6MA-vJ-CZ-bw@apiserver-database-95ymd.mongodb.net/test?retryWrites=true";
// Ehp6MA-vJ-CZ-bw


app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

app.get('/', function (req, res) {
	res.send('RestApi is greating you!')
})


// artists api
app.get  ('/artists',	  artistsController.all)
app.post ('/artists',	  artistsController.create)
app.get  ('/artists/:id', artistsController.findById)
app.put	 ('/artists/:id', artistsController.update);﻿


app.post('/artists2', function (req, res) {
	console.log(req.body)
	res.sendStatus(200)
})


db.connect(uri, function(err) {
	if (err) 
		return console.log(err);

	app.listen(3012, function () {
		console.log('API app started working on localhost:3012')
	})
});