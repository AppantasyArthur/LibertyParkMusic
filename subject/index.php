<?php 

	$content = "
				<div id='content-title'>
					<div id='navi-block'>
						<div class='navi-style'>
							Piano
						</div>
					</div>
					<div id='main-title-block'>
						<div class='subject-level-beginner-block'>
							<div class='subject-level-beginner-block-text'>BEGINNER</div>
							<img class='subject-level-beginner-block-img' src='crotchet_print_wh_1.png'>
						</div>
						<div class='main-title-style'>Piano</div>
					</div>
				</div>
				
				<div class='subject-content-range'>
				
					<div class='subject-course-label'>
						<img src='bookmark_unselect.png' id='course-id-1234' onclick='bookmarkCourse(this);'>
					</div>
					<div class='subject-course-content'>
						<div class='course-name'>Course 1</div><div class='course-brief'>key signature and accidentals</div>
						<div class='course-teacher-name'>Hung-Chang Wei</div>
						<div class='course-uploadtime'>2013.03.03</div><div class='course-isupdate'>updated!</div>
						<div class='course-topic'><span class='course-bold'>Topics</span>: Roman numeral analysis, triads, seventh chords</div>
						<div class='course-goal'><span class='course-bold'>Goal</span>: Student will be able to read music and locate pitches on the keyboard</div>
						<div class='course-reco-bg'><span class='course-bold'>Recommended background</span>: course 1, course 2, course 3</div>
						<div class='course-nextstep'><span class='course-bold'>Next Step</span>: course 3</div>
						<div class='course-les-blocks'>
							<div class='course-les-block'>
								<iframe src='http://player.vimeo.com/video/64570202?byline=0&amp;portrait=0&amp;badge=0' width='200' height='112' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							</div>
							<div class='course-les-block'>
								<iframe src='http://player.vimeo.com/video/64570202?byline=0&amp;portrait=0&amp;badge=0' width='200' height='112' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							</div>
							<div class='course-les-block'>
								<iframe src='http://player.vimeo.com/video/64570202?byline=0&amp;portrait=0&amp;badge=0' width='200' height='112' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							</div>
							<div class='course-les-block'>
								<iframe src='http://player.vimeo.com/video/64570202?byline=0&amp;portrait=0&amp;badge=0' width='200' height='112' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							</div>
						</div>
					</div>
					<div class='clear-float'></div>
					
					<div class='subject-course-label'>
						<img src='bookmark_selected.png' id='course-id-1234' onclick='bookmarkCourse(this);'>
					</div>
					<div class='subject-course-content'>
						<div class='course-name'>Course 1</div><div class='course-brief'>key signature and accidentals</div>
						<div class='course-teacher-name'>Hung-Chang Wei</div>
						<div class='course-uploadtime'>2013.03.03</div><div class='course-isupdate'>updated!</div>
						<div class='course-topic'><span class='course-bold'>Topics</span>: Roman numeral analysis, triads, seventh chords</div>
						<div class='course-goal'><span class='course-bold'>Goal</span>: Student will be able to read music and locate pitches on the keyboard</div>
						<div class='course-reco-bg'><span class='course-bold'>Recommended background</span>: course 1, course 2, course 3</div>
						<div class='course-nextstep'><span class='course-bold'>Next Step</span>: course 3</div>
						<div class='course-les-blocks'>
							<div class='course-les-block'>
								<iframe src='http://player.vimeo.com/video/64570202?byline=0&amp;portrait=0&amp;badge=0' width='200' height='112' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							</div>
							<div class='course-les-block'>
								<iframe src='http://player.vimeo.com/video/64570202?byline=0&amp;portrait=0&amp;badge=0' width='200' height='112' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							</div>
							<div class='course-les-block'>
								<iframe src='http://player.vimeo.com/video/64570202?byline=0&amp;portrait=0&amp;badge=0' width='200' height='112' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							</div>
							<div class='course-les-block'>
								<iframe src='http://player.vimeo.com/video/64570202?byline=0&amp;portrait=0&amp;badge=0' width='200' height='112' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							</div>
						</div>
					</div>
					<div class='clear-float'></div>
					
				</div><!-- subject-content-range -->		
			
	";
	
	$title = "Subject";
	
	include_once '../lpm-template.php';

?>

