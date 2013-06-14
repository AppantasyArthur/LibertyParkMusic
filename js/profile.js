var Profile = function(){};

Profile.prototype.saveProfile = function(){

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
	
};

Profile.prototype.getCheckBoxVals = function(checkboxid) { 

	var allVals = [];
	$('#' + checkboxid + ' :checked').each(function() {

    	if($(this).val() == 'Others')
			allVals.push($('#profile-interesting-others').val());
    	else
    		allVals.push($(this).val());
		//console.log($(this).val());
 	});
 
 	return catWithCama(allVals);
     
};

// move to Util ?
Profile.prototype.catWithCama = function(aryVals){

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

};

Profile.prototype.loadProfile = function(){

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

};

Profile.prototype.month_days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
Profile.prototype.initBirthdaySelection(){

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
	
};


