// JavaScript Document
$(document).ready(function(){

	 //AJAX service request to get the main text data from the json data store
	 $.getJSON('../application/model/data.json', function(jsonObj) {
		console.log(jsonObj);
		//Get the home page main text data


	  var javaScriptVar = "<?php echo $result[0]['title']; ?>";
	  var javaScriptVar2 = "<?php echo $result[0]['subtitle']; ?>";
	  var javaScriptVar3 = "<?php echo $result[0]['description']; ?>";
	  
	  
	  let result = javaScriptVar.concat(javaScriptVar3);
	  
	  
	  document.getElementById("title_home").innerHTML =  "test";
	  document.getElementById("title_left").innerHTML =  result;



	 });
});








