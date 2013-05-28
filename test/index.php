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
	<script src="../superfish/superfish.js"></script>
	<script type="text/javascript">

		$(document).ready(function(){
			
			// 使用一個叫 nav 的 ul
			$('ul.nav').superfish({
				delay: 1000,
				animation: {opacity: 'show'},
				speed: 'fast',
				autoArrows: false,
				dropShadows: false
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
						
						<ul class='nav'>
							<li><a class='menu-title'>NOTIFICATIONS</a>
								<ul id='noti-menu-list'>
									<li class='noti-menu-item'>
										<div class='noti-menu-item-img'><img src="../img/logo_62x62.png"></div>
										<div class='noti-menu-item-cnt'>
											<div class='noti-menu-item-cnt-name'>Arthur Lai</div>
											<div class='noti-menu-item-cnt-text'>Do you love me ?</div>
											<div class='noti-menu-item-cnt-date'>17:06 am</div>
										</div>
									</li>
									<li class='noti-menu-item'>
										<div class='noti-menu-item-img'><img src="../img/logo_62x62.png"></div>
										<div class='noti-menu-item-cnt'>
											<div class='noti-menu-item-cnt-name'>Belle Huang</div>
											<div class='noti-menu-item-cnt-text'>Hi ~</div>
											<div class='noti-menu-item-cnt-date'>last Wed.</div>
										</div>
									</li>
								</ul>
							</li>
							<li>&emsp;&bull;&emsp;</li>
							<li><a class='menu-title'>COURSES</a>
								<ul id='cors-menu-list'>
									<li class='cors-menu-item-start'>
										<div class='cors-menu-item-start-text'>Start browsing here.</div>
									</li>
									<li class='cors-menu-item'>
										<div class='cors-menu-item-text'>GUITAR</div>
										<div class='cors-menu-item-img'><img src=""></div>
									</li>
									<li class='cors-menu-item'>
										<div class='cors-menu-item-text'>PIANO</div>
										<div class='cors-menu-item-img'><img src=""></div>
									</li>
									<li class='cors-menu-item'>
										<div class='cors-menu-item-text'>THEORY</div>
										<div class='cors-menu-item-img'><img src=""></div>
									</li>
								</ul>
							</li>
							<li>&emsp;&bull;&emsp;</li>
							<li><a class='menu-title'>YOUR LEARNING</a>
								<ul id='lrng-menu-list'>
									<li class='lrng-menu-item'><a class='lrng-menu-item-text' href="#">My bookmarks</a></li>
									<li class='lrng-menu-item'><a class='lrng-menu-item-text' href="#">My notes</a></li>
								</ul>
							</li>
							<li>&emsp;&bull;&emsp;</li>
							<li><a class='menu-title'><span class='acnt-sayhello'>Hello, Arthur1980</span> ACCOUNT</a>
								<ul id='acnt-menu-list'>
									<li class='acnt-menu-item'><a class='acnt-menu-item-text' href="#">Profile</a></li>
									<li class='acnt-menu-item'><a class='acnt-menu-item-text' href="#">Messages</a></li>
									<li class='acnt-menu-item'><a class='acnt-menu-item-text' href="#">Contacts</a></li>
								</ul>
							</li>
						</ul>
						
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