/*
Curious about the code? Great! Welcome to this code ;)
Feel free to copy and use this code
If you are going to blog or tweet about it or if you are going to create a better
code, please mantain the link to www.mobilexweb.com or @firt in Twitter.
*/

// Position Variables
var x = 0;
var y = 0;

// Speed - Velocity
var vx = 0;
var vy = 0;

// Acceleration
var ax = 0;
var ay = 0;

var delay = 10;
var vMultiplier = 0.01;

if (window.DeviceMotionEvent!=undefined) {
	window.ondevicemotion = function(event) {
		ax = event.accelerationIncludingGravity.x;
		ay = event.accelerationIncludingGravity.y;
	}

	setInterval(function() {
		vy = vy + -(ay);
		vx = vx + ax;

		var ball = document.getElementById("ball");
		y = parseInt(y + vy * vMultiplier);
		x = parseInt(x + vx * vMultiplier);
		
		if (x<0) { x = 0; vx = 0; }
		if (y<0) { y = 0; vy = 0; }
		if (x>document.documentElement.clientWidth-20) { x = document.documentElement.clientWidth-20; vx = 0; }
		if (y>document.documentElement.clientHeight-100) { y = document.documentElement.clientHeight-100; vy = 0; }
		
		ball.style.top = y + "px";
		ball.style.left = x + "px";
	}, delay);
} else {
	$("#upgrade-message").css("display","block");
	$("#yes").css("display","none");
}