//adapted from example code 'benskitchen.com'

function cokeScene(){
    nSwitch = 0;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
    document.getElementById('cokeView').setAttribute('set_bind','true');
}

function spriteScene(){
    nSwitch = 1;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
    document.getElementById('bottle').setAttribute('set_bind','true');
}

function pepperScene(){
    nSwitch = 2;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
    document.getElementById('front').setAttribute('set_bind','true');
}

function carScene(){
    nSwitch = 3;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
    document.getElementById('front').setAttribute('set_bind','true');
    
   
}

var spinning = false;

function spin()
{
	spinning = !spinning;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function stopRotation()
{
	spinning = false;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function animateModel()
{
	console.log("try anmate " + document.getElementById('can__RotationTimer').getAttribute('enabled'));
    if(document.getElementById('can__RotationTimer').getAttribute('enabled')!= 'true')
        document.getElementById('can__RotationTimer').setAttribute('enabled', 'true');
	
    else
        document.getElementById('can__RotationTimer').setAttribute('enabled', 'false');
	
}
function animateAudiModel()
{
	console.log("try anmate Car" + document.getElementById('car__RotationTimer').getAttribute('enabled'));
    if(document.getElementById('car__RotationTimer').getAttribute('enabled')!= 'true')
        document.getElementById('car__RotationTimer').setAttribute('enabled', 'true');
	
    else
        document.getElementById('car__RotationTimer').setAttribute('enabled', 'false');
	
}
function animatePepperModel()
{
	console.log("try anmate Cup" + document.getElementById('cup__RotationTimer').getAttribute('enabled'));
    if(document.getElementById('cup__RotationTimer').getAttribute('enabled')!= 'true')
        document.getElementById('cup__RotationTimer').setAttribute('enabled', 'true');
	
    else
        document.getElementById('cup__RotationTimer').setAttribute('enabled', 'false');
	
}
function animateBottle()
{
	console.log("try anmate bottle" + document.getElementById('bottle__RotationTimer').getAttribute('enabled'));
    if(document.getElementById('bottle__RotationTimer').getAttribute('enabled')!= 'true')
        document.getElementById('bottle__RotationTimer').setAttribute('enabled', 'true');
	
    else
        document.getElementById('bottle__RotationTimer').setAttribute('enabled', 'false');
	
}

function wireFrame()
{
	var e = document.getElementById('wire');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}
function OffwireFrame()
{
	var e = document.getElementById('wire');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}


var lightOn = true;

function headLight()
{
	lightOn = !lightOn;
	document.getElementById('bottle__LA_Light').setAttribute('headlight', lightOn.toString());
	document.getElementById('cup__headlight').setAttribute('headlight', lightOn.toString());
	document.getElementById('can__headlight').setAttribute('headlight', lightOn.toString());
	document.getElementById('car__headlight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
	console.log(document.getElementById('car__headlight'));
}

function omniLight()
{
	lightOn = !lightOn;
	document.getElementById('bottle__omniLight').setAttribute('headlight', lightOn.toString());
	document.getElementById('car__omniLight').setAttribute('headlight', lightOn.toString());
	document.getElementById('cup__omniLight').setAttribute('headlight', lightOn.toString());
	document.getElementById('can__omniLight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function targetLight()
{
	lightOn = !lightOn;
	document.getElementById('bottle__targetLight').setAttribute('headlight', lightOn.toString());
	document.getElementById('car__targetLight').setAttribute('headlight', lightOn.toString());
	document.getElementById('can__targetLight').setAttribute('headlight', lightOn.toString());
	document.getElementById('cup__targetLight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function cameraFront()
{
	document.getElementById('can__CameraFront').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('can__CameraBack').setAttribute('bind', 'true');
	document.getElementById('car__CameraBack').setAttribute('bind', 'true');
	document.getElementById('cup__CameraBack').setAttribute('bind', 'true');
	document.getElementById('bottle__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('can__CameraLeft').setAttribute('bind', 'true');
	document.getElementById('car__CameraLeft').setAttribute('bind', 'true');
	document.getElementById('cup__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('can__CameraRight').setAttribute('bind', 'true');
	document.getElementById('car__CameraRight').setAttribute('bind', 'true');
	document.getElementById('cup__CameraRight').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('can__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('can__CameraBottom').setAttribute('bind', 'true');
}