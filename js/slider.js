var Slider = function(){};

Slider.prototype.init = function(){
	
	$('#' + this.slider_div_id).hover(hoverOnSlider, hoverOutSlider);
	sliderStart();
	
};

Slider.prototype.legend_bg = null;
Slider.prototype.i = 0;
Slider.prototype.sliderInterval = null;
Slider.prototype.slider_pics = ['../11.jpg', '../22.jpg', '../33.jpg'];
Slider.prototype.slider_div_id = 'lpm-slider';
Slider.prototype.sliderStart = function(){

	this.sliderInterval = setInterval(function(){

		// clear element
		$('#' + this.slider_div_id).empty();

		// creat / append / hide img
		var img = $(document.createElement('img'));

		if(this.i > slider_pics.length - 1)
			i = 0;
		var img_url = this.slider_pics[i++];
		img.attr('src', img_url);
		img.appendTo('#' + this.slider_div_id);
		img.hide();

		/*var event_block = $(document.createElement('div'));
		event_block.addClass('event_block');
		event_block.hover(hoverOnSlider, hoverOutSlider);
		event_block.appendTo('#' + slider_div_id);
		event_block.hide();*/
		
		this.legend_bg = $(document.createElement('div'));
		this.legend_bg.addClass('legend_bg');
		//legend_bg.appendTo('#' + slider_div_id);
		this.legend_bg.html('hello world, this is background');
		this.legend_bg.hide();
			
		var legend_label = $(document.createElement('div'));
		legend_label.addClass('legend_label');
		legend_label.appendTo('#' + this.slider_div_id);
		legend_label.hide();

		
		
		// effect switching
		// show img
		img.fadeIn('slow');  // effect timing
		this.legend_bg.fadeIn();
		legend_label.fadeIn();
		//event_block.fadeIn();
		
	}, 3 * 1000); // transmit timing

};


Slider.prototype.sliderStop = function(){
	clearInterval(this.sliderInterval);
};

Slider.prototype.sliderlegendResizeLarger = function(){
	this.legend_bg
		.animate({
		    height: 100
		}, 500, function() {
		    	// Animation complete.
		});
};

Slider.prototype.sliderlegendResizeSmaller = function(){
	this.legend_bg
		.delay(1000)
		.animate({
		    height: 30
		}, 500, function() {
		    // Animation complete.
		});
};

Slider.prototype.hoverOnSlider = function(){
	sliderStop();
	sliderlegendResizeLarger();
};

Slider.prototype.hoverOutSlider = function(){
	sliderStart();
	sliderlegendResizeSmaller();
};
