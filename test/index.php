<!doctype html>
<html>

<head>

	<meta charset='utf-8'>
	<title></title>
	
	<link rel="stylesheet" href="lpm-menu-2.css">
	
	<script src="../javascript/json2.js"></script>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
	<script type="text/javascript">

		var menu = {
			//length: 3,
			header: ['first', 'second', 'third'],
			data:{
				'first':['item_1', 'item_2'],
				'second':['item_1', 'item_2'],
				'third':['item_1', 'item_2']
			}
		};
	
		$(document).ready(function() {

			//var data = menu;
			
			for(var i = 0;i < menu.header.length;i++){

				console.log(JSON.stringify(menu.data[menu.header[i]], null, 4));
				
			}
			
			//console.log(JSON.stringify(data, null, 4));
			//console.log(JSON.stringify(data['second'], null, 4));

			/*var legend_label = $(document.createElement('div'));
			legend_label.addClass('legend_label');
			legend_label.appendTo('#' + slider_div_id);
			legend_label.hide();*/

			
		});
		
	</script>
</head>

<body>
	
	<div id='lpm-menu'></div>
	
</body>

</html>