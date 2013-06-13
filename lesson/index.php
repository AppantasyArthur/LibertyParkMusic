

<?php 

	$content = "

			<div id='content-title'>
					<div id='navi-block'>
						<div class='navi-style-past'>
							Piano&nbsp;>&nbsp;Course1&nbsp;>&nbsp;
						</div>
						<div class='navi-style'>Lesson 1</div>
					</div>
					<div id='main-title-block'>
						<div class='subject-level-beginner-block'>
							<div class='subject-level-beginner-block-text'>BEGINNER</div>
							<img class='subject-level-beginner-block-img' src='../img/crotchet_print_wh_1.png'>
						</div>
						<div class='main-title-style'>Piano</div>
					</div>
				</div>
				
				<div class='lesson-content-range'>
					<div class='lesson-left-block'>
						<div class='lesson-main-video'>
							<iframe src='http://player.vimeo.com/video/64570202?byline=0&amp;portrait=0&amp;badge=0' width='636' height='356' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
						<div class='lesson-description-block'>
							<div class='lesson-title'>Lesson 1</div>
							<div class='lesson-teacher'>Hung-Chang Wei</div>
							<div class='lesson-update-date'>2013.03.03</div>
							<div class='lesson-description'>In this lesson, you will learn about key signature for all keys, and the use of accidentals to after pitches. Major and minor modes will both be covered.</div>
						</div>
						<div class='lesson-file-block'>
							<div class='lesson-file-tabs'>
								<div class='lesson-file-tab lesson-file-tab-selected' onclick='loadHomeworks();'>
									<div class='lesson-file-tab-text'>Homework</div>
								</div>
								<div class='lesson-file-tab'>
									<div class='lesson-file-tab-text'>Share</div>
								</div>
								<div class='lesson-file-tab' onclick='showStudyNoteMode();'>
									<div class='lesson-file-tab-text'>Note</div>
								</div>
							</div>
							<div id='lesson-file-tab-content-anchor' class='lesson-file-tab-content'></div>
						</div>
						
						<div class='lesson-comment-block'>
							<div class='lesson-comment-block-title'>Comments</div>
							<div class='lesson-comment-input'>
								
								<div class='lesson-comment-input-user-img'></div>
								
								<div class='lesson-comment-input-text'>
									<div class='lesson-comment-input-text-area'><textarea id='lesson-comment-input-textarea' rows='4' cols='65'></textarea></div>
									<div class='lesson-comment-input-text-send' onclick='saveComment();'></div>
								</div>
								
							</div>
							<div id='lesson-comment-list-anchor' class='lesson-comment-list'>
							</div>
						</div>
					</div>
					
					<div class='lesson-right-block'>
						<div class='lesson-video-list'>
							<div class='lesson-sub-video-block'>
								<div class='lesson-sub-video'>
									<iframe src='http://player.vimeo.com/video/64570202?byline=0&amp;portrait=0&amp;badge=0' width='120' height='67' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
								</div>
								<div class='lesson-sub-video-description'>
									<div class='lesson-sub-video-name'>Lesson 2</div>
									<div class='lesson-sub-video-teacher'>Hung-Chang Wei</div>
									<div class='lesson-sub-video-date'>2013.03.03</div>
								</div>
							</div>
							<div class='lesson-sub-video-block'>
								<div class='lesson-sub-video'>
									<iframe src='http://player.vimeo.com/video/64570202?byline=0&amp;portrait=0&amp;badge=0' width='120' height='67' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
								</div>
								<div class='lesson-sub-video-description'>
									<div class='lesson-sub-video-name'>Lesson 2</div>
									<div class='lesson-sub-video-teacher'>Hung-Chang Wei</div>
									<div class='lesson-sub-video-date'>2013.03.03</div>
								</div>
							</div>
							<div class='lesson-sub-video-block'>
								<div class='lesson-sub-video'>
									<iframe src='http://player.vimeo.com/video/64570202?byline=0&amp;portrait=0&amp;badge=0' width='120' height='67' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
								</div>
								<div class='lesson-sub-video-description'>
									<div class='lesson-sub-video-name'>Lesson 2</div>
									<div class='lesson-sub-video-teacher'>Hung-Chang Wei</div>
									<div class='lesson-sub-video-date'>2013.03.03</div>
								</div>
							</div>
							<div class='lesson-sub-video-block'>
								<div class='lesson-sub-video'>
									<iframe src='http://player.vimeo.com/video/64570202?byline=0&amp;portrait=0&amp;badge=0' width='120' height='67' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
								</div>
								<div class='lesson-sub-video-description'>
									<div class='lesson-sub-video-name'>Lesson 2</div>
									<div class='lesson-sub-video-teacher'>Hung-Chang Wei</div>
									<div class='lesson-sub-video-date'>2013.03.03</div>
								</div>
							</div>
						</div>
						
						<div class='lesson-teacher-block'>
							<div class='lesson-teacher-img'></div>
							<div class='lesson-teacher-name'>Hung-Chang Wei</div>
							<div class='lesson-teacher-position'>Music Theory and Ear Training</div>
							<div class='lesson-teacher-description'>In this lesson, you will learn about key signature for all keys, and the use of accidentals to after pitches. Major and minor modes will both be covered.</div>
						</div>
						
						<div class='lesson-recommended-block'>
							<div class='lesson-recommended-block-title'>Recommended</div>
							<div class='lesson-sub-video'>
								<iframe src='http://player.vimeo.com/video/64570202?byline=0&amp;portrait=0&amp;badge=0' width='120' height='67' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							</div>
							<div class='lesson-sub-video-name'>Lesson 5</div>
							<div class='lesson-sub-video-teacher'>Hung-Chang Wei</div>
							<div class='lesson-sub-video-date'>2013.03.03</div>
						</div>
					</div>
					
				</div>	
			
	";
	
	$title = "Lesson";
	
	include_once '../lpm-template.php';

?>