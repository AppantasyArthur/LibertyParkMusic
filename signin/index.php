<?php 

	$title = "Sign up";
	
	$content = "
		<div id='sign-in-wrapper'>
			<div id='signin-facebook' onclick='loginWithFB();'>
				<!--  <div id='signin-facebook-text' >Sign in with Facebook</div> -->
			</div>
			<div id='signin-or'></div>
			<div id='signin-lpm'>
				<div class='signin-lpm-block' id='signin-lpm-title-anchor'>
					
				</div>
				<div class='signin-lpm-block'>
					<div class='sigin-lpm-label'>Email</div>
					<input class='signin-lpm-input' type='text' id='signin-lpm-username'>
				</div>
				<div class='signin-lpm-block'>
					<div class='sigin-lpm-label'>Password</div>
					<input class='signin-lpm-input' type='password' id='signin-lpm-password'>
				</div>
				<div id='signin-lpm-memme' class='signin-lpm-block'>
					<input type='button' value='SIGN IN' onclick='signinLPM();'><input type='checkbox' id='signin-lpm-staysign' value='1' >Stay signed in
				</div>
				<div class='signin-lpm-block'>
					<a id='signin-lpm-forgetpwd-text'>Forgot your password ?</a>
				</div>
			</div>
		</div>		
	";
	
	include '../lpm-template.php';

?>