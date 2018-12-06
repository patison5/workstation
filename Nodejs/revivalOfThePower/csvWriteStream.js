var fs  = require('fs');
var csv = require('fast-csv');


arr = [
	['a1', 'b1'],
	['a2', 'b2'],
	['a3', 'b3'],
	['a4', 'b4']
]


var stream = fs.createReadStream("my.csv");

csv
 .fromStream(stream)
 .transform(function(data, next){
     // MyModel.findById(data.id, next);
 })
 .on("data", function(data){
     console.log(data);
 })
 .on("end", function(){
     console.log("done");
 });



// var ws = fs.createWriteStream("my.csv");
// csv
//    .write(arr, {headers: true})
//    .pipe(ws);




// var csvStream = csv
//     .createWriteStream({headers: true})
//     .transform(function(row){
//         return {
//            A: row.a,
//            B: row.b
//         };
//     }),
//     writableStream = fs.createWriteStream("my.csv");

// writableStream.on("finish", function(){
//   console.log("DONE!");
// });

// csvStream.pipe(writableStream);
// csvStream.write({a: "c1", b: "b1"});
// csvStream.end();



