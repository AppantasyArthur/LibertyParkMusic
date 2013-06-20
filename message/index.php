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
	
	<link rel='stylesheet' href='../css/lpm-bookmark.css'> 
	<link rel='stylesheet' href='../css/lpm-note.css'>
	
	-->
	 
	<link rel='stylesheet' href='../css/lpm-message.css'>
	
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
			
				<div class='msg-head-block'>
					<div class='msg-head-block-img'>
						<img alt="" src="../img/compose_mono_35x35.png">
					</div>
					<div class='msg-head-block-text'>Messages</div>
				</div>
				
				<div class='msg-content-block'>
					<div class='msg-content-list'>
						<div class='msg-content-list-item'>
							<div class='msg-content-list-item-pic'></div>
							<div class='msg-content-list-item-name'>AAAA</div>
							<div class='msg-content-list-item-message'>Do you have time this evening ?</div>
							<div class='msg-content-list-item-date'>Wednesday</div>
						</div>
						<div class='msg-content-list-item'>
							<div class='msg-content-list-item-pic'></div>
							<div class='msg-content-list-item-name'>AAAA</div>
							<div class='msg-content-list-item-message'>Do you have time this evening ?</div>
							<div class='msg-content-list-item-date'>Wednesday</div>
						</div>
						<div class='msg-content-list-item'>
							<div class='msg-content-list-item-pic'></div>
							<div class='msg-content-list-item-name'>AAAA</div>
							<div class='msg-content-list-item-message'>Do you have time this evening ?</div>
							<div class='msg-content-list-item-date'>Wednesday</div>
						</div>
						<div class='msg-content-list-item'>
							<div class='msg-content-list-item-pic'></div>
							<div class='msg-content-list-item-name'>AAAA</div>
							<div class='msg-content-list-item-message'>Do you have time this evening ?</div>
							<div class='msg-content-list-item-date'>Wednesday</div>
						</div>
						<div class='msg-content-list-item'>
							<div class='msg-content-list-item-pic'></div>
							<div class='msg-content-list-item-name'>AAAA</div>
							<div class='msg-content-list-item-message'>Do you have time this evening ?</div>
							<div class='msg-content-list-item-date'>Wednesday</div>
						</div>
						<div class='msg-content-list-item'>
							<div class='msg-content-list-item-pic'></div>
							<div class='msg-content-list-item-name'>AAAA</div>
							<div class='msg-content-list-item-message'>Do you have time this evening ?</div>
							<div class='msg-content-list-item-date'>Wednesday</div>
						</div>
						<div class='msg-content-list-item'>
							<div class='msg-content-list-item-pic'></div>
							<div class='msg-content-list-item-name'>AAAA</div>
							<div class='msg-content-list-item-message'>Do you have time this evening ?</div>
							<div class='msg-content-list-item-date'>Wednesday</div>
						</div>
						<div class='msg-content-list-item'>
							<div class='msg-content-list-item-pic'></div>
							<div class='msg-content-list-item-name'>AAAA</div>
							<div class='msg-content-list-item-message'>Do you have time this evening ?</div>
							<div class='msg-content-list-item-date'>Wednesday</div>
						</div>
						<div class='msg-content-list-item'>
							<div class='msg-content-list-item-pic'></div>
							<div class='msg-content-list-item-name'>AAAA</div>
							<div class='msg-content-list-item-message'>Do you have time this evening ?</div>
							<div class='msg-content-list-item-date'>Wednesday</div>
						</div>
						<div class='msg-content-list-item'>
							<div class='msg-content-list-item-pic'></div>
							<div class='msg-content-list-item-name'>AAAA</div>
							<div class='msg-content-list-item-message'>Do you have time this evening ?</div>
							<div class='msg-content-list-item-date'>Wednesday</div>
						</div>
					</div>
					<div class='msg-content-current'>
						<div class='msg-content-current-list'>
							<div class='msg-content-current-item'>
							
								<div class='msg-content-current-item-pic'></div>
								<div class='msg-content-current-item-talk'>
									<div class='msg-content-current-item-name'>Lucia Chen</div>
									<div class='msg-content-current-item-date'>Wednesday</div>
									<div class='msg-content-current-item-message'>
										message message message message message message message message message message message message message message message message message
										message message message message message message message message message message
										message message message message message message message message message messagemessage message message message message message message message message message 
									</div>
								</div>
								
							</div>
							
							<div class='msg-content-current-item'>
								<div class='msg-content-current-item-pic'></div>
								<div class='msg-content-current-item-talk'>
									<div class='msg-content-current-item-name'>Lucia Chen</div>
									<div class='msg-content-current-item-date'>Wednesday</div>
									<div class='msg-content-current-item-message'>
										message message message message message message message message message message message message message message message message message
										message message message message message message message message message message
										message message message message message message message message message messagemessage message message message message message message message message message 
									</div>
								</div>
							</div>
							
							<div class='msg-content-current-item'>
								<div class='msg-content-current-item-pic'></div>
								<div class='msg-content-current-item-talk'>
									<div class='msg-content-current-item-name'>Lucia Chen</div>
									<div class='msg-content-current-item-date'>Wednesday</div>
									<div class='msg-content-current-item-message'>
										message message message message message message message message message message message message message message message message message
										message message message message message message message message message message
										message message message message message message message message message messagemessage message message message message message message message message message 
									</div>
								</div>
							</div>
							
							<div class='msg-content-current-item'>
								<div class='msg-content-current-item-pic'></div>
								<div class='msg-content-current-item-talk'>
									<div class='msg-content-current-item-name'>Lucia Chen</div>
									<div class='msg-content-current-item-date'>Wednesday</div>
									<div class='msg-content-current-item-message'>
										message message message message message message message message message message message message message message message message message
										message message message message message message message message message message
										message message message message message message message message message messagemessage message message message message message message message message message 
									</div>
								</div>
							</div>
							
							<div class='msg-content-current-item'>
								<div class='msg-content-current-item-pic'></div>
								<div class='msg-content-current-item-talk'>
									<div class='msg-content-current-item-name'>Lucia Chen</div>
									<div class='msg-content-current-item-date'>Wednesday</div>
									<div class='msg-content-current-item-message'>
										message message message message message message message message message message message message message message message message message
										message message message message message message message message message message
										message message message message message message message message message messagemessage message message message message message message message message message 
									</div>
								</div>
							</div>
							
							<div class='msg-content-current-item'>
								<div class='msg-content-current-item-pic'></div>
								<div class='msg-content-current-item-talk'>
									<div class='msg-content-current-item-name'>Lucia Chen</div>
									<div class='msg-content-current-item-date'>Wednesday</div>
									<div class='msg-content-current-item-message'>
										message message message message message message message message message message message message message message message message message
										message message message message message message message message message message
										message message message message message message message message message messagemessage message message message message message message message message message 
									</div>
								</div>
							</div>
							
							<div class='msg-content-current-item'>
								<div class='msg-content-current-item-pic'></div>
								<div class='msg-content-current-item-talk'>
									<div class='msg-content-current-item-name'>Lucia Chen</div>
									<div class='msg-content-current-item-date'>Wednesday</div>
									<div class='msg-content-current-item-message'>
										message message message message message message message message message message message message message message message message message
										message message message message message message message message message message
										message message message message message message message message message messagemessage message message message message message message message message message 
									</div>
								</div>
							</div>
						</div>
						
						<div class='msg-content-send-item'>
							<div class='msg-content-send-item-block'></div>
							<div class='msg-content-send-item-button'></div>
						</div>
					</div>
				</div>
				
			</div><!-- display-section -->
		</div><!-- main-content -->
	</div><!-- main-wrapper -->

</body>

</html>
