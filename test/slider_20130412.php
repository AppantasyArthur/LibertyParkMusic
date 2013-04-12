<!doctype html>
<html>

<head>

	<meta charset='utf-8'>
	<title></title>
	
	<link rel="stylesheet" href="lpm-slider.css">
	
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
	<script type="text/javascript">

		var legend_bg;
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
				img.appendTo('#' + slider_div_id);
				img.hide();

				legend_bg = $(document.createElement('div'));
				legend_bg.addClass('legend_bg');
				legend_bg.appendTo('#' + slider_div_id);
				legend_bg.html('hello world, this is background');
				legend_bg.hide();
					
				var legend_label = $(document.createElement('div'));
				legend_label.addClass('legend_label');
				legend_label.appendTo('#' + slider_div_id);
				legend_label.hide();

				/*var event_block = $(document.createElement('div'));
				event_block.addClass('event_block');
				event_block.hover(hoverOnSlider, hoverOutSlider);
				event_block.appendTo('#' + slider_div_id);
				event_block.hide();*/
				
				// effect switching
				// show img
				img.fadeIn('slow');  // effect timing
				legend_bg.fadeIn();
				legend_label.fadeIn();
				//event_block.fadeIn();
				
			}, 3 * 1000); // transmit timing

		}

		function sliderStop(){
			clearInterval(sliderInterval);
		}

		function sliderlegendResizeLarger(){
			legend_bg
				.animate({
				    height: 100
				}, 500, function() {
				    	// Animation complete.
				});
		}

		function sliderlegendResizeSmaller(){
			legend_bg
				.delay(1000)
				.animate({
				    height: 30
				}, 500, function() {
				    // Animation complete.
				});
		}
		
		function hoverOnSlider(){
			sliderStop();
			sliderlegendResizeLarger();
		}

		function hoverOutSlider(){
			sliderStart();
			sliderlegendResizeSmaller();
		}
		
		$(document).ready(function() {

			$('#' + slider_div_id).hover(hoverOnSlider, hoverOutSlider);
			sliderStart();

		});
		
	</script>
</head>

<body>
	
	<div id='lpm-slider'>
		
	</div>
	

</body>

</html>