<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<script> console.log(window.location.pathname);</script> 
	
    <link rel="stylesheet" href="../application/css/bootstrap.css" crossorigin="anonymous">

    <!-- X3DOM.css -->
    <link rel='stylesheet' type='text/css' href='../application/css/x3dom.css'>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../application/css/custom.css" crossorigin="anonymous">

      <!-- Lets have some fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <!-- fancyBox3 -->
    <link rel="stylesheet" type="text/css" href="../application/css/jquery.fancybox.min.css">
    
    <title>Assignment Web 3D Applications</title>

  </head>
  <body id="bodyColor">
      <!-- The 3D App header -->
      <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
      
            <!-- Brand -->
            <div class="logo">
              <a class="navbar-brand" href="#">
                <h1>230931 - Poca</h1>
                <h2>Pola</h2>
                <h3>Yum Yum</h3>
                <p>Drink Co.</p>
              </a>
            </div>

            <!-- Navbar Menu Icon -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- link Menu Icon button to the links class navbar-collapse selector] -->
            <div class="collapse navbar-collapse">
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a id="navHome" class="nav-link active" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a id="navAbout" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="This is about my assignment page =)">About</a>
                  </li>
				  
				  
              
                  <!-- Dropdown -->
                  <li class="nav-item">
                      <a id="navModels" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are four X3D models: Coke, Sprite, Pepper and Audi">Models</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                  </li>
                </ul>
            </div>
      </nav>

      <!-- This is the main contents of the page, it has a background image across 1 column, followed by three columns holding cards in a row for the 3 images and associated texts
      -->
      <div class="container-fluid">

          <!-- This is the home page contents -->
          <div id="home" class="main_contents">
            <!-- A row for the main 3D image theme — could make this a Jubotron with a carousel -->
            <div class="row">
              <div class="col-sm-12">
                  <div id="main_3d_image">
                      <div id="main_text" class="col-xs-12 col-sm-4">
                        <div id="title_home"></div>
                        <div id="subTitle_home"></div>
                        <div id="description_home"></div>
                      </div> 
                    </div>
              </div>
            </div>  

            <!-- A row to hold three cards for the Coke, Sprite and Pepper contents -->
            <div class="row">
                  <div class="col-sm-4">
                      <div class="card img-narrow">
                          <a href="../application/assets/images/renderImages/coke.jpg" data-fancybox data-caption="My 3D Coke Can Render">
                            <img class="card-img-top img-fluid img-thumbnail" id = "One" src="../application/assets/images/blank.png" alt="Coca Cola">
                          </a>
                          <div class="card-body">
                                <div id="title_left" class="card-title drinksText"></div>
                                <div id="subTitle_left" class="card-subtitle drinksText"></div>
                                <div id="description_left" class="card-text drinksText"></div>   
                             <a href="https://users.sussex.ac.uk/~aj413/3dapp/assignment/backEnd.php" class="btn btn-primary btn-responsive">Back End</a>               
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-sm-4">
                      <div class="card">
                          <a href="../application/assets/images/renderImages/sprite.jpg" data-fancybox data-caption="My 3D Sprite Bottle Render" class="img-narrow">
                            <img class="card-img-top img-fluid img-thumbnail" id = "Two" src="../application/assets/images/blank.png" alt="Sprite">
                          </a>
                          <div class="card-body">
                            <div id="title_centre" class="card-title drinksText"></div>
                            <div id="subTitle_centre" class="card-subtitle drinksText"></div>
                            <div id="description_centre" class="card-text drinksText"></div>   
                            <a href="https://users.sussex.ac.uk/~aj413/3dapp/assignment/backEnd.php" class="btn btn-primary btn-responsive">Back End</a>
                          </div>
                          
                      </div>
                  </div>
                  
                  <div class="col-sm-4">
                      <div class="card img-narrow">
                          <a href="../application/assets/images/renderImages/pepper.jpg" data-fancybox data-caption="My 3D Pepper Cup Render" class="thumbnail">
                            <img class="card-img-top img-fluid img-thumbnail" id = "Three" src="../application/assets/images/blank.png" alt="Dr Pepper">
                          </a>
                          <div class="card-body">
                            <div id="title_right" class="card-title drinksText"></div>
                            <div id="subTitle_right" class="card-subtitle drinksText"></div>
                            <div id="description_right" class="card-text drinksText"></div>   
                             <a href="https://users.sussex.ac.uk/~aj413/3dapp/assignment/backEnd.php" class="btn btn-primary btn-responsive">Back End</a>
                          </div>
                      </div>
                  </div>
            </div>
          </div>  <!-- End home page contents-->

          <div id="about" style="display:none;">
              Here is my confrmation of orgnality and submission docs...
			  <br>
			  Statement of Originality, Acknowledgements, References;
			  <br>
			  These web pages are submitted as part requirement for the degree of Computer Science at the University of Sussex.  They are the product of my own labour except where indicated in the web page content. These web pages or contents may be freely copied and distributed provided the source is acknowledged". 

