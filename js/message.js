lpm = {};
lpm.Message = function(pars){
	
	var ele_id = pars.ele_id;
	this.getEleID = function(){ 
		return ele_id; 
	};
	
};

lpm.Message.prototype.init = function(){
	
	var ele_id = this.getEleID();
	var default_message = 'Write a replay ...';
	$('#' + ele_id).focus(function(){

		var replay = $(this).val();
		replay = $.trim(replay);
		if(replay == default_message){
			$(this).val('');
		}
		
	});			
	
	$('#' + ele_id).focusout(function(){

		var replay = $(this).val();
		replay = $.trim(replay);
		if(!(replay.length)){ // empty string
			$(this).val(default_message);
		}
		
	});
	
};

lpm.Message.prototype.getMessage = function(){
	
	var ele_id = this.getEleID();
	var ele = $('#' + ele_id);
	
	var replay = ele.val();
	return $.trim(replay);
	
};