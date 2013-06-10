<?php 

	$content = "

				<div class='course-area'>
				
					<div id='subject-headline'>
						<div id='subject-navbar'>
							<div id='subject-navbar-text'>PIANO > course 1 > lesson 1</div>
						</div>
						<div id='subject-heade'>
							<div id='subject-heade-text'>PIANO</div>
						</div>
					</div>
					
				</div>
				<div class='lesson-level-block'>
					<div id='subject-level-title'>
						BEGINNER
					</div>
					
					<div class='lesson-block'>
					
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
									<div class='lesson-file-tab' onclick='loadHomeworks();'>Homework</div>
									<div class='lesson-file-tab'>Share</div>
									<div class='lesson-file-tab' onclick='showStudyNoteMode();'>Note</div>
								</div>
								<div id='lesson-file-tab-content-anchor' class='lesson-file-tab-content'></div>
							</div>
							
							<div class='lesson-comment-block'>
								
								<div class='lesson-comment-input'>
									<div class='lesson-comment-input-user-img'></div>
									<div class='lesson-comment-input-text'>
										<textarea id='lesson-comment-input-textarea' rows='4' cols='65'></textarea>
										<div class='lesson-comment-input-text-send' onclick='saveComment();'></div>
									</div>
									
								</div>
								<div id='lesson-comment-list-anchor' class='lesson-comment-list'></div>
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
								<div class='lesson-teacher-position'></div>
								<div class='lesson-teacher-description'>In this lesson, you will learn about key signature for all keys, and the use of accidentals to after pitches. Major and minor modes will both be covered.</div>
							</div>
							
							<div class='lesson-recommended-block'>
								<div class='lesson-sub-video'>
									<iframe src='http://player.vimeo.com/video/64570202?byline=0&amp;portrait=0&amp;badge=0' width='120' height='67' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
								</div>
								<div class='lesson-sub-video-name'>Lesson 5</div>
								<div class='lesson-sub-video-teacher'>Hung-Chang Wei</div>
								<div class='lesson-sub-video-date'>2013.03.03</div>
							</div>
						</div>
					
						
					</div> <!-- lesson-block -->
					
				</div> <!-- lesson-level-block -->
			
	";
	
	$title = "Lesson";
	
	include_once '../lpm-template.php';

?>