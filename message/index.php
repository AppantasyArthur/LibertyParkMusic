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
	
	<script type="text/javascript" src="../js/message.js"></script>
	<script type="text/javascript">

		var msg_pars = {};
		msg_pars.ele_id = 'message-replay';
		var msger = new lpm.Message(msg_pars);
		
		$(document).ready(function() {

			// global ckeck login and hide/show, Global
			//lpm.Signin.prototype.islogin = <?php 

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
			pars.isLogin = false; // lpm.Signin.islogin;
			var g = new Global(pars);
			g.initMenu();

			msger.init();
			
			lpm.Message.prototype.toid = 5;
			lpm.Message.prototype.sendMessage = function(){

				<?php include_once '../messages/messages.php'; ?>
				var url = '../messages/save_message.php';
				var data = {
						<?php echo Message::$col_to; ?>: this.toid,
						<?php echo Message::$col_body; ?>: this.getMessage()
				};
				data.message = msger.getMessage();
				// data.talkto = ;
				var success = function(data){

					if(data.code = 200){ // success
						// append message
						// id : message-list
					}else{ // warning
						// append error message
					}
					
				};
				var dataType = "json";
				$.ajax({
					type: "POST",
					url: url,
					data: data,
					success: success,
					dataType: dataType
				});
				
			};

			var viewportWidth  = $(window).width();
			var viewportHeight = $(window).height();
			var tempHeight = 0, tempWidth = 0;
			if(viewportHeight > 655){
				tempHeight = (viewportHeight - 655) / 2;
			}

			$('.msg-recipient-page-head').width(viewportWidth);
			$('.msg-recipient-page-head').height(tempHeight);
			$('.msg-recipient-page-head').css({top: 0, left: 0});

			$('.msg-recipient-page-foot').width(viewportWidth);
			$('.msg-recipient-page-foot').height(tempHeight);
			

			if(viewportWidth > 715){
				tempWidth = (viewportWidth - 715) / 2;
			}

			$('.msg-recipient-page-sibling').width(tempWidth);
			$('.msg-recipient-page-sibling').height(viewportHeight - (tempHeight * 2));

			$('#msg-recipient-page-sibling-left').css({top: tempHeight, left: 0});
			$('.msg-recipient-block').css({top: tempHeight, left: tempWidth});
			$('#msg-recipient-page-sibling-right').css({top: tempHeight, left: tempWidth + 715});
			
			$('.msg-recipient-page-foot').css({top: tempHeight + (viewportHeight - (tempHeight * 2)), left: 0});

		});

		function newAMessage(){
			
			$('.msg-recipient-page').show();
			$("body").css("overflow", "hidden");
			Util.scroll2Top();
			
		};

	</script>
	
</head>

<body>
	<div id='msg-recipient-page' class='msg-recipient-page'>
	
		<div class='msg-recipient-page-head'></div>
		
		<div class='msg-recipient-page-sibling' id='msg-recipient-page-sibling-left'></div>
		<div class='msg-recipient-block'>
			
				<div class='msg-recipient-block-title'>Select a recipient</div>
				<div class='msg-recipient-block-recipier'>
				
					<div class='msg-recipient-block-recipier-block'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					<div class='msg-recipient-block-recipier-block'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					<div class='msg-recipient-block-recipier-block'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					<div class='msg-recipient-block-recipier-block'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					<div class='msg-recipient-block-recipier-block msg-recipient-block-recipier-block-last'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					
					<div class='msg-recipient-block-recipier-block-newline'></div>
					
					<div class='msg-recipient-block-recipier-block'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					<div class='msg-recipient-block-recipier-block'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					<div class='msg-recipient-block-recipier-block'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					<div class='msg-recipient-block-recipier-block'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					<div class='msg-recipient-block-recipier-block msg-recipient-block-recipier-block-last'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					
					<div class='msg-recipient-block-recipier-block-newline'></div>
					
					<div class='msg-recipient-block-recipier-block'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					<div class='msg-recipient-block-recipier-block'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					<div class='msg-recipient-block-recipier-block'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					<div class='msg-recipient-block-recipier-block'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					<div class='msg-recipient-block-recipier-block msg-recipient-block-recipier-block-last'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					
					<div class='msg-recipient-block-recipier-block-newline'></div>
					
					<div class='msg-recipient-block-recipier-block'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					<div class='msg-recipient-block-recipier-block'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					<div class='msg-recipient-block-recipier-block'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					<div class='msg-recipient-block-recipier-block'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					<div class='msg-recipient-block-recipier-block msg-recipient-block-recipier-block-last'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					
					<div class='msg-recipient-block-recipier-block-newline'></div>
					
					<div class='msg-recipient-block-recipier-block'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					<div class='msg-recipient-block-recipier-block'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					<div class='msg-recipient-block-recipier-block'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					<div class='msg-recipient-block-recipier-block'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					<div class='msg-recipient-block-recipier-block msg-recipient-block-recipier-block-last'>
						<div class='msg-recipient-block-recipier-block-pic'></div>
						<div class='msg-recipient-block-recipier-block-name'>Lucia</div>
					</div>
					
					<div class='msg-recipient-block-recipier-block-newline'></div>
					
				</div>
				<div class='msg-recipient-block-cancel' onclick="$('.msg-recipient-page').hide(); $('body').css('overflow', 'auto');">
					<div class='msg-recipient-block-cancel-text'>Cancel</div>
				</div>
			
		</div>
		<div class='msg-recipient-page-sibling' id='msg-recipient-page-sibling-right'></div>
		
		<div class='msg-recipient-page-foot'></div>
	
	</div>
	<div  class='main-wrapper'>
	
		<?php 
			include_once '../template/headerNBar.php';
		?>
		
		<div id='main-content'>
			<div class='display-section'>
			
				<div class='msg-head-block'>
					<div class='msg-head-block-img' onclick='newAMessage();'>
						<img alt="" src="../img/compose_mono_35x35.png">
					</div>
					<div class='msg-head-block-text'>Messages</div>
				</div>
				
				<div class='msg-content-block'>
					<div id='message-list' class='msg-content-list'>
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
							<div class='msg-content-send-item-block'>
								<textarea id='message-replay' class='msg-content-send-item-block-text' rows="4" cols="72">Write a replay ...</textarea>
							</div>
							<div class='msg-content-send-item-button'>
								<div class='msg-content-send-item-button-text' onclick='msger.sendMessage();'>Send</div>
							</div>
						</div>
					</div>
				</div>
				
			</div><!-- display-section -->
		</div><!-- main-content -->
	</div><!-- main-wrapper -->

</body>

</html>
