var FAQ = function(){
	
	
	
};

FAQ.prototype.openAnswer = function(idNo){

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
	};
	
};