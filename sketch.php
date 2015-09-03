<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	 <head>
		<title>sketchie</title>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<meta charset="UTF-8">

		<meta name="apple-mobile-web-app-capable" content="yes" />

		<meta name="apple-mobile-web-app-status-bar-style" content="white" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<style type="text/css">
			body {
				padding:0;
				text-align:center;
			}

			.background-canvas {
				border:20px solid red;
				padding: 5px 5px 5px 15px;
				background-color:#999;
				-webkit-border-radius:10px;
			}
			
			#sketch-canvas {
				height:480px;
				width:320px;
			}

			#debug-window {
				font-family:Courier;
				text-align:center;
				font-size:9px;
			}
			
			table {
				width:100%;
			}
			
			td {
				font-size:14px;
				text-align:right;
				width:25%;
			}
		</style>

	</head>

	<body>
		
		<div id="point"></div>
		
		<canvas class="background-canvas" id="sketch-canvas"></canvas>

		<div id="debug-window">
			<table>
				<tr>
					<td>
						&nbsp;
					</td>
					<td>
						x
					</td>
					<td>
						y
					</td>
				</tr>
				<tr>
					<td>
						pos.
					</td>
					<td>
						<span id="x-pos-value">0.00</span>
					</td>
					<td>
						<span id="y-pos-value">0.00</span>
					</td>
				</tr>
				<tr>
					<td>
						accel.
					</td>
					<td>
						<div id="x-acc-value">0.00</div>
					</td>
					<td>
						<div id="y-acc-value">0.00</div>
					</td>
				</tr>
				<tr>
					<td>
						vel.
					</td>
					<td>
						<span id="x-vel-value">0.00</span>
					</td>
					<td>
						<span id="y-vel-value">0.00</span>
					</td>
				</tr>
				<tr>
					<td>
						rot.
					</td>
					<td>
						<span id="x-rot-value">0.00</span>
					</td>
					<td>
						<span id="y-rot-value">0.00</span>
					</td>
				</tr>
			</table>
		</div>

		<script type="application/javascript">
			
			var sketchCanvas = document.getElementById('sketch-canvas');
			
			// Position Variables
			var x = 0;
			var y = 0;

			// Speed - Velocity
			var vx = 0;
			var vy = 0;

			// Acceleration
			var ax = 0;
			var ay = 0;

			var delay = 42;
			var vMultiplier = 0.1;
			var speedLimit = 5;

			var ctx = sketchCanvas.getContext('2d');

			ctx.strokeStyle = '#000';
			ctx.lineWidth   = 1;

			if (window.DeviceMotionEvent != undefined) {
				window.ondevicemotion = function(event) {
//					ax = event.accelerationIncludingGravity.x;
//					ay = event.accelerationIncludingGravity.y;
					ax = event.acceleration.x;
					ay = event.acceleration.y;

					rx = event.rotationRate.alpha;
					ry = event.rotationRate.beta;
				}
				
				setInterval(function() {
					y = parseInt(y + vy * vMultiplier);
					x = parseInt(x + vx * vMultiplier);
					
					vx = vx + ax;
					vy = vy + -(ay);

					// hit the brakes when you reach the edge on the left 
					if (x < 0) {
						x = 0;
						vx = 0;		// stop since we're at the edge
					}
					
					// at the top
					if (y < 0) {
						y = 0;
						vy = 0;
					}

					// on the right
					if (x > sketchCanvas.clientWidth) {
						x = sketchCanvas.clientWidth;
						vx = 0;
					}
					
					// and at the bottom of the visible canvas.
					if (y > sketchCanvas.clientHeight) {
						y = sketchCanvas.clientHeight;
						vy = 0;
					}
					
					if (ax < 0) {
						document.getElementById('x-acc-value').innerHTML =  ax.toFixed(2);
						document.getElementById('x-acc-value').style.color = "red";
					} else {
						document.getElementById('x-acc-value').innerHTML =  '+' + ax.toFixed(2);
						document.getElementById('x-acc-value').style.color = "blue";
					}

					if (ay < 0) {
						document.getElementById('y-acc-value').innerHTML =  ay.toFixed(2);
						document.getElementById('y-acc-value').style.color = "red";
					} else {
						document.getElementById('y-acc-value').innerHTML =  '+' + ay.toFixed(2);
						document.getElementById('y-acc-value').style.color = "blue";
					}

					if (vx < 0) {
						document.getElementById('x-vel-value').innerHTML =  vx.toFixed(2);
						document.getElementById('x-vel-value').style.color = "red";
					} else if (vx > speedLimit) {
						vx == speedLimit;
					} else {
						document.getElementById('x-vel-value').innerHTML =  '+' + vx.toFixed(2);
						document.getElementById('x-vel-value').style.color = "blue";
					}
					
					if (vy < 0) {
						document.getElementById('y-vel-value').innerHTML =  vy.toFixed(2);
						document.getElementById('v-vel-value').style.color = "red";
					} else if (vy > speedLimit) {
						vy == speedLimit;
					} else {
						document.getElementById('y-vel-value').innerHTML =  '+' + vy.toFixed(2);
						document.getElementById('y-vel-value').style.color = "blue";
					}
					
					if (rx < 0) {
						document.getElementById('x-rot-value').innerHTML =  rx.toFixed(2);
						document.getElementById('x-rot-value').style.color =  "red";
					} else {
						document.getElementById('x-rot-value').innerHTML =  '+' + rx.toFixed(2);
						document.getElementById('x-rot-value').style.color =  "blue";
					}

					if (ry < 0) {
						document.getElementById('y-rot-value').innerHTML =  ry.toFixed(2);
						document.getElementById('y-rot-value').style.color =  "red";
					} else {
						document.getElementById('y-rot-value').innerHTML =  '+' + ry.toFixed(2);
						document.getElementById('y-rot-value').style.color =  "blue";
					}


					document.getElementById('x-pos-value').innerHTML =  x;

					document.getElementById('y-pos-value').innerHTML =  y;
					
					ctx.lineTo(x,y);

					ctx.stroke();

					ctx.font = "#000 Courier 9px";

					ctx.fillText = ("Sample text", x, y);

				}, delay);
			}
		</script>

	</body>

</html>