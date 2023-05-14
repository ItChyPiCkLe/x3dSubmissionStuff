$(document).ready(function(){
    $.ajax({
        url: '../application/model/alex.php',
        type: 'get',
        dataType: 'JSON',
        success: function(jsonObj){
            var len = jsonObj.length;
            
			console.log(jsonObj);
		//Get the home page main text data
		$('#title_home').html('<h2>' + jsonObj[0].title + '<h2>');
		$('#subTitle_home').html('<h3>' + jsonObj[0].subtitle + '</h3>');
		$('#description_home').html('<p>' + jsonObj[0].description + '</p>');
		//console.log(jsonObj[0].image);

		

         //Get the home page left column text data
		$('#title_left').html('<h2>' + jsonObj[3].title + '<h2>');
		$('#subTitle_left').html('<h3>' + jsonObj[3].subtitle + '</h3>');
		$('#description_left').html('<p>' + jsonObj[3].description + '</p>');	
		document.getElementById("One").src=""+jsonObj[3].image;
		
		//Get the home page centre column text data
		$('#title_centre').html('<h2>' + jsonObj[1].title + '<h2>');
		$('#subTitle_centre').html('<h3>' + jsonObj[1].subtitle + '</h3>');
		$('#description_centre').html('<p>' + jsonObj[1].description + '</p>');	
		document.getElementById("Two").src=""+jsonObj[1].image;
		
		//Get the home page right column text data
		$('#title_right').html('<h2>' + jsonObj[2].title + '<h2>');
		$('#subTitle_right').html('<h3>' + jsonObj[2].subtitle + '</h3>');
		$('#description_right').html('<p>' + jsonObj[2].description + '</p>');	
		document.getElementById("Three").src=""+jsonObj[2].image;		
			
				//Get the coke main text data
		$('#x3dModelTitle_coke').html('<h2>' + jsonObj[5].x3dModelTitle + '<h2>');
		$('#x3dCreationMethod_coke').html('<p>' + jsonObj[5].x3dCreationMethod + '<p>' + atob(jsonObj[5].buttons));
		$('#title_coke').html('<h2>' + jsonObj[5].title + '<h2>');
		$('#subTitle_coke').html('<h3>' + jsonObj[5].subTitle + '</h3>');
		$('#description_coke').html('<p>' + jsonObj[5].description + '</p>');
 
		//Get the sprite main text data
		$('#x3dModelTitle_sprite').html('<h2>' + jsonObj[6].x3dModelTitle + '<h2>');
		$('#x3dCreationMethod_sprite').html('<p>' + jsonObj[6].x3dCreationMethod + '<p>' + atob(jsonObj[6].buttons));
		$('#title_sprite').html('<h2>' + jsonObj[6].title + '<h2>');
		$('#subTitle_sprite').html('<h3>' + jsonObj[6].subTitle + '</h3>');
		$('#description_sprite').html('<p>' + jsonObj[6].description + '</p>');		

		//Get the pepper main text data
		$('#x3dModelTitle_pepper').html('<h2>' + jsonObj[10].x3dModelTitle + '<h2>');
		$('#x3dCreationMethod_pepper').html('<p>' + jsonObj[10].x3dCreationMethod + '<p>');
 		$('#title_pepper').html('<h2>' + jsonObj[10].title + '<h2>');
		$('#subTitle_pepper').html('<h3>' + jsonObj[10].subTitle + '</h3>');
		$('#description_pepper').html('<p>' + jsonObj[10].description + '</p>');

		//Get the Audi main text data
		$('#x3dModelTitle_audi').html('<h2>' + jsonObj[11].x3dModelTitle + '<h2>');
		$('#x3dCreationMethod_audi').html('<p>' + jsonObj[11].x3dCreationMethod + '<p>'  + atob(jsonObj[11].buttons));
 		$('#title_audi').html('<h2>' + jsonObj[11].title + '<h2>');
		$('#subTitle_audi').html('<h3>' + jsonObj[11].subTitle + '</h3>');
		$('#description_audi').html('<p>' + jsonObj[11].description + '</p>');

		
		//Get the gallery contents data
		$('.title_gallery').html('<h2>' + jsonObj[7].galleryTitle + '<h2>');
		$('.description_gallery').html('<p>' + jsonObj[7].galleryDescription + '</p>');

		//Get camera contnets data
		$('.x3dCameraTitle').html('<h2>' + jsonObj[8].CameraTitle + '<h2>');
		$('.x3dCameraSubtitle').html('<p>' + jsonObj[8].CameraSubtitle + '<p');	

			
			
			
			
			
			
			

        }
    });
});