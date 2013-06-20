		
		<div id='main-header'>
		
			<div class='display-section'>
				
				<div id='header-img'>
					<img class='img-center' alt='Liberty Park Music' src='../img/logo_82x82.png'>
				</div> <!-- header-img -->
				
				<div id='header-about'>
					<div id='header-about-menu'>About&ensp;|&ensp;<a class='about-menu-style' href='../people/'>People</a>&ensp;|&ensp;Contact us&ensp;|&ensp;<a class='about-menu-style' href='../faq/'>FAQ</a></div>
					<div class='header-about-title'>LIBERTY PARK MUSIC</div>
				</div><!-- header-about -->
				
				<!-- <div id='header-menu'> -->
				
				<div id='lpm-menu-wrapper'>
					<div id='lpm-menu'>
						
						<ul class='nav'>
							<li><a class='menu-title'>
									<div class='menu-title-text-noti'>
										<div class=''>NOTIFICATIONS</div>
									</div>
								</a>
								<ul id='noti-menu-list'>
									<!-- <li class='noti-menu-item' id='noti-menu-item-login'><a class='noti-menu-item-text' href="#">Login first</a></li> -->
									<!-- <li class='noti-menu-item'>
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
											<div class='noti-menu-item-cnt-date'>2013/02/17</div>
										</div>
									</li> -->
								</ul>
							</li>
							<li class='menu-dot-item'><div class='menu-dot-item-text'>&bull;</div></li>
							<li><a class='menu-title'>
									<div class='menu-title-text-cors'>
										<div class=''>COURSES</div>
									</div>
								</a>
								<ul id='cors-menu-list'>
									<!-- <li class='cors-menu-item-start'>
										<div class='cors-menu-item-start-text'>Start browsing here.</div>
									</li> -->
									<li class='cors-menu-item'>
										<a class='hyper-link-menu-item' href='../subject/?subject=guitar'>
											<div class='cors-menu-item-text'>Guitar</div>
											<!-- <div class='cors-menu-item-img'><img src=""></div> -->
										</a>
									</li>
									<li class='cors-menu-item'>
										<a class='hyper-link-menu-item' href='../subject/?subject=guitar'>
											<div class='cors-menu-item-text'>Piano</div>
											<!-- <div class='cors-menu-item-img'><img src=""></div> -->
										</a>
									</li>
									<li class='cors-menu-item cors-menu-item-last'>
										<a class='hyper-link-menu-item' href='../subject/?subject=guitar'>
											<div class='cors-menu-item-text'>Theory</div>
											<!-- <div class='cors-menu-item-img'><img src=""></div> -->
										</a>
									</li>
								</ul>
							</li>
							<li class='menu-dot-item'><div class='menu-dot-item-text'>&bull;</div></li>
							<li><a class='menu-title'>
									<div class='menu-title-text-lrng'>YOUR LEARNING</div>
								</a>
								<ul id='lrng-menu-list'>
									<li class='lrng-menu-item' id='lrng-menu-item-bk'><a class='lrng-menu-item-text' href="../bookmark">Your bookmarks</a></li>
									<li class='lrng-menu-item lrng-menu-item-last' id='lrng-menu-item-nt'><a class='lrng-menu-item-text' href="#">Your notes</a></li>
									<!-- <li class='lrng-menu-item' id='lrng-menu-item-login'><a class='lrng-menu-item-text' href="#">Login first</a></li> -->
								</ul>
							</li>
							<li class='menu-dot-item'><div class='menu-dot-item-text'>&bull;</div></li>
							<li><a class='menu-title'>
									<div class='menu-title-text-acnt'>
										<?php 
											include_once '../php_global/sessions.php';
											$lpmsession = new LPMSession();
										?>
										<div class='acnt-sayhello'><?php if($lpmsession->isLogin()) echo $lpmsession->getMemberName(); ?>&nbsp;&nbsp;&nbsp;</div>
										ACCOUNT
									</div>
								</a>
								<ul id='acnt-menu-list'>
									<li class='acnt-menu-item' id='acnt-menu-item-profile'>
										<a class='acnt-menu-item-text' href="#">Profile</a>
									</li>
									<li class='acnt-menu-item' id='acnt-menu-item-message'><a class='acnt-menu-item-text' href="#">Messages</a></li>
									<li class='acnt-menu-item acnt-menu-item-last' id='acnt-menu-item-contact'><a class='acnt-menu-item-text' href="#">Contacts</a></li>
									<li class='acnt-menu-item' id='acnt-menu-item-signin'><a class='acnt-menu-item-text' href="../signin">Sign in</a></li>
									<li class='acnt-menu-item acnt-menu-item-last' id='acnt-menu-item-signup'><a class='acnt-menu-item-text' href="../signup">Sign up</a></li>
								</ul>
							</li>
						</ul>
						
					</div> <!-- lpm-menu -->
				</div>
				
			</div><!-- display-section -->
			
		</div><!-- main-header -->
		
		<div id='main-bar'></div><!-- main-bar -->