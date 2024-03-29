<?php 
	header( 'Location: home/' ) ;
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Liberty Park Music</title>
	
	<link rel="stylesheet" href="lpm-base.css">
	<link rel="stylesheet" href="lpm-menu.css">
	
	<script src="json2.js"></script>
	
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
	<script src="jquery.slideshow.min.js"></script>
	
	<script type="text/javascript">

	function fb_logout() {

		FB.logout(function(response) {

			//console.log(JSON.stringify(response, null, 4));
			
			$('#account_label').html('ACCOUNT');

			$('#account_menu').empty();

			$("#account_menu").append("<li><input class='default-value' type='text' id='username' value='username' /></li><br />");
            $("#account_menu").append("<li><input class='default-value' type='password' id='password' value='password' /></li><br />");
           	$("#account_menu").append("<li ><a href='#' onclick=''><span>submit</span></a></li>");
           	$("#account_menu").append("<li class='last'><a class='fb_login_text' onclick='fb_login();'><span class=''>facebook login</span></a></li>");
			 
		});

	}

	function fb_login() {
		
	    FB.login(function(response) {
		    
	        if (response.authResponse) {

	        	FB.api('/me', function(response) {
		    		$('#account_label').html('Hi, ' + response.name);
		        });
	        	
	        	$('#account_menu').empty();

	            $("#account_menu").append("<li><a href='#'><span>Profile</span></a></li>");
	            $("#account_menu").append("<li><a href='#'><span>Messages</span></a></li>");
	           	$("#account_menu").append("<li><a href='#'><span>Contacts</span></a></li>");
	           	$("#account_menu").append("<li class='last'><a class='fb_login_text' onclick='fb_logout();'><span>Logout from facebook</span></a></li>");
	            
	            //$('#account_menu').listview('refresh');
	            
	        } else {
	            // cancelled
	        }
	    });
	}

	$(document).ready(function() {

		
		    $('.slideShow').slideShow({
		        interval: 3,
		        
		        transition: {
		            mode: 'slideshow',
		            speed: 800
		        }
		    });
		

		$("#username").blur(function(){

			if(!$(this).val()){

				$(this).val("username");
				
			}
           
   	    });

		$("#password").blur(function(){

			if(!$(this).val()){

				$(this).val("password");
				
			}
           
   	    });

   	    //subscribe_email
   	    $("#subscribe_email").blur(function(){

			if(!$(this).val()){

				$(this).val("email address");
				
			}
           
   	    });

		$('.default-value').each(function() {

		   var default_value = $(this).val();
		
	       $(this).focus(function(){

	    	   if($(this).val() == default_value) {
	            	$(this).val('');
	    	   }
	               
	       });

		});
		  
	});

	</script>
	
</head>

<body>

	<div id="fb-root"></div>
	<script>
	  // Additional JS functions here
	  window.fbAsyncInit = function() {
		  
	    FB.init({
	      appId      : '478084965579094', // App ID
	      channelUrl : '//lpm.appantasy.com/channel.php', // Channel File
	      status     : true, // check login status
	      cookie     : true, // enable cookies to allow the server to access the session
	      xfbml      : true  // parse XFBML
	    });
	
	    // Additional init code here
	    FB.getLoginStatus(function(response) {
			
			  if (response.status === 'connected') {

			  	FB.api('/me', function(response) {
		    		$('#account_label').html('Hi, ' + response.name);
		      	});
		        	
	        	$('#account_menu').empty();

	        	$("#account_menu").append("<li><a href='#'><span>Profile</span></a></li>");
	            $("#account_menu").append("<li><a href='#'><span>Messages</span></a></li>");
	           	$("#account_menu").append("<li><a href='#'><span>Contacts</span></a></li>");
	           	$("#account_menu").append("<li class='last'><a class='fb_login_text' onclick='fb_logout();'><span>Logout from facebook</span></a></li>");
	            
				    
			  } else if (response.status === 'not_authorized') {
			    // not_authorized
				// promote to loggin
			  } else {
			    // not_logged_in
			  }
			  
		});
	
	  };
	
	  // Load the SDK Asynchronously
	  (function(d){
	     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement('script'); js.id = id; js.async = true;
	     js.src = "//connect.facebook.net/en_US/all.js";
	     ref.parentNode.insertBefore(js, ref);
	   }(document));
	</script>

	<div class="main_wrapper"> 
	
		<div class="side_bar_l"></div> <!-- side bar -->
		<div class="side_bar_r"></div> <!-- side bar -->
		
		<div class="main_content">
			<div class="content_header">
				<div class="display_area">
					<div id="lpm_logo">
						<img alt="" src="" />
					</div>
					
					<div id="lpm_about">
						<div id="company_name_info">
							About。
							People。
							Contact us。
							FAQ
						</div>
						
						<div id="company_name_wrapper" >
							<h1 id="company_name">LIBERTY PARK MUSIC</h1>
						</div>
					</div>
					
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
					</div>
				</div> 	
			</div> <!-- content header -->
			<div class="content_header_bar"></div> <!-- content header bar -->
			<div class="content_main">
				
				<div class="display_area">
				
					<div class="slideShow">
					    <ul class="slides">
					        <li class="slide"><a><img class="slider_pic" src="11.jpg"/></a></li>
					        <li class="slide"><a><img class="slider_pic" src="22.jpg"/></a></li>
					        <li class="slide"><a><img class="slider_pic" src="33.jpg"/></a></li>
					    </ul>
					</div>
					
					<div id='subject_block'>
						<div id='subject_piano'>
							<div class='subject_name'><span class='subject_name_text'>PIANO</span></div>
							<div class='subject_img_block'><img class='subject_img' src='s1.jpg' /></div>
						</div>
						<div id='subject_guitar'>
							<div class='subject_name'><span class='subject_name_text'>GUITAR</span></div>
							<div class='subject_img_block'><img class='subject_img' src='s2.jpg' /></div>
						</div>
						<div id='subject_violin'>
							<div class='subject_name'><span class='subject_name_text'>VIOLIN</span></div>
							<div class='subject_img_block'><img class='subject_img' src='s3.jpg' /></div>
						</div>
					</div>
					
					<div id='subscribe_block'>
						<div class='subscribe_label'>Send me news</div>
						<div class='subscribe_label'><input class='default-value' type='text' id='subscribe_email' value='email address'></div>
						<div class='subscribe_label'><input class='submit-style' type='submit' id='subscribe_button' value='OK'></div>
					</div>
				
				</div>
				 
			</div> <!-- content main -->
		</div>
		
	</div> <!-- wrapper -->
	
</body>

</html>