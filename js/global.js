lpm = {}; // namespace
function Global(pars){
	
	this.isLogin = pars.isLogin;
	
};

//show hide function
Global.prototype.checkLogin = function(){
	
	if(!this.isLogin){

		//$('#noti-menu-list').hide();
		//$('#lrng-menu-list').hide();

		$('#lrng-menu-item-bk').hide();
		$('#lrng-menu-item-nt').hide();
		
		
		$('#acnt-menu-item-profile').hide();
		$('#acnt-menu-item-message').hide();
		$('#acnt-menu-item-contact').hide();
		
		/*$('#lrng-menu-list').hover(function(){
			
			$(this).css('box-shadow', '3px 3px 5px 6px #ccc');
			$(this).css('-webkit-box-shadow', '3px 3px 5px 6px #ccc');
			$(this).css('-moz-box-shadow', '3px 3px 5px 6px #ccc');
			
		});*/
		
	}else{
		
		$('#acnt-menu-item-signin').hide();
		$('#acnt-menu-item-signup').hide();
		
	}
	
};

Global.prototype.initMenu = function(){
	
	$('ul.nav').superfish({
		delay: 600,
		animation: {opacity: 'show'},
		animationOut:  {opacity: 'hide'},
		speed: 600,
		speedOut: 1200,
		autoArrows: false,
		dropShadows: false
	});
	
	this.checkLogin();
	
};


