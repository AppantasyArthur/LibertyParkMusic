<!doctype html>
<html>

<head>
	<meta charset='utf-8'>
	<title>Liberty Park Music - Template</title>
	
	<?php 
		include_once '../template/css.php';
	?>
	
	<!-- <link rel='stylesheet' href='../css/lpm-form.css'> -->
	<!--  <link rel='stylesheet' href='../css/lpm-slider.css'>
	<link rel='stylesheet' href='../css/lpm-advs.css'>
	
	<link rel='stylesheet' href='../css/lpm-signin.css'>
	<link rel='stylesheet' href='../css/lpm-profile.css'>
	<link rel='stylesheet' href='../css/lpm-course.css'>
	<link rel='stylesheet' href='../css/lpm-lesson.css'>
	
	<link rel='stylesheet' href='../css/lpm-people.css'>
	<link rel='stylesheet' href='../css/lpm-faq.css'>
	
	<link rel='stylesheet' href='../css/lpm-subject.css'>
	
	<link rel='stylesheet' href='../css/lpm-bookmark.css'> -->
	<link rel='stylesheet' href='../css/lpm-note.css'> 
	
	<?php 
		include_once '../template/js.php';
	?>
	
	<script type="text/javascript" src=""></script>
	<script type="text/javascript">
	
		$(document).ready(function() {

			// global ckeck login and hide/show, Global
			lpm.Signin.islogin = <?php 

				// echo $islogin; 
				include_once '../php_global/sessions.php';
				$lpmsession = new LPMSession();
				if($lpmsession->isLogin()){
					echo "true";
				}else{
					echo "false";
				}

			?>;

			// init menu superfish, Global
			var pars = {};
			pars.isLogin = lpm.Signin.islogin;
			var g = new lpm.Global(pars);
			g.initMenu();
			
			// slider init, Slider

			// init profile birthday selection, Profile

			// create sigin three block, Util, Signin
			/*createBlock({
				anchorId: 'signin-facebook',
				textId: 'signin-facebook-text',
				text: 'Sign in with Facebook'
			});

			createBlock({
				anchorId: 'signin-or',
				textId: 'signin-or-text',
				text: 'or'
			});

			createBlock({
				anchorId: 'signin-lpm-title-anchor',
				textId: 'signin-lpm-title',
				text: 'Sign in to your LPM account'
			});*/

			// load profile, Profile

			// load homeworks and comments, Lesson

			

		});

	</script>
	
</head>

<body>
	<?php 
	
		// include study mode in lesson/index.php
		// include_once 'study_mode.php';
	
	?>
	<div  class='main-wrapper'>
	
		<?php 
			include_once '../template/headerNBar.php';
		?>
		
		<div id='main-content'>
			<div class='display-section'>
			
				<div id='nt-navi-block'>
					<div class='nt-navi-style-select'>PIANO</div><div class='nt-navi-style-nonselect'>&nbsp;|&nbsp;<a class='nt-navi-style-link' href='../note/?ntcat=guitar'>GUITAR</a>&nbsp;|&nbsp;<a class='nt-navi-style-link' href='../note/?ntcat=theory'>THEORY</a></div>
				</div>
				<div id='nt-main-title-block'>
					<div class='nt-main-title-block-text'>Notes</div>
					<div class='nt-main-title-block-function'>
						<div class='nt-main-title-block-function-item'>
							<img src='../img/print_mono_35x35.png' onclick=''>
						</div>
						<div class='nt-main-title-block-function-item'>
							<img src='../img/email_mono_35x35.png' onclick=''>
						</div>
					</div>
				</div>
				<div class='nt-list'>
					<div class='nt-block'>
						<div class='nt-block-title piano-beginner-bgcolor'>
							<div class='nt-block-title-text'>BEGINNER</div>
							<div class='nt-block-title-img'><img src='../img/crotchet_wh_1.png'></div>
						</div>
						<div class='nt-block-list'>
							<div class='nt-block-list-item'>
								<div class='nt-block-list-item-courselessonname'>Course 1&nbsp;Lesson 1</div>
								<div class='nt-block-list-item-note'>note note note note note note note note note note note note note note note note note note note note note note note note note note note note note note note </div>
							</div>
							<div class='nt-block-list-item'>
								<div class='nt-block-list-item-courselessonname'>Course 1&nbsp;Lesson 1</div>
								<div class='nt-block-list-item-note'>note note note note note note note note note note note note note note note note note note note note note note note note note note note note note note note </div>
							</div>
						</div>
					</div>
					<div class='nt-block'>
						<div class='nt-block-title piano-intermediate-bgcolor'>
							<div class='nt-block-title-text'>INTERMEDIATE</div>
							<div class='nt-block-title-img'><img src='../img/crotchet_wh_2.png'></div>
						</div>
						<div class='nt-block-list'>
							<div class='nt-block-list-item'>
								<div class='nt-block-list-item-courselessonname'>Course 1&nbsp;Lesson 1</div>
								<div class='nt-block-list-item-note'>note note note note note note note note note note note note note note note note note note note note note note note note note note note note note note note </div>
							</div>
							<div class='nt-block-list-item'>
								<div class='nt-block-list-item-courselessonname'>Course 1&nbsp;Lesson 1</div>
								<div class='nt-block-list-item-note'>note note note note note note note note note note note note note note note note note note note note note note note note note note note note note note note </div>
							</div>
						</div>
					</div>
					<div class='nt-block'>
						<div class='nt-block-title piano-advanced-bgcolor'>
							<div class='nt-block-title-text'>ADVANCED</div>
							<div class='nt-block-title-img'><img src='../img/crotchet_wh_3.png'></div>
						</div>
						<div class='nt-block-list'>
							<div class='nt-block-list-item'>
								<div class='nt-block-list-item-courselessonname'>Course 1&nbsp;Lesson 1</div>
								<div class='nt-block-list-item-note'>note note note note note note note note note note note note note note note note note note note note note note note note note note note note note note note </div>
							</div>
							<div class='nt-block-list-item'>
								<div class='nt-block-list-item-courselessonname'>Course 1&nbsp;Lesson 1</div>
								<div class='nt-block-list-item-note'>note note note note note note note note note note note note note note note note note note note note note note note note note note note note note note note </div>
							</div>
						</div>
					</div>
				</div>
				
			</div><!-- display-section -->
		</div><!-- main-content -->
	</div><!-- main-wrapper -->

</body>

</html>
