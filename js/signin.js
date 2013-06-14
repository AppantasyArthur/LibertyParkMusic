var Signin = function(){};

Signin.prototype.signinLPMwithFB = function(){
	alert('You click me !');
};

// PHP code, move to each page!
var islogin = <?php 

	// echo $islogin; 
	include_once '../php_global/sessions.php';
	$lpmsession = new LPMSession();
	if($lpmsession->isLogin()){
		echo "true";
	}else{
		echo "false";
	}

?>;

Signin.prototype.signinLPM = function(){

	var username = $('#signin-lpm-username').val();
	var password = $('#signin-lpm-password').val();
	var rememberMe = getCheckBoxVals('signin-lpm-staysign');

	$.post(	"../users/check_user_valid.php"
		,{
		    'USER_EMAIL': username,
		    'USER_PWD': password,
		    'memme': rememberMe
		}
		,function(data, status){

			//console.log(JSON.stringify(data, null, 4));
			if(data.valid){
				window.location = "../profile";
				//islogin = true;
			}
			
		}

	);
	
};
