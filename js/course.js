var Course = function(){};

// PHP code !
Course.prototype.saveCourse = function(){

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

};
