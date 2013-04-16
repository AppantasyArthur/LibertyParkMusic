<!doctype html>
<html>

<head>

	<meta charset='utf-8'>
	<title></title>
	
	<link rel="stylesheet" href="../css/lpm-reset.css">
	<link rel="stylesheet" href="lpm-menu-2.css">
	
	<script src="../javascript/json2.js"></script>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
	<script type="text/javascript">

		var menu = [
			['first', 'item_11 item_11 item_11 item_11 item_11 item_11 ', 'item_12'],
			['second', 'item_21', 'item_22'],
			['third', 'item_31', 'item_32']
		];
	
		$(document).ready(function() {

			var menu_div_id = 'lpm-menu';
			for(var i = 0;i < menu.length;i++){

				var menu_item = $(document.createElement('ul'));
				menu_item.appendTo('#' + menu_div_id);
				menu_item.addClass('menu-item');

				for(var j = 0;j < menu[i].length;j++){

					var menu_subitem = $(document.createElement('li'));
					menu_subitem.appendTo(menu_item);
					
					if(j == 0){ // parent
						menu_subitem.addClass('menu-parent');
						menu_subitem.html('<div class=\'menu-parent-text\'>' + menu[i][j] + '</div>');
					}else{ // child
						menu_subitem.addClass('menu-child');
						menu_subitem.html('<div class=\'menu-child-text\'>' + menu[i][j] + '</div>');
					}
					
				}
				
			}

		});
		
	</script>
</head>

<body>
	
	<div id='lpm-menu'></div>
	
</body>

</html>