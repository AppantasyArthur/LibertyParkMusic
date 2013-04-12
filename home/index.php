<!doctype html>
<html>

<head>
	<meta charset='utf-8'>
	<title></title>
	
	<link rel='stylesheet' href='../css/lpm-base.css'>
	<link rel='stylesheet' href='../css/lpm-menu.css'>
	<link rel='stylesheet' href='../css/lpm-slider.css'>
	
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

			/*var event_block = $(document.createElement('div'));
			event_block.addClass('event_block');
			event_block.hover(hoverOnSlider, hoverOutSlider);
			event_block.appendTo('#' + slider_div_id);
			event_block.hide();*/
			
			legend_bg = $(document.createElement('div'));
			legend_bg.addClass('legend_bg');
			legend_bg.appendTo('#' + slider_div_id);
			legend_bg.html('hello world, this is background');
			legend_bg.hide();
				
			var legend_label = $(document.createElement('div'));
			legend_label.addClass('legend_label');
			legend_label.appendTo('#' + slider_div_id);
			legend_label.hide();

			
			
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

	<div class='main-wrapper'>
	
		<div id='main-header'>
			
			<div class='display-section'>
				<div id='header-img'>
				</div> <!-- header-img -->
				<div id='header-about'>
					<h1>Liberty Park Music</h1>
				</div><!-- header-about -->
				<!-- <div id='header-menu'> -->
				
					<div id='cssmenu'>
						<ul>
						   <li class='has-sub'><a href='#'><span>NOTIFICATIONS</span></a>
						      <ul>
						         <li class='last'><a href='#'><span>( you don't have any message )</span></a></li>
						      </ul>
						   </li>
						   <li class='has-sub'><a href='#'><span>COURSES</span></a>
						      <ul>
						         <li class='last'><a href='#'><span>Piano</span></a></li>
						      </ul>
						   </li>
						   <li class='has-sub'><a href='#'><span>YOUR LEARNING</span></a>
						      <ul>
						         <li><a href='#'><span>My bookmarks</span></a></li>
						         <li class='last'><a href='#'><span>My notes</span></a></li>
						      </ul>
						   </li>
						   <li class='has-sub last'><a href='#'><span id='account_label'>ACCOUNT</span></a>
						   	<!-- <form action="<?php //echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"> -->
						      <ul id="account_menu">
						      	 <li><input class="default-value" type="text" id="username" value="username" /></li><br />
						         <li><input class="default-value" type="password" id="password" value="password" /></li><br />
						         <li ><a href="#" onclick=""><span>submit</span></a></li>
						         <li class="last"><a class="fb_login_text" onclick="fb_login();"><span class="">facebook login</span></a></li>
						      <!-- 
						         <li><a href='#'><span>Profile</span></a></li>
						         <li><a href='#'><span>Messages</span></a></li>
						         <li class='last'><a href='#'><span>Contacts</span></a></li>
						      -->
						      </ul>
						    <!-- </form> -->
						   </li>
						</ul>
					</div> <!-- cssmenu -->
				<!-- </div><!-- header-menu -->
			</div><!-- display-section -->
			
		</div><!-- main-header -->
		
		<div id='main-bar'></div><!-- main-bar -->
		
		<div id='main-content'>
		
			<div class='display-section'>
				<div id='lpm-slider'></div>
			</div><!-- display-section -->
		
		</div><!-- main-content -->
		
	</div><!-- main-wrapper -->

</body>

</html>