<br>

<br>
References —   <br>  
To help with the encodeing / decodeing base 64 strings into my database for texture buttons for x3d models: <br>
Base64 Encode. (n.d.). Base64 Encode and Decode - Online. [online] Available at: https://www.base64encode.org/.<br><br>

Tutorial for makeing a drinks can in blender:<br>
www.youtube.com. (n.d.). Blender Tutorial: How To Make a 3D Model of a Soda Can. [online] Available at: https://www.youtube.com/watch?v=IrImZ9GKhEQ [Accessed 11 Apr. 2023].<br>
<br>
Change the site contents from the back end
<br>
<a href="https://users.sussex.ac.uk/~aj413/3dapp/assignment/backEnd.php" class="btn btn-primary btn-responsive">Back End</a>

<br>
links to files:-
<br>
x3d files @:-
<br>
<a href = "https://github.com/ItChyPiCkLe/3dapp-x3d-images.git">GitHub address for X3d files</a>
<br>
codebase @:-
<br>
<a href = "https://github.com/ItChyPiCkLe/3dappCodeBaseSubmission.git">GitHub address for codebase</a>
<br>



		 </div>  

          <!-- This is the content for X3D models and 3D Image Gallery -->
          <div id="models" class="main_contents" style="display:none;">
            <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
            <div class="row">
              <!-- X3D Model -->
              <div class="col-sm-8">
                <div class="card text-left">
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                      <li class="nav-item">
                        <a id="navCoke" class="nav-link active" href="#">X3D Models</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <!-- X3D Models -->
                    <div>
                        <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                        <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                        <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>
						<div id="x3dModelTitle_audi" class="card-title drinksText"></div>

                        <button type="button" class="btn btn-success btn-responsive" onMouseUp="cokeScene(); cokeDescription();">Coke</button>
                        <button type="button" class="btn btn-success btn-responsive" onMouseUp="spriteScene(); spriteDescription();">Sprite</button>
                        <button type="button" class="btn btn-success btn-responsive" onMouseUP="pepperScene(); pepperDescription();">Pepper</button>
                        <button type="button" class="btn btn-success btn-responsive" onMouseUP="carScene(); coke2Description();">Audi</button>
						
						
						
						
						
						
						
                        <!-- Place the X3D code here -->
                        <div class="model3D">
                          <x3d id="wire">
                            <scene>
									<Sound>
										<AudioClip loop='true' enabled="true" url='"../application/assets/x3d/theme.mp3" "sound.wav"'/>
									</Sound>
								<!-- Z PARAM CONTROL CAM DISTANCE -65 AND -12 BELOW -->
								<Viewpoint id="cokeView" scale="0.5,0.5,0.5" position="-0.07427 -35 -205" orientation="-0.01451 0.99989 0.00319 3.15833" description="camera" fieldOfView='0.7854'></Viewpoint>
								<Viewpoint id="front" scale="0.5,0.5,0.5" position="-0.07427 0.95329 -12" orientation="-0.01451 0.99989 0.00319 3.15833" description="camera" fieldOfView='0.7854'></Viewpoint>
								<Viewpoint id="bottle" scale="0.5,0.5,0.5" position="-0.07427 0.95329 -32" orientation="-0.01451 0.99989 0.00319 3.15833" description="camera" fieldOfView='0.7854'></Viewpoint>
								 
								
                                <Switch whichChoice="0" id='SceneSwitch'>
                                    <transform>
                                        <inline nameSpaceName="can" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/canNewRP.x3d" > </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="bottle" mapDEFToID="true" onclick="animateBottle();" url="../application/assets/x3d/CokeBottleLP.x3d"> </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="cup" mapDEFToID="true" onclick="animatePepperModel();" url="../application/assets/x3d/DpPereCup.x3d"> </inline>
                                    </transform>
									<transform>
                                        <inline nameSpaceName="car" mapDEFToID="true" onclick="animateAudiModel();" url="../application/assets/x3d/audi.x3d"> </inline>
                                    </transform>
                                </Switch>
                            </scene>
                          </x3d>
                        </div> 
                        <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                        <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                        <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
						 <div id="x3dCreationMethod_audi" class="card-text drinksText"></div>
						
                    </div>
                  </div>
                </div>
              </div>

              <!-- 3D image gallery -->
              <div class="col-sm-4">
                <div class="card text-left">
                    <div class="card-header gallery-header">
                      <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Gallery</a>
                        </li>
                    </div>
                    <div class="card-body">
                        <div class="card-title title_gallery drinksText"></div>
                        <div class="gallery" id="gallery"></div>
                        <div class="card-text description_gallery drinksText"></div>
                    </div>
                </div> <!-- End gallery card -->
              </div> <!-- End gallery column -->
            </div> <!-- End row for X3D Model and Gallery -->
          </div> 

          <!-- Row to hold the interaction panels -->
          <div id="interaction" class="row" style="display:none;">
                <!-- Column for the camera view controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="cameraFront();">Front</a>
                                <a class="dropdown-item" href="#" onclick="cameraBack();">Back</a>
                                <a class="dropdown-item" href="#" onclick="cameraLeft();">Left</a>
                                <a class="dropdown-item" href="#" onclick="cameraRight();">Right</a>
                                <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                                <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Camera Views</h3>
                          </div>                            
                          <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                          <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                          <a href="#" class="btn btn-outline-dark disabled btn-responsive">Off</a>
                          <div class="card-text x3dCameraDescription drinksText">
                            <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the animation controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Animation</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dAnimationSubtitle drinksText">
                            <h3>Animation Options</h3>
                          </div>
                          <a href="#" class="btn btn-outline-light btn-responsive" onclick="spin();">RotX</a>
                          <a href="#" class="btn btn-outline-light btn-responsive">RotY</a>
                          <a href="#" class="btn btn-outline-light btn-responsive">RotZ</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                          <div class="card-text x3dAnimationDescription drinksText">
                              <p>These buttons select a range of X3D animation options</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the render type and lighting controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >Render</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="OffwireFrame();">Polygon</a> 
                                <a class="dropdown-item" href="#" onclick="wireFrame();">Wireframe</a>
                                <a class="dropdown-item" href="#">Vertex</a>
                              </div>
                            </li>
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="headLight();">Default</a>
                                <a class="dropdown-item" href="#" onclick="omniLight();">Onmi On/Off</a>
                                <a class="dropdown-item" href="#" onclick="targetLight();">Target On/Off</a>
                                <a class="dropdown-item" href="#" onclick="headLight();">Headlight On/Off</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render and Lighting Options</h3>
                          </div>
                          <a href="#" class="btn btn-success btn-responsive">Poly</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="wireFrame();">Wire</a>
                          <a href="#" class="btn btn-success btn-responsive" onclick="headLight();">Headlight</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                          <div class="card-text x3dRenderDescription drinksText">
                              <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                          </div>
                        </div>
                      </div>
                </div>
          </div> <!-- End row for the interaction panels -->

          <!-- Row to hold one card to hold the coke descriptive text, etc.-->
          <div id="cokeDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                          <div id="title_coke" class="card-title drinksText"></div>
                          <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                          <div id="description_coke" class="card-text drinksText"></div>   
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Coke</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End coke description contents -->

          <!-- Row to hold one card to hold the sprite descriptive text, etc.-->
          <div id="spriteDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                          <div id="title_sprite" class="card-title drinksText"></div>
                          <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
                          <div id="description_sprite" class="card-text drinksText"></div>  
                        <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Visit Sprite</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End sprite description contents -->

          <!-- Row to hold one card to hold the pepper descriptive text, etc.-->
          <div id="pepperDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                        <div id="title_pepper" class="card-title drinksText"></div>
                        <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
                        <div id="description_pepper" class="card-text drinksText"></div>  
                        <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responisve">Visit Pepper.</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End pepper description contents -->
		  
		            <!-- Row to hold one card to hold the pepper descriptive text, etc.-->
          <div id="audiDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                        <div id="title_audi" class="card-title drinksText"></div>
                        <div id="subTitle_audi" class="card-subtitle drinksText"></div>
                        <div id="description_audi" class="card-text drinksText"></div>  
                        <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responisve">Visit Pepper.</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End pepper description contents -->

      </div> <!-- End 3D App SPA Contents -->
      
      <nav id="footerColor" class="navbar navbar-expand-sm footer">
          <div class="container-fluid">   
              <div class="navbar-text float-left copyright">
                  <p><span class="align-baseline">&copy 2023 3D Apps | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a> | <a id="linkid" href="#" onclick="doOnClick()">Statement of Originality etc</a></span></p>
					  
						<!-- my footer about page link -->
						<script type="text/javascript">
							function doOnClick() {
								$('#navAbout').click();
							}
						</script>
						
				<br>
			  
			  </div>
              <div class="navbar-text float-right social">
                  <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                  <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                  <a href="#"><i class="fab fa-google-plus fa-2x"></i></a>
                  <a href="#"><i class="fab fa-github-square fa-2x"></i></a>
              </div>
          </div>
      </nav> 

      <!-- My 3D App modals -->
      <!-- Contact modal -->
      <!-- The Modal -->
      <div class="modal fade" id="contactModal">
          <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">3D App Contact Details</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <p>230931, Email: 230931@sussex.ac.uk</p>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
          </div>
      </div>
	  <script>
	  
    function changeTexture(tex)
	{
		document.getElementById("can__canTexture").setAttribute("url", tex);
		console.log("url");
	}	
	    function changeBottleTexture(tex)
	{
		document.getElementById("bottle__Texture").setAttribute("url", tex);
		console.log("url");
	}	
	function changePaintwork(tex)
	{
		document.getElementById("car__bodyTexture").setAttribute("url", tex);
	}	
	 
	function changeWheel(tex)
	{
		document.getElementById("car__wheelTexture").setAttribute("url", tex);
		document.getElementById("car__wheelTexture2").setAttribute("url", tex);
		document.getElementById("car__wheelTexture3").setAttribute("url", tex);
		document.getElementById("car__wheelTexture4").setAttribute("url", tex);
	}	
	 
	</script>
      <!-- JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../application/js/jquery-3.2.1.js" crossorigin="anonymous"></script>
      <script src="../application/js/popper.min.js" crossorigin="anonymous"></script>
      <script src="../application/js/bootstrap.min.js" crossorigin="anonymous"></script>
      <script src="../application/js/fontawesome-all.min.js"></script>
      <!-- Custom JavaScript code for your 3d App -->
      <script src="../application/js/custom.js" crossorigin="anonymous"></script>
      <!-- JavaScript to swap for SPA and restyle -->
      <script src="../application/js/swap_restyle.js"></script>
      <!-- Include the x3dom JavaScript -->
      <script type='text/javascript' src='../application/js/x3dom-1.7.2/x3dom.js'></script>
      <!-- JavaScript and PHP based Gallery generator  -->
      <script type="text/javascript" src="../application/js/gallery_generator.js"></script>
	  
	  
      <!-- JQuery code to get content data from a backend PHP database  '############# @@@@   -->	  
	  <script src="../application/js/getJsonFromPHP.js"></script>
	   <!-- ############### @@@@@@@@@ #################@@@@@@@@@@ ############# @@@@   -->	  
	  
	  
      <!-- JavaScript model interactions -->
      <script src="../application/js/modelInteractions.js"></script>
      <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
      <script src="../application/js/jquery.fancybox.min.js"></script>
  </body>
</html>