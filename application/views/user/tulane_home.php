<div class="container body">
	
	<div id="mast_header">
		<a href="/" title="Home" rel="home" id="logo">
			<img src="/tdl/assets/img/tu_digi_banner.png" alt="Home" id="HTML_Image_Map" usemap="#HTML_Image_Map">
		</a>
		<map name="HTML_Image_Map" id="HTML_Image_Map">
			<area shape="rect" coords="206,14,418,93" href="/" title="Home" alt="Home">
			<area shape="rect" coords="0,0,196,104" href="http://tulane.edu" title="Tulane University Homepage" alt="Tulane University Homepage">
		</map>
	</div>

	
	<div class="well small-well nomargin noround row" >
		<span id="hours" class="span4">
			Today's Hours: 9:00 AM - 9:45 PM  | 
			<a href="#calendar"><i class="icon-calendar"></i> Calendar</a>
		</span>
		<span id="site_search" class="offset4 span3">
			<form class="inline-form">
				<input id="site_search" type="text" class="search-query span2 right" placeholder="Search this website...">
				<button class="btn"><i class="icon-search"></i></button>
			</form>
		</span>
	</div>
	

	<div class="navbar nomargin noround">
		<div class="navbar-inner noround">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
          		</a>
				<div class="nav-collapse">
					<ul class="nav">
	  					<li class="active">
	    					<a href="#">Find Something</a>
	  					</li>
	  					<li><a href="#">Instruction</a></li>
	  					<li><a href="#">Data Management</a></li>
	  					<li><a href="#">About The Library</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="content">
		<div class="row">
			<div id="main_alert" class="alert offset1 span9 hide">
				All fields are required.
			</div>
		</div>

		<form method="POST" action="/tdl/form/submit">
			<div class="row">
				<hr class="offset2 span1"><h2 class="span4">Step One: About Yourself</h2><hr class="span3">
				<div class="row">
					<div class="well offset2 span8">
						<label for="author_name"><strong>Your Name</strong></label>
						<input type="text" id="author_name" name="author_name" value="" placeholder="Lastname, Firstname MI  (Smith, John Q)" class="span8">

						<label for="advisor"><strong>Advisor's Name</strong></label>
						<input type="text" id="advisor" name="advisor" value="" placeholder="Lastname, Firstname (Turing, Alan)" class="span8">					

						<label for="school"><strong>Degree Granting School</strong></label>
						<select name="school" id="school" class="span6">
							<option value="" disabled selected> -- Select </option>
							<option value="Tulane University">Tulane University</option>
							<option value="Tulane College of Engineering">Tulane College of Engineering (Pre-2008)</option>
							<option value="School of Science and Engineering">School of Science and Engineering</option>
							<option value="School of Public Health and Tropical Medicine">School of Public Health and Tropical Medicine</option>
						</select>

						<label for="department"><strong>Department (Pick Up to 3)</strong></label>
						<select name="department" id="department" class="span6" multiple>
							<option value="Biology">Biology</option>
							<option value="BioIndivatics">BioIndivatics</option>
							<option value="Bread Making">Bread Making</option>
							<option value="Cell Biology">Cell Biology</option>
							<option value="Cancer Research">Cancer Research</option>
						</select>

						<label for="graduate_date"><strong>Graduation Year</strong></label>
						<input type="text" id="graduate_date" name="graduate_date" value="" placeholder="YYYY (2012)" class="span3">

					</div>
				</div>

				<br>
				<hr class="offset2 span1"><h2 class="span4">Step Two: About Your Project</h2><hr class="span3">
				<div class="row">
					<div class="well offset2 span8">
						<div class="row">
							<div class="span3">
								<label for="project_type"><strong>Project Type</strong></label>
								<select name="project_type" id="project_type">
									<option value="" disabled selected> -- Select </option>
									<option value="Dissertation">Dissertation</option>
									<option value="Masters Thesis">Masters Thesis</option>
									<option value="Architecture Thesis">Architecture Portfolio</option>
									<option value="Honors Thesis">Undergraduate Honors Thesis</option>
									<option value="MFA">MFA Project</option>
								</select>	
							</div>
							<div class="span3">
								<label for="degree_granted"><strong>Degree Granted</strong></label>
								<select name="degree_granted" id="degree_granted">
									<option value="" disabled selected> -- Select </option>
									<option value="PhD">Ph. D</option>
									<option value="Masters Thesis">Masters Degree</option>
									<option value="Honors Thesis">Undergraduate Degree</option>
								</select>
							</div>
							<div class="span2">
								<label for="publication_year"><strong>Publication Date</strong></label>
								<input type="text" id="publication_year" name="publication_year" value="" placeholder="YYYY (2012)" class="span2">
							</div>
						</div>

						<br/>

						<label for="project_title"><strong>Project Title (Capitalize only the first word and proper nouns)</strong></label>
						<input type="text" id="project_title" name="project_title" value="" placeholder="A dival theorem in Church's theory of types" class="span8">

						<label for="keywords"><strong>Project Keywords (Maximum 3)</strong></label>
						<input type="text" id="keywords" name="keywords" value="" placeholder="Comma separated list, ie: optics, linguistics, lasers" class="span8">

						<label for="abstract"><strong>Abstract</strong></label>
						<textarea name="abstract" id="abstract" class="span8" rows="4" placeholder="Paper abstract, maximum 400 words"></textarea>

					</div>
				</div>

				<br>
				<hr class="offset2 span1"><h2 class="span4">Step Three: Upload Your Paper</h2><hr class="span3">
				<div class="row">
					<div class="well offset2 span8">
						<div class="alert span7"><h4>Papers must be submitted in PDF divat</h4></div>
						<label for="file"><strong>Paper File</strong></label>
						<input class="input-file" id="file" type="file">
					</div>
				</div>

				<br>
				<hr class="offset2 span1"><h2 class="span4">Step Four: Copyright Terms</h2><hr class="span3">
				<div class="row">
					<div class="well offset2 span8">
						<textarea name="copyright_release" class="span8" rows="6" disabled>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</textarea>

						<br><br>
						<label class="checkbox">
							<input type="checkbox" id="copyright_release" name="copyright_release" value="true">
							<h4>I agree to the above terms</h4>
						</label>

						<br>
						<label for="digital_signature"><strong>Digital Signature</strong></label>
						<input type="text" id="digital_signature" name="digital_signature" value="" placeholder="Type in your full name here" class="span8">
					</div>
				</div>
			</div>

			<br>
			<div class="row">
				<button type="submit" class="btn btn-primary offset2 span8" value="submit" id="submit"><h3>Submit Paper to the Digital Library</h3></button>
			</div>
			<br>
		</form>

	</div>

	<div id="footer" class="row well small-well noround nomargin grey">

		<div class="offset8 span4">
			<ul>
				<li><a href="#" title="">Tulane Home</a></li>
				<li><a href="#" title="Copyright">Copyright</a></li>
				<li><a href="#" title="Feedback">Feedback</a></li>
				<li><a href="#" title="Privacy">Privacy</a></li>
			</ul>
		</div>

	</div>

</div>

<div class="container" style="text-align: center; color: white;margin-top: 12px; margin-bottom: 25px">
	© 2010 Howard-Tilton Memorial Library, Tulane University  |  7001 Freret St., New Orleans, LA 70118  |  (504) 865-5605  |  Email Us
</div>