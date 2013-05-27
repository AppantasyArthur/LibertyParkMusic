<!doctype html>
<html>

<head>

	<meta charset='utf-8'>
	<title></title>
	
	<link rel="stylesheet" href="../css/lpm-reset.css">
	<!-- lpm-menu_201305271624.css -->
	<link rel="stylesheet" href="lpm-menu_201305271624.css">
	
	<script src="../javascript/json2.js"></script>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
	<script type="text/javascript">

		function noti_hover_in(){

			
			
		}

		$(document).hover(function() {

			$('#menu-crs-head-item-anchor').hover(function(){

				//$('.menu-head-space');
				$('.menu-crs-item-start').show();
				$('.menu-crs-item').show();
				$('#menu-head-dot-item').css('right', '-100');;
			
			});
			  
		});
		
		
		
	</script>
</head>
<body>

<div  class='main-wrapper'>
	
		<div id='main-header'>
			
			<div class='display-section'>
			
				<div id='header-img'>
					<img class='img-center' alt='Liberty Park Music' src='../img/logo_82x82.png'>
				</div> <!-- header-img -->
				
				<div id='header-about'>
					<div id='header-about-menu'>About&ensp;|&ensp;People&ensp;|&ensp;Contact us&ensp;|&ensp;FAQ</div>
					<div class='header-about-title'>LIBERTY PARK MUSIC</div>
				</div><!-- header-about -->
				
				<!-- <div id='header-menu'> -->
				
				<div id='lpm-menu-wrapper'>
					<div id='lpm-menu'>
						<div class='menu-noti-head-item'>
							<ul>
								<li class='menu-head'>NOTIFICATIONS</li>
								<li class='menu-head-space'></li>
								<li class='menu-noti-item'>
									<span>Arthur</span><br>
									<span>Hello</span>
								</li>
							</ul>
							<!-- 
							<div class='menu-head'>NOTIFICATIONS</div>
							<div class='menu-head-space'></div>
							<div class='menu-noti-item'>
								<span>Arthur</span><br>
								<span>Hello</span>
							</div>
							<div class='menu-noti-item'>
								<span>Belle</span><br>
								<span>Hi</span>
							</div>
							-->
						</div>
						<div class='menu-head-item menu-head-dot-item'>
							<div class='menu-head menu-head-dot-item'>&emsp;&bull;&emsp;</div>
						</div>
						<div class='menu-crs-head-item' id='menu-crs-head-item-anchor'>
							<ul>
								<li class='menu-head'>COURSES</li>
								<li class='menu-head-space'></li>
								<li class='menu-crs-item-start'>Start browsing here.</li>
								<li class='menu-crs-item'>PIANO</li>
							</ul>
							<!-- <div class='menu-head'>COURSES</div>
							<div class='menu-head-space'></div>
							<div class='menu-crs-item-start'>Start browsing here.</div>
							<div class='menu-crs-item'>PIANO</div>-->
							<!-- <div class='menu-crs-item'>GUITAR</div>
							<div class='menu-crs-item'>THEORY</div> -->
						</div>
						<!-- 
						<div id='menu-notifications' class='menu-head menu-head-width'>
							<div>NOTIFICATIONS</div>
						</div>
						<div class='menu-head'>&emsp;&bull;&emsp;</div>
						<div class='menu-head menu-head-width'>COURSES</div>
						<div class='menu-head'>&emsp;&bull;&emsp;</div>
						<div class='menu-head menu-head-width'>YOUR LEARNING</div>
						<div class='menu-head'>&emsp;&bull;&emsp;</div>
						<div class='menu-head menu-head-width'><span class='menu-head-hello'>Hello, Arthur</span> ACCOUNT</div>
						 -->
					</div> <!-- lpm-menu -->
				</div>	
				<!-- </div><!-- header-menu -->
			</div><!-- display-section -->
			
		</div><!-- main-header -->
		
		<div id='main-bar'></div><!-- main-bar -->
		
		<div id='main-content'></div>
		
</div>
	
</body>

</html>