<?php 

	$content = "
		<div id='bk-navi-block'>
					<div class='bk-navi-style-select'>PIANO</div><div class='bk-navi-style-nonselect'>&nbsp;|&nbsp;<a class='bk-navi-style-link' href='../bookmark/?bkcat=guitar'>GUITAR</a>&nbsp;|&nbsp;<a class='bk-navi-style-link' href='../bookmark/?bkcat=theory'>THEORY</a></div>
				</div>
				<div id='bk-main-title-block'>
					<div class='bk-main-title-block-img'>
						<img src='bookmark_title.png'>
					</div>
					<div class='bk-main-title-block-text'>Bookmarks</div>
				</div>
				<div class='bk-list'>
					<div class='bk-block'>
						<div class='bk-block-title'>
							<div class='bk-block-title-text'>BEGINNER</div>
							<div class='bk-block-title-img'><img src='../img/crotchet_wh_1.png'></div>
						</div>
						<div class='bk-block-list'>
							<div class='bk-block-list-item'>
								<div class='bk-block-list-item-delete'><img src='remove_piano1.png'></div>
								<div class='bk-block-list-item-coursename'>Course 1</div>
							</div>
							<div class='bk-block-list-item'>
								<div class='bk-block-list-item-delete'><img src='remove_piano1.png'></div>
								<div class='bk-block-list-item-coursename'>Course 1</div>
							</div>
						</div>
					</div>
					<div class='bk-block'>
						<div class='bk-block-title piano-intermediate-bgcolor'>
							<div class='bk-block-title-text'>INTERMEDIATE</div>
							<div class='bk-block-title-img'><img src='../img/crotchet_wh_2.png'></div>
						</div>
						<div class='bk-block-list'>
							<div class='bk-block-list-item'>
								<div class='bk-block-list-item-delete'><img src='remove_piano2.png'></div>
								<div class='bk-block-list-item-coursename'>Course 8</div>
							</div>
						</div>
					</div>
				</div>		
	";
	
	$title = "Bookmark";
	
	include_once '../lpm-template.php';

?>