<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="lpm-base.css">
	<link rel="stylesheet" href="lpm-menu.css">
	
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript">

	$(document).ready(function() {

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
						         <li class='last'><a href='#'><span>Liberty Park Music Message</span></a></li>
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
						   <li class='has-sub last'><a href='#'><span>ACCOUNT</span></a>
						   	<!-- <form action="<?php //echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"> -->
						      <ul>
						      	 <li><input class="default-value" type="text" id="username" value="username" /></li><br />
						         <li><input class="default-value" type="password" id="password" value="password" /></li><br />
						         <li class="last"><a href="#" onclick=""><span>submit</span></a></li>
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
					
				</div>
				 
			</div> <!-- content main -->
		</div>
		
	</div> <!-- wrapper -->
	
</body>

</html>