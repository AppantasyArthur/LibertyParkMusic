<!doctype html>
<html>

<head>

	<meta charset='utf-8'>
	<title></title>
	
	<link rel="stylesheet" href="lpm-slider.css">
	
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
	<script type="text/javascript">

		var i = 0;
		var sliderInterval;
		var slider_pics = ['../11.jpg', '../22.jpg', '../33.jpg'];
		var slider_div_id = 'lpm-slider';
		function sliderStart(){

			sliderInterval = setInterval(function(){

				// clear element
				$('#' + slider_div_id).empty();

				// creat / append / hide img
				var img = $(document.createElement('img'));

				if(i > slider_pics.length - 1)
					i = 0;
				var img_url = slider_pics[i++];
				img.attr('src', img_url);
				img.hover(sliderStop, sliderStart);
				img.appendTo('#' + slider_div_id);
				img.hide();

				// effect switching
				// show img
				img.fadeIn('slow');  // effect timing
				
			}, 3 * 1000); // transmit timing

		}

		function sliderStop(){

			clearInterval(sliderInterval);

		}
		
		$(document).ready(function() {

			sliderStart();

		});
		
	</script>
</head>

<body>
	
	<div id='lpm-slider'>
		
	</div>
	

</body>

</html>