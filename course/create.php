<!doctype html>
<html>

<head>
	<meta charset='utf-8'>
	<title>Liberty Park Music - <?php echo $title; ?></title>
	
	<link rel="stylesheet" href="../css/lpm-reset.css">
	<link rel='stylesheet' href='../css/lpm-base.css'>
	<link rel='stylesheet' href='../css/lpm-menu.css'>
	<link rel='stylesheet' href='../css/lpm-slider.css'>
	<link rel='stylesheet' href='../css/lpm-advs.css'>
	<link rel='stylesheet' href='../css/lpm-form.css'>
	<link rel='stylesheet' href='../css/lpm-signin.css'>
	<link rel='stylesheet' href='../css/lpm-course.css'>
	
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
	<script type="text/javascript">
	var legend_bg;
	var i = 0;
	var sliderInterval;
	var slider_pics = ['../11.jpg', '../22.jpg', '../33.jpg'];
	var slider_div_id = 'lpm-slider';
	function sliderStart(){

		sliderInterval = setInterval(function(){

			// clear element
			$('#' + slider_div_id).empty();

			// creat / append / hide img
			var img = $(document.createElement('img'));

			if(i > slider_pics.length - 1)
				i = 0;
			var img_url = slider_pics[i++];
			img.attr('src', img_url);
			img.appendTo('#' + slider_div_id);
			img.hide();

			/*var event_block = $(document.createElement('div'));
			event_block.addClass('event_block');
			event_block.hover(hoverOnSlider, hoverOutSlider);
			event_block.appendTo('#' + slider_div_id);
			event_block.hide();*/
			
			legend_bg = $(document.createElement('div'));
			legend_bg.addClass('legend_bg');
			legend_bg.appendTo('#' + slider_div_id);
			legend_bg.html('hello world, this is background');
			legend_bg.hide();
				
			var legend_label = $(document.createElement('div'));
			legend_label.addClass('legend_label');
			legend_label.appendTo('#' + slider_div_id);
			legend_label.hide();

			
			
			// effect switching
			// show img
			img.fadeIn('slow');  // effect timing
			legend_bg.fadeIn();
			legend_label.fadeIn();
			//event_block.fadeIn();
			
		}, 3 * 1000); // transmit timing

	}

	function sliderStop(){
		clearInterval(sliderInterval);
	}

	function sliderlegendResizeLarger(){
		legend_bg
			.animate({
			    height: 100
			}, 500, function() {
			    	// Animation complete.
			});
	}

	function sliderlegendResizeSmaller(){
		legend_bg
			.delay(1000)
			.animate({
			    height: 30
			}, 500, function() {
			    // Animation complete.
			});
	}
	
	function hoverOnSlider(){
		sliderStop();
		sliderlegendResizeLarger();
	}

	function hoverOutSlider(){
		sliderStart();
		sliderlegendResizeSmaller();
	}

	var docCookies = {
	  getItem: function (sKey) {
	    return unescape(document.cookie.replace(new RegExp("(?:(?:^|.*;\\s*)" + escape(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*((?:[^;](?!;))*[^;]?).*)|.*"), "$1")) || null;
	  },
	  setItem: function (sKey, sValue, vEnd, sPath, sDomain, bSecure) {
	    if (!sKey || /^(?:expires|max\-age|path|domain|secure)$/i.test(sKey)) { return false; }
	    var sExpires = "";
	    if (vEnd) {
	      switch (vEnd.constructor) {
	        case Number:
	          sExpires = vEnd === Infinity ? "; expires=Fri, 31 Dec 9999 23:59:59 GMT" : "; max-age=" + vEnd;
	          break;
	        case String:
	          sExpires = "; expires=" + vEnd;
	          break;
	        case Date:
	          sExpires = "; expires=" + vEnd.toGMTString();
	          break;
	      }
	    }
	    document.cookie = escape(sKey) + "=" + escape(sValue) + sExpires + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "") + (bSecure ? "; secure" : "");
	    return true;
	  },
	  removeItem: function (sKey, sPath) {
	    if (!sKey || !this.hasItem(sKey)) { return false; }
	    document.cookie = escape(sKey) + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" + (sPath ? "; path=" + sPath : "");
	    return true;
	  },
	  hasItem: function (sKey) {
	    return (new RegExp("(?:^|;\\s*)" + escape(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=")).test(document.cookie);
	  },
	  keys: /* optional method: you can safely remove it! */ function () {
	    var aKeys = document.cookie.replace(/((?:^|\s*;)[^\=]+)(?=;|$)|^\s*|\s*(?:\=[^;]*)?(?:\1|$)/g, "").split(/\s*(?:\=[^;]*)?;\s*/);
	    for (var nIdx = 0; nIdx < aKeys.length; nIdx++) { aKeys[nIdx] = unescape(aKeys[nIdx]); }
	    return aKeys;
	  }
	};

	function buildMenu(){

		var menu = [
			['NOTIFICATIONS', '(no message)'],
			['COURSES', 'PIANO', 'GUITAR', 'VIOLIN'],
			['YOUR LEARNING', 'My bookmarks', 'My notes'],
			['ACCOUNT', '<a class=\'menu-hyperlink\' href=\'../signin\'>sign in</a>'],
		];

		//console.log(islogin);
		if(islogin){
			<?php session_start(); ?>
			var account_title = 'Hi, ' + '<?php echo $_SESSION['mem_name']; ?>';
			menu[3] = [account_title, 'Profile', 'Log out'];
		}

		//console.log(document.cookie);
		//alert(docCookies.getItem("username"));

		var menu_div_id = 'lpm-menu';
		var menu_width = $('#' + menu_div_id).width();
		var menu_item_width = Math.floor(menu_width / menu.length);
		for(var i = 0;i < menu.length;i++){

			var menu_item = $(document.createElement('ul'));
			menu_item.appendTo('#' + menu_div_id);
			menu_item.width(menu_item_width);
			menu_item.addClass('menu-item');

			

			for(var j = 0;j < menu[i].length;j++){

				var menu_subitem = $(document.createElement('li'));
				menu_subitem.appendTo(menu_item);

				var link = $(document.createElement('a'));
				link.appendTo(menu_subitem);
				
				if(j == 0){ // parent
					menu_subitem.addClass('menu-parent');
					link.html('<div class=\'menu-parent-text\'>' + menu[i][j] + '</div>');
				}else{ // child
					menu_subitem.addClass('menu-child');
					link.attr('href', '#');
					
					link.html('<div class=\'menu-child-text\'>' + menu[i][j] + '</div>');
				}
				
			}
			
		}
		
	}

	function buildAdvs(){

		var advs_id = 'advs';
		var advs = $('#' + advs_id);
		var advs_width = advs.width();

		var advs_ary = [
			{
				title: 'GUITAR',
				pictures: '../s1.jpg'
			},
			{
				title: 'PIANO',
				pictures: '../s2.jpg'
			},
			{
				title: 'VIOLIN',
				pictures: '../s3.jpg'
			}
		];

		var adv_width = Math.floor(advs_width / (advs_ary.length * 2));
		$('#home-adv').height(adv_width + 28 + 3); // 28: subscriber email, 3: margin top
		
		for(var i = 0;i < advs_ary.length;i++){

			var title = advs_ary[i].title;
			var title_adv = $(document.createElement('div'));
			title_adv.width(adv_width);
			title_adv.height(adv_width);
			title_adv.addClass('adv_block');
			title_adv.html('<span class=\'title_adv\'>' + title + '</span>');
			title_adv.appendTo(advs);
			
			var pictures = advs_ary[i].pictures;
			var pictures_div = $(document.createElement('div'));
			pictures_div.width(adv_width);
			pictures_div.height(adv_width);
			pictures_div.addClass('adv_block');
			pictures_div.html('<img style=\'width:100%;height:100%;\' src=\'' + pictures +'\'>');
			pictures_div.appendTo(advs);
			
		}
		
	}

	var month_days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
	function initBirthdaySelection(){

		// profile-birthday-month , profile-birthday-day , profile-birthday-year
		var month_id = 'profile-birthday-month';
		var month = $('#' + month_id);
		for(var i = 1;i <= 12;i++){
			var month_option = $(document.createElement('option'));
			month_option.attr('value', i);
			
			if(i == 1)
				month_option.attr('selected', true);
				
			month_option.html(i);
			month_option.appendTo(month);
		}

		var day_id = 'profile-birthday-day';
		var day = $('#' + day_id);
		for(var i = 1;i <= month_days[0];i++){
			var day_option = $(document.createElement('option'));
			day_option.attr('value', i);

			if(i == 1)
				day_option.attr('selected', true);
			
			day_option.html(i);
			day_option.appendTo(day);
		}

		var year_id = 'profile-birthday-year';
		var year = $('#' + year_id);
		for(var i = 1950;i <= 2010;i++){
			var year_option = $(document.createElement('option'));
			year_option.attr('value', i);

			if(i == 1970)
				year_option.attr('selected', true);
			
			year_option.html(i);
			year_option.appendTo(year);
		}

		month.change(function(){
			
			var month_val = month.val();
			day.empty();
			for(var i = 1;i <= month_days[month_val - 1];i++){
				var day_option = $(document.createElement('option'));
				day_option.attr('value', i);

				if(i == 1)
					day_option.attr('selected', true);
				
				day_option.html(i);
				day_option.appendTo(day);
			}

		});
		
		year.change(function(){
			
			var year_val = year.val();
			var month_val = month.val();
			if(isLeapYear(year_val)){
				month_days[2 - 1] = 29; // - 1 for array index
			}else{
				month_days[2 - 1] = 28; 
			}

			if(month_val == 2){
				month.trigger('change');
			}

		});
		
	}

	function isLeapYear(year){

		if(year % 400 == 0)
			return true;
		else if(year % 100 == 0)
			return false;
		else if(year % 4 == 0)
			return true;
		else
			return false;
		
	}
	
	$(document).ready(function() {

		buildMenu();
		
		$('#' + slider_div_id).hover(hoverOnSlider, hoverOutSlider);
		sliderStart();

		buildAdvs();

		initBirthdaySelection();

		createBlock({
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
		});

		loadProfile();

	});

	function createBlock(option){

		var anchor = $('#' + option.anchorId);
		
		var text = $(document.createElement('span'));
		text.appendTo(anchor);
		text.attr('id', option.textId);
		text.html(option.text);
		var textHeight = text.height();
		var textWidth = text.width();

		anchor.empty();
		var text = $(document.createElement('div'));
		text.appendTo(anchor);
		text.attr('id', option.textId);
		text.html(option.text);
		text.height(textHeight);
		text.width(textWidth);
	
		var anchorHeight = anchor.height();
		var top = Math.ceil((anchorHeight - textHeight) / 2);
		text.css('padding-top', top + 'px');
		
	}

	function saveProfile(){

		var img = $('#profile-photo-img').attr('src');
		var first = $('#profile-name-first').val();
		var last = $('#profile-name-last').val();
		var email = $('#profile-email-input').val();
		var month = $('#profile-birthday-month').val();
		var day = $('#profile-birthday-day').val();
		var year = $('#profile-birthday-year').val();
		var gender = $('#profile-gender-input').val();
		var inters = getCheckBoxVals('profile-interesting');
		var pwd = $('#profile-password-input').val();

		$.post(	"../users/save_profile.php"
				,{
					'USER_IMG': img,
				    'USER_FIRST': first,
				    'USER_LAST': last,
				    'USER_EMAIL': email,
				    'USER_MONTH': month,
				    'USER_DAY': day,
				    'USER_YEAR': year,
				    'USER_GENDER': gender,
				    'USER_INTERS': inters,
				    'USER_PWD': pwd
				}
				,function(data, status){
				    //console.log("Data: " + data + "\nStatus: " + status);
				    alert('Create success !');
				}
		);
		
	}

	function getCheckBoxVals(checkboxid) { 

		var allVals = [];
    	$('#' + checkboxid + ' :checked').each(function() {

        	if($(this).val() == 'Others')
    			allVals.push($('#profile-interesting-others').val());
        	else
        		allVals.push($(this).val());
    		//console.log($(this).val());
     	});
     
     	return catWithCama(allVals);
	     
	}

	function catWithCama(aryVals){

		var str = '';
		var hasVal = false;
		for(var i = 0;i < aryVals.length;i++){

			if(!hasVal){
				hasVal = true;
			}
			else{
				str += ',' // + aryVals[i];
			}

			str += aryVals[i];
				
		}

		return str;

	}

	// signin
	function signinLPMwithFB(){
		alert('You click me !');
	}

	var islogin = <?php 

		// echo $islogin; 
		if(isset($_SESSION['username']) && isset($_SESSION['password'])){
			echo "true";
		}else{
			echo "false";
		}
	
	?>;
	function signinLPM(){

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
				//alert(data.msg);
				if(data.valid){
					window.location = "../profile";
					//islogin = true;
				}
				
				//
				//console.log(JSON.stringify(status, null, 4));
			    //console.log("Data: " + data + "\nStatus: " + status);
			    //alert('Create success !');
			}
		);
		
	}

	/*$('#profile-form-show').load(function(){

		$.get(	"../users/get_user_profile.php"
			,function(data, textStatus, jqXHR){
				console.log(JSON.stringify(data, null, 4));
				console.log(JSON.stringify(textStatus, null, 4));
				console.log(JSON.stringify(jqXHR, null, 4));
			}
		);
	
	});*/

	function loadProfile(){

		$.get(	"../users/get_user_profile.php"
			,function(data, textStatus, jqXHR){
				console.log(JSON.stringify(data, null, 4));
				//console.log(JSON.stringify(textStatus, null, 4));
				//console.log(JSON.stringify(jqXHR, null, 4));

				var user_profile = data.data;
				if(user_profile != null){
					$('#profile-name-first').val(user_profile['USER_FIRST']);
					$('#profile-name-last').val(user_profile['USER_LAST']);
					$('#profile-email-input').val(user_profile['USER_EMAIL']);
					$('#profile-birthday-month').val(user_profile['USER_MONTH']);
					$('#profile-birthday-day').val(user_profile['USER_DAY']);
					$('#profile-birthday-year').val(user_profile['USER_YEAR']);
					$('#profile-gender-input').val(user_profile['USER_GENDER']);
					//$('#').val(user_profile['']);
					//$('#').val(user_profile['']);
				}
				
				
			}
		);

	}

	function saveCourse(){

		var title = $('#course-input-title').val();
		var next = $('#course-input-next').val();
		var goal = $('#course-input-goal').val();
		var topcover = $('#course-input-topcover').val();
		var trgaudi = $('#course-input-trgaudi').val();
		var numles = $('#course-input-numles').val();
		var recbg = $('#course-input-recbg').val();
		var keyword = $('#course-input-keyword').val();
		var description = $('#course-input-description').val();
		var genen = $('#course-input-genen').val();
		var instructor = $('#course-input-instructor').val();


		<?php include_once '../courses/courses_col.php'; ?>
		
		$.post(	"../courses/save_course.php"
				,{
				    <?php echo $col_course_title; ?>: title,
				    <?php echo $col_course_next; ?>: next,
				    <?php echo $col_course_goal; ?>: goal,
				    <?php echo $col_course_tapcover; ?>: topcover,
				    <?php echo $col_course_trgaudi; ?>: trgaudi,
				    <?php echo $col_course_numles; ?>: numles,
				    <?php echo $col_course_recbg; ?>: recbg,
				    <?php echo $col_course_keyword; ?>: keyword,
				    <?php echo $col_course_des; ?>: description,
				    <?php echo $col_course_genen; ?>: genen,
				    <?php echo $col_course_instor; ?>: instructor
				}
				,function(data, status){

					console.log(JSON.stringify(data, null, 4));
					//alert(data.msg);
					//if(data.valid){
						//window.location = "../profile";
						//islogin = true;
					//}
					
					//
					//console.log(JSON.stringify(status, null, 4));
				    //console.log("Data: " + data + "\nStatus: " + status);
				    //alert('Create success !');
				}
			);

	}
	
	</script>
	
</head>

<body>

	<div class='main-wrapper'>
	
		<div id='main-header'>
			
			<div class='display-section'>
				<div id='header-img'>
				</div> <!-- header-img -->
				<div id='header-about'>
					<h1>Liberty Park Music</h1>
				</div><!-- header-about -->
				<!-- <div id='header-menu'> -->
				<div id='lpm-menu-wrapper'>
					<div id='lpm-menu'></div> <!-- lpm-menu -->
				</div>	
				<!-- </div><!-- header-menu -->
			</div><!-- display-section -->
			
		</div><!-- main-header -->
		
		<div id='main-bar'></div><!-- main-bar -->
		
		<div id='main-content'>
			<div class='display-section'>
				
				<div class='course-area'>
				
					<div class='course-input-block'>
						Course Title<br><input type='text' class='course-input-type' id='course-input-title'>
					</div>
					
					<div class='course-input-block'>
						Instructor<br><input type='text' class='course-input-type' id='course-input-instructor'>
					</div>
					
					<div class='course-input-block'>
						Genen<br><input type='text' class='course-input-type' id='course-input-genen'>
					</div>
					
					<div class='course-input-block'>
						Description<br><input type='text' class='course-input-type' id='course-input-description'>
					</div>
					
					<div class='course-input-block'>
						Keywords<br><input type='text' class='course-input-type' id='course-input-keyword'>
					</div>
					
					<div class='course-input-block'>
						Recommended background<br><input type='text' class='course-input-type' id='course-input-recbg'>
					</div>
					
					<div class='course-input-block'>
						# of lessons included<br><input type='text' class='course-input-type' id='course-input-numles'>
					</div>
					
					<div class='course-input-block'>
						Target audience<br><input type='text' class='course-input-type' id='course-input-trgaudi'>
					</div>
					
					<div class='course-input-block'>
						Topics covered<br><input type='text' class='course-input-type' id='course-input-topcover'>
					</div>
					
					<div class='course-input-block'>
						Goal upon completion<br><input type='text' class='course-input-type' id='course-input-goal'>
					</div>
					
					<div class='course-input-block'>
						Next steps<br><input type='text' class='course-input-type' id='course-input-next'>
					</div>
					
					<div id='course-insert-lesson-block-wrapper' class='course-input-block'>
						Insert Lesson<br>
						<div class='course-insert-lesson-block'>
							<iframe src="http://player.vimeo.com/video/64570202?byline=0&amp;portrait=0&amp;badge=0" width="230" height="135" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
						<div class='course-insert-lesson-block'></div>
					</div>
					
					<div class='course-input-block'>
						<input type='button' class='course-input-type' value='submit' id='course-input-submit' onclick='saveCourse();'>
					</div>
					
				</div>
				
			</div><!-- display-section -->
		</div><!-- main-content -->
		
	</div><!-- main-wrapper -->

</body>

</html>