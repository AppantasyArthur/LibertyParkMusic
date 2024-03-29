<!doctype html>
<html>

<head>
	<meta charset='utf-8'>
	<title><?php echo $title; ?></title>
	
	<link rel="stylesheet" href="../css/lpm-reset.css">
	<link rel="stylesheet" href="../css/lpm-global.css">
	<!--  <link rel='stylesheet' href='../css/lpm-base.css'> -->
	<link rel='stylesheet' href='../css/lpm-menu.css'>
	<link rel='stylesheet' href='../css/lpm-slider.css'>
	<link rel='stylesheet' href='../css/lpm-advs.css'>
	<!-- <link rel='stylesheet' href='../css/lpm-form.css'> -->
	<link rel='stylesheet' href='../css/lpm-signin.css'>
	<link rel='stylesheet' href='../css/lpm-profile.css'>
	<link rel='stylesheet' href='../css/lpm-course.css'>
	<link rel='stylesheet' href='../css/lpm-lesson.css'>
	
	<link rel='stylesheet' href='../css/lpm-people.css'>
	<link rel='stylesheet' href='../css/lpm-faq.css'>
	
	<link rel='stylesheet' href='../css/lpm-subject.css'>
	
	<link rel='stylesheet' href='../css/lpm-bookmark.css'>
	<link rel='stylesheet' href='../css/lpm-note.css'>
	
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
	<script src="../superfish/superfish.js"></script>
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
			//legend_bg.appendTo('#' + slider_div_id);
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

	/*var docCookies = {
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
	  }
	  
	};*/

	// deprecated, Arthur 20130529 0859
	function buildMenu(){

		var menu = [
			['NOTIFICATIONS', '(no message)'],
			['COURSES', 'PIANO', 'GUITAR', 'VIOLIN'],
			['YOUR LEARNING', 'My bookmarks', 'My notes'],
			['ACCOUNT', '<a class=\'menu-hyperlink\' href=\'../signin\'>sign in</a>'],
		];

		//console.log(islogin);
		if(islogin){
			<?php //session_start(); ?>
			//var account_title = 'Hi, ' + '<?php //echo $_SESSION['mem_name']; ?>';
			//menu[3] = [account_title, 'Profile', 'Log out'];
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
		include_once '../php_global/sessions.php';
		$lpmsession = new LPMSession();
		if($lpmsession->isLogin()){
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
				if(data.valid){
					window.location = "../profile";
					//islogin = true;
				}
				
			}
		);
		
	}

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

					//console.log(JSON.stringify(data, null, 4));
					alert(data.msg);
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

	var study_mode_hook; // =  $('#full-screen-hook');
	function showStudyMode(homework_path){

		if(getAcrobatInfo().acrobat){
			
			//console.log('已安裝');

			var bodyHeight = $('body').height();
			
			study_mode_hook =  $('#full-screen-hook');
			study_mode_hook.show();
			study_mode_hook.height(bodyHeight);

			$('#workspace-hook').height(bodyHeight);

			var pdfObject = $(document.createElement('object'));
			// data="test.pdf" type="application/pdf" width="300" height="200"
			pdfObject.attr('data', homework_path);
			pdfObject.attr('type', 'application/pdf');
			pdfObject.width('100%');
			pdfObject.height('800px');
			//pdfObject.addClass('study-doc');
			//pdfObject.css('background-color', 'black');

			var anchor = $('#workspace-hook');
			anchor.empty();
			pdfObject.appendTo(anchor);
			
			scroll2Top();
			
		}else{
			console.log('未安裝');
			alert('Install Acrobat Reader First.');
		}
		
	}

	function scroll2Top(){

		var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
		$body.animate({
			scrollTop: 0
		}, 600);
		
	}

	function closeStudyMode(){

		study_mode_hook.hide();
		
	}

	var getAcrobatInfo = function() {
		 
		  var getBrowserName = function() {
		    return this.name = this.name || function() {
		      var userAgent = navigator ? navigator.userAgent.toLowerCase() : "other";
		 
		      if(userAgent.indexOf("chrome") > -1)        return "chrome";
		      else if(userAgent.indexOf("safari") > -1)   return "safari";
		      else if(userAgent.indexOf("msie") > -1)     return "ie";
		      else if(userAgent.indexOf("firefox") > -1)  return "firefox";
		      return userAgent;
		    }();
		  };
		 
		  var getActiveXObject = function(name) {
		    try { return new ActiveXObject(name); } catch(e) {}
		  };
		 
		  var getNavigatorPlugin = function(name) {
		    for(key in navigator.plugins) {
		      var plugin = navigator.plugins[key];
		      if(plugin.name == name) return plugin;
		    }
		  };
		 
		  var getPDFPlugin = function() {
		    return this.plugin = this.plugin || function() {
		      if(getBrowserName() == 'ie') {
		        //
		        // load the activeX control
		        // AcroPDF.PDF is used by version 7 and later
		        // PDF.PdfCtrl is used by version 6 and earlier
		        return getActiveXObject('AcroPDF.PDF') || getActiveXObject('PDF.PdfCtrl');
		      }
		      else {
		        return getNavigatorPlugin('Adobe Acrobat') || getNavigatorPlugin('Chrome PDF Viewer') || getNavigatorPlugin('WebKit built-in PDF');
		      }
		    }();
		  };
		 
		  var isAcrobatInstalled = function() {
		    return !!getPDFPlugin();
		  };
		 
		  var getAcrobatVersion = function() {
		    try {
		      var plugin = getPDFPlugin();
		 
		      if(getBrowserName() == 'ie') {
		        var versions = plugin.GetVersions().split(',');
		        var latest   = versions[0].split('=');
		        return parseFloat(latest[1]);
		      }
		 
		      if(plugin.version) return parseInt(plugin.version);
		      return plugin.name
		      
		    }
		    catch(e) {
		      return null;
		    }
		  }
		 
		  //
		  // The returned object
		  // 
		  return {
		    browser:        getBrowserName(),
		    acrobat:        isAcrobatInstalled() ? true : false,
		    acrobatVersion: getAcrobatVersion()
		  };
		};

		function loadLesson(){

			loadHomeworks();

			loadComments();

		}

		// paging
		function loadComments(){

			var anchor = $('#lesson-comment-list-anchor');
			anchor.empty();
			$.get(	"../lessons/get_lesson_comments.php"
					,function(data, textStatus, jqXHR){
						
						console.log(JSON.stringify(data, null, 4));
						
						var lesson = data;
						var comments = lesson.comments;

						var cCount = comments.length;
						for(var i = 0;i < cCount;i = i + 1){

							var lCBlock = $(document.createElement('div'));
							lCBlock.addClass('lesson-comment');

							// img
							var lCImg = $(document.createElement('div'));
							lCImg.addClass('lesson-comment-user-img');
							lCImg.html(comments[i].img);
							lCImg.appendTo(lCBlock);
							
							// content
							var lCContent = $(document.createElement('div'));
							lCContent.addClass('lesson-comment-content');
							lCContent.html(comments[i].content);
							lCContent.appendTo(lCBlock);
							
							// date
							var lCDate = $(document.createElement('div'));
							lCDate.addClass('lesson-comment-date');
							lCDate.html(comments[i].date);
							lCDate.appendTo(lCBlock);
							
							lCBlock.appendTo(anchor);
							
						}
						
					}
					
			);

		}

		// for lesson
		function loadHomeworks(){

			var anchor = $('#lesson-file-tab-content-anchor');
			anchor.empty();
			$.get(	"../lessons/get_lesson.php"
					,function(data, textStatus, jqXHR){
						
						console.log(JSON.stringify(data, null, 4));
						
						var lesson = data;
						var homeworks = lesson.homeworks;

						var hCount = homeworks.length;
						for(var i = 0;i < hCount;i = i + 1){

							var hPath = homeworks[i];
							var hImg = $(document.createElement('img'));
							hImg.attr('src', '../img/homework_icon.png');
							hImg.attr('onClick', 'showStudyMode(\'' + hPath + '\');');
							hImg.addClass('lesson-file-item');
							//hImg.css('width', '100px');
							//hImg.css('height', '100px');
							//hImg.hide();
							hImg.appendTo(anchor);

							//hImg.show('fast');
							
						}
						
					}
					
			);
			
		}

		// for lesson
		function saveComment(){

			// lesson-comment-input-textarea
			var content = $('#lesson-comment-input-textarea').val();

			<?php include_once '../comments/comments.php'; ?>
			$.post(	"../comments/save_comment.php"
					,{
					    <?php echo $CMT_COL_CONTENT; ?>: content 
					}
					,function(data, status){

						console.log(JSON.stringify(data, null, 4));
						var content = data.<?php echo $CMT_COL_CONTENT; ?>;
						var date = data.<?php echo $CMT_COL_DATE; ?>;
						var img = '';
						
						var lCBlock = $(document.createElement('div'));
						lCBlock.addClass('lesson-comment');

						// img
						var lCImg = $(document.createElement('div'));
						lCImg.addClass('lesson-comment-user-img');
						lCImg.html(img);
						lCImg.appendTo(lCBlock);
						
						// content
						var lCContent = $(document.createElement('div'));
						lCContent.addClass('lesson-comment-content');
						lCContent.html(content);
						lCContent.appendTo(lCBlock);
						
						// date
						var lCDate = $(document.createElement('div'));
						lCDate.addClass('lesson-comment-date');
						lCDate.html(date);
						lCDate.appendTo(lCBlock);

						var anchor = $('#lesson-comment-list-anchor');
						//lCBlock.appendTo(anchor);
						anchor.prepend(lCBlock);
						
					}
					
			);

		}

		function initStudyModeBackground(){

			var bodyHeight = $('body').height();
			
			var sModeBG =  $('#study-mode-background-anchor');
			sModeBG.height(bodyHeight);
			sModeBG.width('100%');
			sModeBG.css('z-index', '-100');
			sModeBG.css('position', 'absolute');
			
		}

		function sendNote(){

			var content = $('#lesson-note-input-content').val();

			<?php include_once '../notes/notes.php'; ?>
			<?php $note = new Note(); ?>
			$.post(	"../notes/save_note.php"
					,{
					    <?php echo $note->COL_CONTENT; ?>: content 
					}
					,function(data, status){

						console.log(JSON.stringify(data, null, 4));
						//var content = data.<?php echo $note->COL_CONTENT; ?>;
						//var date = data.<?php echo $note->COL_DATE; ?>;

						var content = $(document.createElement('div'));
						content.html(data.<?php echo $note->COL_CONTENT; ?>);
						content.addClass('lesson-note-content');

						var _delete = $(document.createElement('div'));
						_delete.html('X');
						_delete.addClass('lesson-note-delete');

						var date = $(document.createElement('div'));
						date.html(data.<?php echo $note->COL_DATE; ?>); 
						date.addClass('lesson-note-date');

						var block = $(document.createElement('div'));
						block.addClass('lesson-note-block');
						content.appendTo(block);
						_delete.appendTo(block);
						date.appendTo(block);

						var note_list = $('#lesson-note-list-anchor');
						note_list.prepend(block);
						
					}
					
			);

		}

		function showStudyNoteMode(){

			initStudyModeBackground();
			
			var bodyHeight = $('body').height();
			
			study_mode_hook =  $('#full-screen-hook');
			study_mode_hook.show();
			study_mode_hook.height(bodyHeight);

			//$('#workspace-hook').height(bodyHeight);

			/*
			<div class='lesson-note-input-block'>
			<div class='lesson-note-input'>
				<textarea id='lesson-note-input-content' rows="5" cols="95"></textarea>
			</div>
			<div class='lesson-note-input-send'>
			</div>
			</div>*/

			var input_textarea = $(document.createElement('textarea'));
			input_textarea.attr('id', 'lesson-note-input-content');
			input_textarea.attr('rows', '5');
			input_textarea.attr('cols', '95');

			var input = $(document.createElement('div'));
			input.addClass('lesson-note-input');

			input_textarea.appendTo(input);

			var input_send = $(document.createElement('div'));
			input_send.addClass('lesson-note-input-send');
			input_send.attr('onclick', 'sendNote()');

			var input_block = $(document.createElement('div'));
			input_block.addClass('lesson-note-input-block');	
			input.appendTo(input_block);		
			input_send.appendTo(input_block);
			
			var anchor = $('#workspace-hook');
			anchor.empty();
			input_block.appendTo(anchor);

			$.get(	"../notes/get_notes.php"
					,function(data, textStatus, jqXHR){
						
						console.log(JSON.stringify(data, null, 4));

						var note_list = $(document.createElement('div'));
						note_list.attr('id', 'lesson-note-list-anchor');
						note_list.addClass('lesson-note-list');

						<?php include_once '../notes/notes.php'; ?>
						<?php $note = new Note(); ?>
						var notes = data.notes;
						var nCount = notes.length;
						for(var i = 0;i < nCount;i = i + 1){

							//<div class='lesson-note-block'>
							//<div class='lesson-note-content'>note note note note note note note note </div>
							//<div class='lesson-note-delete'>X</div>
							//<div class='lesson-note-date'>2013-05-05</div>
							//</div>

							var content = $(document.createElement('div'));
							content.html(notes[i].<?php echo $note->COL_CONTENT; ?>);
							content.addClass('lesson-note-content');

							var _delete = $(document.createElement('div'));
							_delete.html('X');
							_delete.addClass('lesson-note-delete');

							var date = $(document.createElement('div'));
							date.html(notes[i].<?php echo $note->COL_DATE; ?>); 
							date.addClass('lesson-note-date');

							var block = $(document.createElement('div'));
							block.addClass('lesson-note-block');
							content.appendTo(block);
							_delete.appendTo(block);
							date.appendTo(block);

							block.appendTo(note_list);
							
						}

						//anchor.height(note_list.height() + input_block.height() + 20);
						note_list.appendTo(anchor);
						
					}
					
			);
			
			scroll2Top();

		}

		function openAnswer(idNo){

			// faq-a-2
			// faq-answer-2
			var a = $('#faq-a-' + idNo);
			var answer = $('#faq-answer-' + idNo);

			if (a.css('display') == 'none') {
				// show it
				a.show();
				answer.show();
			}else{
				// hide it
				a.hide('slow');
				answer.hide('slow');
			}
			
		}

		function bookmarkCourse(ele){
			
			var jq_ele = $(ele);
			var jq_ele_imgsrc = jq_ele.attr('src');
			var jq_ele_cid = jq_ele.attr('id').split('-');
			if(jq_ele_imgsrc == 'bookmark_unselect.png'){

				//console.log(jq_ele_cid[2]);
				//console.log('bookmark_unselect');
				$.get(	"../courses/bookmark_course.php"
						,{
							course_id: jq_ele_cid[2],
							member_id: 111,
							action: 'bookmark'
						},function(data, textStatus, jqXHR){
							
							//console.log(JSON.stringify(data, null, 4));
							jq_ele.attr('src', 'bookmark_selected.png');
							
							
						}
						
				);
				
			}else{
				
				// user wish to unbk
				$.get(	"../courses/bookmark_course.php"
						,{
							bookmark_id: 1,
							action: 'unbookmark'
						},function(data, textStatus, jqXHR){
							
							//console.log(JSON.stringify(data, null, 4));
							jq_ele.attr('src', 'bookmark_unselect.png');
							
						}
						
				);
				
			}
		}

		$(document).ready(function() {

			//buildMenu();
			// 使用一個叫 nav 的 ul
			$('ul.nav').superfish({
				//delay: 200,
				animation: {opacity: 'show'},
				speed: 'fast',
				speedOut: 'fast',
				autoArrows: false,
				dropShadows: false
			});
			
			$('#' + slider_div_id).hover(hoverOnSlider, hoverOutSlider);
			sliderStart();

			//buildAdvs();

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

			loadLesson();

			// hide non-login block
			if(!islogin){

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

		});

	</script>
	
</head>

<body>
	<div id='full-screen-hook' class='full-screen-mode' >
		<div id='study-mode-background-anchor' class='study-mode-background' onclick='closeStudyMode();'></div>
		<div class='study-mode-left'>
			<div class='lesson-main-video'>
				<iframe src='http://player.vimeo.com/video/64570202?byline=0&amp;portrait=0&amp;badge=0' width='636' height='356' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</div>
			<div class='lesson-description-block'>
				<div class='lesson-title'>Lesson 1</div>
				<div class='lesson-teacher'>Hung-Chang Wei</div>
				<div class='lesson-update-date'>2013.03.03</div>
				<div class='lesson-description'>In this lesson, you will learn about key signature for all keys, and the use of accidentals to after pitches. Major and minor modes will both be covered.</div>
			</div>
			<div class='lesson-file-block'>
				<div class='lesson-file-tabs'>
					<div class='lesson-file-tab lesson-file-tab-selected' onclick='loadHomeworks();'>
						<div class='lesson-file-tab-text'>Homework</div>
					</div>
					<div class='lesson-file-tab'>
						<div class='lesson-file-tab-text'>Share</div>
					</div>
					<div class='lesson-file-tab' onclick='showStudyNoteMode();'>
						<div class='lesson-file-tab-text'>Note</div>
					</div>
				</div>
				<div id='lesson-file-tab-content-anchor' class='lesson-file-tab-content'></div>
			</div>
		</div>
		<div class='study-mode-right'>
			<a id='workspace-hook-anchor'></a>
			<div id='workspace-hook' class='study-mode-lesson-workspace'>
				
				<!--  
				<div class='lesson-note-list' >
				
					<div class='lesson-note-block'>
						<div class='lesson-note-content'>note note note note note note note note note note </div>
						<div class='lesson-note-delete'>X</div>
						<div class='lesson-note-date'>2013-05-05</div>
						
					</div>
				
				</div>
				-->
				
			</div>
		</div>
	</div>
	<div  class='main-wrapper'>
	
		<div id='main-header'>
			
			<div class='display-section'>
				
				<div id='header-img'>
					<img class='img-center' alt='Liberty Park Music' src='../img/logo_82x82.png'>
				</div> <!-- header-img -->
				
				<div id='header-about'>
					<div id='header-about-menu'>About&ensp;|&ensp;<a class='about-menu-style' href='../people/'>People</a>&ensp;|&ensp;Contact us&ensp;|&ensp;<a class='about-menu-style' href='../faq/'>FAQ</a></div>
					<div class='header-about-title'>LIBERTY PARK MUSIC</div>
				</div><!-- header-about -->
				
				<!-- <div id='header-menu'> -->
				
				<div id='lpm-menu-wrapper'>
					<div id='lpm-menu'>
						
						<ul class='nav'>
							<li><a class='menu-title'>
									<div class='menu-title-text-noti'>
										<div class=''>NOTIFICATIONS</div>
									</div>
								</a>
								<ul id='noti-menu-list'>
									<!-- <li class='noti-menu-item'>
										<div class='noti-menu-item-img'><img src="../img/logo_62x62.png"></div>
										<div class='noti-menu-item-cnt'>
											<div class='noti-menu-item-cnt-name'>Arthur Lai</div>
											<div class='noti-menu-item-cnt-text'>Do you love me ?</div>
											<div class='noti-menu-item-cnt-date'>17:06 am</div>
										</div>
									</li>
									<li class='noti-menu-item'>
										<div class='noti-menu-item-img'><img src="../img/logo_62x62.png"></div>
										<div class='noti-menu-item-cnt'>
											<div class='noti-menu-item-cnt-name'>Belle Huang</div>
											<div class='noti-menu-item-cnt-text'>Hi ~</div>
											<div class='noti-menu-item-cnt-date'>2013/02/17</div>
										</div>
									</li> -->
								</ul>
							</li>
							<li class='menu-dot-item'><div class='menu-dot-item-text'>&bull;</div></li>
							<li><a class='menu-title'>
									<div class='menu-title-text-cors'>
										<div class=''>COURSES</div>
									</div>
								</a>
								<ul id='cors-menu-list'>
									<!-- <li class='cors-menu-item-start'>
										<div class='cors-menu-item-start-text'>Start browsing here.</div>
									</li> -->
									<li class='cors-menu-item'>
										<a class='hyper-link-menu-item' href='../subject/?subject=guitar'>
											<div class='cors-menu-item-text'>Guitar</div>
											<!-- <div class='cors-menu-item-img'><img src=""></div> -->
										</a>
									</li>
									<li class='cors-menu-item'>
										<a class='hyper-link-menu-item' href='../subject/?subject=guitar'>
											<div class='cors-menu-item-text'>Piano</div>
											<!-- <div class='cors-menu-item-img'><img src=""></div> -->
										</a>
									</li>
									<li class='cors-menu-item'>
										<a class='hyper-link-menu-item' href='../subject/?subject=guitar'>
											<div class='cors-menu-item-text'>Theory</div>
											<!-- <div class='cors-menu-item-img'><img src=""></div> -->
										</a>
									</li>
								</ul>
							</li>
							<li class='menu-dot-item'><div class='menu-dot-item-text'>&bull;</div></li>
							<li><a class='menu-title'>
									<div class='menu-title-text-lrng'>YOUR LEARNING</div>
								</a>
								<ul id='lrng-menu-list'>
									<li class='lrng-menu-item' id='lrng-menu-item-bk'><a class='lrng-menu-item-text' href="../bookmark">Your bookmarks</a></li>
									<li class='lrng-menu-item' id='lrng-menu-item-nt'><a class='lrng-menu-item-text' href="#">Your notes</a></li>
								</ul>
							</li>
							<li class='menu-dot-item'><div class='menu-dot-item-text'>&bull;</div></li>
							<li><a class='menu-title'>
									<div class='menu-title-text-acnt'>
										<div class='acnt-sayhello'><?php if($lpmsession->isLogin()) echo $lpmsession->getMemberName(); ?>&nbsp;&nbsp;&nbsp;</div>
										ACCOUNT
									</div>
								</a>
								<ul id='acnt-menu-list'>
									<li class='acnt-menu-item' id='acnt-menu-item-profile'><a class='acnt-menu-item-text' href="#">Profile</a></li>
									<li class='acnt-menu-item' id='acnt-menu-item-message'><a class='acnt-menu-item-text' href="#">Messages</a></li>
									<li class='acnt-menu-item' id='acnt-menu-item-contact'><a class='acnt-menu-item-text' href="#">Contacts</a></li>
									<li class='acnt-menu-item' id='acnt-menu-item-signin'><a class='acnt-menu-item-text' href="../signin">Sign in</a></li>
									<li class='acnt-menu-item' id='acnt-menu-item-signup'><a class='acnt-menu-item-text' href="../signup">Sign up</a></li>
								</ul>
							</li>
						</ul>
						
					</div> <!-- lpm-menu -->
				</div>
				
			</div><!-- display-section -->
			
		</div><!-- main-header -->
		
		<div id='main-bar'></div><!-- main-bar -->
		
		<div id='main-content'>
			<div class='display-section'>
			
				<div id='nt-navi-block'>
					<div class='nt-navi-style-select'>PIANO</div><div class='nt-navi-style-nonselect'>&nbsp;|&nbsp;<a class='nt-navi-style-link' href='../note/?ntcat=guitar'>GUITAR</a>&nbsp;|&nbsp;<a class='nt-navi-style-link' href='../note/?ntcat=theory'>THEORY</a></div>
				</div>
				<div id='nt-main-title-block'>
					<div class='nt-main-title-block-text'>Notes</div>
					<div class='nt-main-title-block-function'>
						<div class='nt-main-title-block-function-item'>
							<img src='../img/print_mono_35x35.png' onclick=''>
						</div>
						<div class='nt-main-title-block-function-item'>
							<img src='../img/email_mono_35x35.png' onclick=''>
						</div>
					</div>
				</div>
				<div class='nt-list'>
					<div class='nt-block'>
						<div class='nt-block-title piano-beginner-bgcolor'>
							<div class='nt-block-title-text'>BEGINNER</div>
							<div class='nt-block-title-img'><img src='../img/crotchet_wh_1.png'></div>
						</div>
						<div class='nt-block-list'>
							<div class='nt-block-list-item'>
								<div class='nt-block-list-item-courselessonname'>Course 1&nbsp;Lesson 1</div>
								<div class='nt-block-list-item-note'>note note note note note note note note note note note note note note note note note note note note note note note note note note note note note note note </div>
							</div>
							<div class='nt-block-list-item'>
								<div class='nt-block-list-item-courselessonname'>Course 1&nbsp;Lesson 1</div>
								<div class='nt-block-list-item-note'>note note note note note note note note note note note note note note note note note note note note note note note note note note note note note note note </div>
							</div>
						</div>
					</div>
					<div class='nt-block'>
						<div class='nt-block-title piano-intermediate-bgcolor'>
							<div class='nt-block-title-text'>INTERMEDIATE</div>
							<div class='nt-block-title-img'><img src='../img/crotchet_wh_2.png'></div>
						</div>
						<div class='nt-block-list'>
							<div class='nt-block-list-item'>
								<div class='nt-block-list-item-courselessonname'>Course 1&nbsp;Lesson 1</div>
								<div class='nt-block-list-item-note'>note note note note note note note note note note note note note note note note note note note note note note note note note note note note note note note </div>
							</div>
							<div class='nt-block-list-item'>
								<div class='nt-block-list-item-courselessonname'>Course 1&nbsp;Lesson 1</div>
								<div class='nt-block-list-item-note'>note note note note note note note note note note note note note note note note note note note note note note note note note note note note note note note </div>
							</div>
						</div>
					</div>
					<div class='nt-block'>
						<div class='nt-block-title piano-advanced-bgcolor'>
							<div class='nt-block-title-text'>ADVANCED</div>
							<div class='nt-block-title-img'><img src='../img/crotchet_wh_3.png'></div>
						</div>
						<div class='nt-block-list'>
							<div class='nt-block-list-item'>
								<div class='nt-block-list-item-courselessonname'>Course 1&nbsp;Lesson 1</div>
								<div class='nt-block-list-item-note'>note note note note note note note note note note note note note note note note note note note note note note note note note note note note note note note </div>
							</div>
							<div class='nt-block-list-item'>
								<div class='nt-block-list-item-courselessonname'>Course 1&nbsp;Lesson 1</div>
								<div class='nt-block-list-item-note'>note note note note note note note note note note note note note note note note note note note note note note note note note note note note note note note </div>
							</div>
						</div>
					</div>
				</div>
				
			</div><!-- display-section -->
		</div><!-- main-content -->
	</div><!-- main-wrapper -->

</body>

</html>
