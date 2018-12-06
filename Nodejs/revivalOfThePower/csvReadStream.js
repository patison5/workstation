var fs  = require('fs');
var csv = require('fast-csv');

var stream = fs.createReadStream("csv_example2.csv");

csv
 .fromStream(stream, {
 	headers : true,
 	// delimiter: ';',
 	quote: '"'
 })
 .transform(function(data){
     // data.address = "hello"; //reverse each row.
     return data;
 })
 .on("data", function(data){
     console.log(data);
    // console.log(data.address)			//address
    // console.log(data.ucr_ncic_code)		//ucr_ncic_code
 })
 .on("end", function(){
     console.log("done");
 });
// stream.pipe(csvStream);