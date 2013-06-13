<?php 

	$title = "Profile";

	$content = "

			<div id='profile-wrapper'>
				
					<div id='profile-form-show'>
						
						<div id='profile-photo'>
							<img id='profile-photo-img' src=''>
						</div>
						<div id='profile-name'>
							<div class='profile-label'>Name<!--<span class='profile-label-public'>&nbsp;(public)</span>--></div>
							<input type='text' class='profile-textinput' id='profile-name-first'><input type='text' class='profile-textinput' id='profile-name-last'>
						</div>
						<div id='profile-email'>
							<div class='profile-label'>Email</div>
							<input type='text' class='profile-textinput' id='profile-email-input'>
						</div>
						
						<div id='profile-birthday'>
							<div class='profile-label'>Birthday</div>
							<select class='profile-select-type' id='profile-birthday-month'></select>
							<select class='profile-select-type' id='profile-birthday-day'></select>
							<select class='profile-select-type' id='profile-birthday-year'></select>
						</div>
						<div id='profile-gender'>
							<div class='profile-label'>Gender</div>
							<select class='profile-select-type' id='profile-gender-input'>
								<option value='mr'>Mr.</option>
								<option value='ms'>Mis.</option>
							</select>
						</div>
						<div id='profile-interesting'>
							<div class='profile-label'>What would you like to learn ?</div>
							<input type='checkbox' name='profile-interesting-group' value='Piano'>Piano<br>
							<input type='checkbox' name='profile-interesting-group' value='Guitar'>Guitar<br>
							<input type='checkbox' name='profile-interesting-group' value='Violin'>Violin<br>
							<input type='checkbox' name='profile-interesting-group' value='Others'>Others&nbsp;<input type='text' class='profile-textinput' id='profile-interesting-others'><br>
						</div>
						<!-- <div id='profile-submit'>
							<input type='button' value='save update' class='profile-button-type' onclick='saveProfile();'>
						</div> -->
					</div>
					<div id='profile-title'>
						<div class='title-text'>Profile</div>
					</div>
				
				</div>
			
	";
	
	include_once '../lpm-template.php';

?>