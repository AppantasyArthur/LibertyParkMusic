lpm = {};
lpm.Signin = function(){};

lpm.Signin.prototype.signinLPMwithFB = function(){
	alert('You click me !');
};

lpm.Signin.prototype.signinLPM = function(){

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
