lpm.Home = function(){};

lpm.Home.prototype.buildAdvs = function(){

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
	
};
