<!DOCTYPE html>
	<html>
		<head>
			<title>Whiteboard</title>
			
		</head>
		<body>
			<div class="toolbar">
				<div class="tool" id="marker"></div>
			</div>
			<canvas id="canvas" width="1000" height="1000"></canvas>
		</body>

		<script type="text/javascript">
				var canvas = document.getElementById('canvas'),
					ctx = canvas.getContext('2d'),
					imgCat = new Image();

				//Draw image
				imgCat.src = 'http://c.wearehugh.com/dih5/openclipart.org_media_files_johnny_automatic_1360.png';
				imgCat.onload = function() { ctx.drawImage(imgCat, 0, 0);}

				//Handle mouse events on canvas
					var mousdown = false;
					ctx.strokestyle = '#0000FF';
					ctx.lineWidth = 5;

						canvas.onmousedown = function(e) {
							var pos = fixPosition(e, canvas);
							mousedown = true;
							ctx.beginPath();
							ctx.moveTo(pos.x, pos.y);
							return false;
						};

						canvas.onmousemove = function(e) {
							var pos = fixPosition(e, canvas);
							if(mousedown) {
								ctx.lineTo(pos.x,pos.y);
								ctx.stroke();
							}
						};

						canvas.onmouseup = function(e) {
							mousedown = false;
						}

						//util
						function fixPosition(e, gCanvasElement) {
						    var x;
						    var y;
						    if (e.pageX || e.pageY) { 
						      x = e.pageX;
						      y = e.pageY;
						    }
						    else { 
						      x = e.clientX + document.body.scrollLeft +
						          document.documentElement.scrollLeft;
						      y = e.clientY + document.body.scrollTop +
						          document.documentElement.scrollTop;
						    } 
						    x -= gCanvasElement.offsetLeft;
						    y -= gCanvasElement.offsetTop;
						    return {x: x, y:y};

					
				}
			</script>
		</html>