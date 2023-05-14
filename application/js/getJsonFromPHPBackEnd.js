//make request for the information in the database to populate the table of text boxes.
$(document).ready(function(){
    $.ajax({
        url: '../assignment/application/model/alex.php',
        type: 'get',
        dataType: 'JSON',
        success: function(jsonObj){
            var len = jsonObj.length;
            
		//console.log(jsonObj);
		var keys = [];
		var myTableArray = [];
		

document.write("Enter changes in the text boxes below and click 'Update Database' for the values to be updated in the database and show on the index page!");
document.write("<br> (please refresh the index to see the changes!) <br> Change the index page images (these have to be PNGS.....)<br></br>");
document.write("<table border==\"1\" id=\"info\" width =\"80%\"><tr>");
for (key in jsonObj[0]) {
	document.write('<th style="background-color:#FF0000">' + key + '</th>');

}
document.write("</tr>"); 
for (var i = 0; i < 4; i++) {

	document.write('<tr>');
	for (key in jsonObj[i]) {
	//add id to each cell so we can make an array that reflects the updates and not just the same array as pulled out db
	//console.log(key);
	if (key == "image"){
		
		//console.log("image" + jsonObj[i][key]);
		document.write('<td> <img src="' + jsonObj[i][key] + '" id="add_'+i+key+'"/> <br> <input type="file" id="file_'+i+key+'" name="file" onChange="submitForm('+i+');"><input type="hidden" id="filecount" value="0"><div id ="prv" style="height:auto; width:auto; float:left; margin-bottom: 28px; margin-left: 200px;"></div> </td>');
		
		

	}
	else{

		document.write('<td><input type="text" style="width:100%;" id="add_'+i+key+'" value="' + jsonObj[i][key] + '" /></td>');
	}


  	
	
	myTableArray[i] = jsonObj[i];
	//console.log(`${i}`); 
  }
	document.write('</tr>');
}
document.write("</table>");

document.write("<br></br>");
//console.log(myTableArray);

document.write("<button onclick='updateDB()'>Update database</button>");








document.write("<br></br>");

document.write("<table border==\"1\"><tr>");
for (key in jsonObj[5]) {
	document.write('<td>' + key + '</td>');
}
document.write("</tr>");
for (var i = 5; i < 12; i++) {
	document.write('<tr>');
	for (key in jsonObj[i]) {
  	document.write('<td>' + jsonObj[i][key] + '</td>');
  }
	document.write('</tr>');
}




document.write("</table>");

			
			
			
			
			
			
			

        }
    });
});

var sendData = function(array) {
  $.post('../assignment/application/model/updateDatabase.php', {
    data: array,
    type: "post"
  }, function(response) {
    //console.log(response);
  });
}

let stringBase = "";
function submitForm(i) {


    console.log(i);    
    var myFile = document.getElementById('file_'+i+'image'); 
    var files = myFile.files;
    var file = files[0];

    // Create a FormData object
    var formData = new FormData();

      // Add the file to the AJAX request
  formData.append('fileAjax', file, file.name);
	
if (file) {
  var filereader = new FileReader();
  filereader.readAsDataURL(file);
  filereader.onload = function (evt) {
  var base64 = evt.target.result;
  console.log(base64);
  stringBase = base64;
  obj = {data: "" + base64, number: i+1};



var jsonString = JSON.stringify(obj);

console.log("here " + jsonString);

  	$.ajax({
        method: "POST",
        url: "../assignment/application/model/uploadImg.php", // Url to which the request is send
        data: {data : jsonString}, 
        success : function(responseText)
                  {
                    alert('IMAGE updates added to database');
                    // you can console the responseText and do what ever you want with responseText
                    console.log(responseText);
                  },
        error : function(jqXHR, status, error){
                    if (jqXHR.status === 0) {
                        alert('Not connected.\nPlease verify your network connection.');
                    } else if (jqXHR.status == 404) {
                        alert ('The requested page not found. [404]');
                    } else if (jqXHR.status == 500) {
                        alert ('Internal Server Error [500].');
                    } else if (exception === 'parsererror') {
                        alert ('Requested JSON parse failed.');
                    } else if (exception === 'timeout') {
                        alert ('Time out error.');
                    } else if (exception === 'abort') {
                        alert ('Ajax request aborted.');
                    } else {
                        alert ('Uncaught Error.\n' + jqXHR.responseText);
                    }
                 }
      });
      
  }
}

location.reload();

}

function handleSubmit () {

	let photo = document.getElementById("file_'+0+'image").files[0]; 
	let formData = new FormData(); 

	formData.append("photo", photo); 
	fetch('/upload/image', {method: "POST", body: formData});
	//console.log(formData);

}
function logFile (event) {
	let str = event.target.result;
	let img = document.createElement('img');
	img.src = str;
	app.append(img);
	//console.log(str);
}

function updateDB(array) {
	
var rowInfo = [];
var tableInfo = [];
//we have to read the contents of the table with the text boxes, create a Json and post this to update.php which 
//will handle putting the information in the database
var table = document.getElementById('info');  
var count = table.rows.length;  
for(var i=0; i<count-1; i++) {    
      
	var title = document.getElementById('add_'+i+'title');  
	//console.log(title.value);
	var subtitle = document.getElementById('add_'+i+'subtitle');  
	//console.log(subtitle.value);
	var description = document.getElementById('add_'+i+'description');  	
	//console.log(description.value);
	var image = document.getElementById('file_'+i+'image');  	
	//console.log(image.value);


	   rowInfo.push({ 
        "title" : title.value,
        "subtitle"  : subtitle.value,
        "descritption"       : description.value
    });

}
  	tableInfo.rowInfo = rowInfo;
	
	JSON.stringify(tableInfo)
	var jsonString = JSON.stringify(rowInfo);
	//console.log("here");
	//console.log(rowInfo);
	$.ajax({
        method: "POST",
        url: '../assignment/application/model/updateDatabase.php',
        data: {data : jsonString}, 
        success : function(responseText)
                  {
                    alert('updates added to database');
                    // you can console the responseText and do what ever you want with responseText
                    //console.log(responseText);
                  },
        error : function(jqXHR, status, error){
                    if (jqXHR.status === 0) {
                        alert('Not connected.\nPlease verify your network connection.');
                    } else if (jqXHR.status == 404) {
                        alert ('The requested page not found. [404]');
                    } else if (jqXHR.status == 500) {
                        alert ('Internal Server Error [500].');
                    } else if (exception === 'parsererror') {
                        alert ('Requested JSON parse failed.');
                    } else if (exception === 'timeout') {
                        alert ('Time out error.');
                    } else if (exception === 'abort') {
                        alert ('Ajax request aborted.');
                    } else {
                        alert ('Uncaught Error.\n' + jqXHR.responseText);
                    }
                 }
      });
}