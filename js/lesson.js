var Lesson = function(pars){
	
	var category = pars.category; // ex. guitar
	var level = pars.level; // ex. beginner
	var course = pars.course; // ex. Course 1, course name
	var lesson = pars.lesson; // ex. Lesson 1, lesson name
	
	this.setCategory = function(_category) { category = _category; } 
	this.getCategory = function() { return category; } 
	this.setLevel = function(_level) { level = _level; } 
	this.getLevel = function() { return level; } 
	this.setCourse = function(_course) { course = _course; } 
	this.getCourse = function() { return course; } 
	this.setLesson = function(_lesson) { lesson = _lesson; } 
	this.getLesson = function() { return lesson; } 
	
};

Lesson.prototype.loadHomeworks = function(){

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
	
};


// with php, remove !
Lesson.prototype.saveComment = function(){

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

};

Lesson.prototype.initStudyModeBackground = function(){

	var bodyHeight = $('body').height();
	
	var sModeBG =  $('#study-mode-background-anchor');
	sModeBG.height(bodyHeight);
	sModeBG.width('100%');
	sModeBG.css('z-index', '-100');
	sModeBG.css('position', 'absolute');
	
};

// with PHP code, Remove !
Lesson.prototype.sendNote = function(){

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

};

// with PHP code, Remove !
Lesson.prototype.showStudyNoteMode = function(){

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

};

//paging
Lesson.prototype.loadComments = function(){

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

};

Lesson.prototype.study_mode_hook; // =  $('#full-screen-hook');
Lesson.prototype.showStudyMode = function(homework_path){

	if(getAcrobatInfo().acrobat){
		
		//console.log('已安裝');

		var bodyHeight = $('body').height();
		
		this.study_mode_hook =  $('#full-screen-hook');
		this.study_mode_hook.show();
		this.study_mode_hook.height(bodyHeight);

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
	
};

Lesson.prototype.closeStudyMode = function(){
	this.study_mode_hook.hide();
};
