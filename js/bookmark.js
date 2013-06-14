var Bookmark = function(){
	
};

Bookmark.prototype.bookmarkCourse = function(ele){
	
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