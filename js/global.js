var lpm = {}; // namespace
lpm.Global = function(){
	
	this.isLogin = false;
	
};

lpm.Global.initMenu = function(){
	
	$('ul.nav').superfish({
		//delay: 200,
		animation: {opacity: 'show'},
		speed: 'fast',
		speedOut: 'fast',
		autoArrows: false,
		dropShadows: false
	});
	
};

// show hide function
lpm.Global.checkLogin = function(){
	
	if(!this.isLogin){

		//$('#noti-menu-list').hide();
		//$('#lrng-menu-list').hide();

		$('#lrng-menu-item-bk').hide();
		$('#lrng-menu-item-nt').hide();
		
		$('#acnt-menu-item-profile').hide();
		$('#acnt-menu-item-message').hide();
		$('#acnt-menu-item-contact').hide();
		
	}else{

		$('#acnt-menu-item-signin').hide();
		$('#acnt-menu-item-signup').hide();
		
	}
	
};
