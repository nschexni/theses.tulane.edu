<div id="content">


	<div class="row">
		<div id="main_alert" class="alert offset1 span9">
			<?php echo validation_errors(); ?>
		</div>
	</div>


	 <?php echo form_open_multipart(); ?>
		<div class="row">
			<hr class="offset2 span1"><h2 class="span4">Step One: About Yourself</h2><hr class="span3">
			<div class="row">
				<div class="well offset2 span8">

					<label for="author_name"><strong>Your Name</strong></label>
					<input type="text" id="author_name" name="author_name" value="<?php echo set_value('author_name'); ?>" placeholder="Lastname, Firstname MI  (<?=$name?>)" class="span8">

					<label for="advisor"><strong>Advisor's Name</strong></label>
					<input type="text" id="advisor" name="advisor" value="<?php echo set_value('advisor'); ?>" placeholder="Lastname, Firstname (Turing, Alan)" class="span8">					

					<label for="school"><strong>Degree Granting School</strong></label>
					<select name="school" id="school" class="span6">
						<option value="" disabled selected> -- Select </option>
						<option value="Tulane University">Tulane University</option>
						<option value="Tulane College of Engineering">Tulane College of Engineering (Pre-2008)</option>
						<option value="School of Science and Engineering">School of Science and Engineering</option>
						<option value="School of Public Health and Tropical Medicine">School of Public Health and Tropical Medicine</option>
					</select>

					<label for="department"><strong>Department</strong> (Pick Up to 3)</label>
					<select name="department[]" id="department" class="span6" multiple>
						<option value="Biology">Biology</option>
						<option value="BioIndivatics">BioIndivatics</option>
						<option value="Bread Making">Bread Making</option>
						<option value="Cell Biology">Cell Biology</option>
						<option value="Cancer Research">Cancer Research</option>
					</select>

					<label for="graduate_date"><strong>Graduation Year</strong></label>
					<input type="text" id="graduate_date" name="graduate_date" value="<?php echo set_value('graduate_date'); ?>" placeholder="YYYY (2012)" class="span3">

				</div>
			</div>

			<br>
			<hr class="offset2 span1"><h2 class="span4">Step Two: About Your Project</h2><hr class="span3">
			<div class="row">
				<div class="well offset2 span8">
					<div class="row">
						<div class="span4">
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
						<div class="span4">
							<label for="degree_granted"><strong>Degree Granted</strong></label>
							<select name="degree_granted" id="degree_granted">
								<option value="" disabled selected> -- Select </option>
								<option value="PhD">Ph. D</option>
								<option value="Masters Degree">Masters Degree</option>
								<option value="Undergraduate Degree">Undergraduate Degree</option>
							</select>
						</div>
					</div>
					<br>

					<div class="row">
						<div class="span4">
							<label for="publication_year"><strong>Publication Year</strong></label>
							<input type="text" id="publication_year" name="publication_year" value="<?php echo set_value('publication_year'); ?>" placeholder="YYYY (2012)" class="span2">
						</div>
						<div class="span4">
							<label for="language"><strong>Primary Project Language</strong></label>
							<select name="language" id="language">
								<option value="" disabled selected> -- Select </option>
								<option value="English">English</option>
								<option value="Italian">Italian</option>
								<option value="French">French</option>
							</select>
						</div>
					</div>
					<br>

					<label for="project_title"><strong>Project Title</strong> (Capitalize only the first word and proper nouns)</label>
					<input type="text" id="project_title" name="project_title" value="<?php echo set_value('project_title'); ?>" placeholder="A formal theorem in Church's theory of types" class="span8">

					<label for="keywords"><strong>Project Keywords</strong> (Maximum 3)</label>
					<input type="text" id="keywords" name="keywords" value="<?php echo set_value('project_keywords'); ?>" placeholder="Comma separated list, ie: optics, linguistics, lasers" class="span8">

					<label for="abstract"><strong>Abstract</strong> (Optional)</label>
					<textarea name="abstract" id="abstract" class="span8" rows="4" placeholder="Paper abstract, maximum 400 words"></textarea>

				</div>
			</div>

			<br>
			<hr class="offset2 span1"><h2 class="span4">Step Three: Upload Your Paper</h2><hr class="span3">
			<div class="row">
				<div class="well offset2 span8">
					<div class="alert span7"><h4>Papers must be submitted in PDF divat</h4></div>
					<label for="file"><strong>Paper File</strong></label>
					<input class="input-file" id="file" name="file" type="file">
				</div>
			</div>

			<br>
			<hr class="offset2 span1"><h2 class="span4">Step Four: Copyright Terms</h2><hr class="span3">
			<div class="row">
				<div class="well offset2 span8">
					<textarea name="copyright_release" class="span8" rows="6" disabled>
1. GRANT OF RIGHTS.

You grant Tulane University, its successors and assigns a non-exclusive, worldwide, transferable, irrevocable, royalty-free license to (i) format the Paper for print and electronic display; and (ii) reproduce, distribute, and publicly display the Paper as part of a collective work in print or electronic format as part of the Tulane Digital Library. The foregoing license is for the term of copyright (and any extensions under any copyright laws now or later in force).

You also (i) grant Tulane University the right to use your name and your likeness and biographical information (if applicable) in connection with the Tulane Digital Library, and (ii) waive all rights generally known as moral rights in the Paper, to the extent they can be waived, under any existing or future law of any jurisdiction. You reserve all other rights in the Paper subject to the restrictions described in Section 3(A).

2. REPRESENTATIONS AND WARRANTIES. You represent and warrant the following:
A. 
you have full power and authority to make and perform your obligations under this Agreement;
you have the right to make the grant of rights to Tulane University in Section 1(A) (if applicable), and if the Paper
contains excerpts from other copyrighted material (including without limitation any diagrams, photographs,
figures or text), you have acquired in writing all necessary rights from third parties to include those materials in
the Paper, and have provided appropriate credit for those third-party material in footnotes or in a bibliography;

B.
all statements contained in the Paper purporting to be facts are true or supported by reasonable scientific
research;

C.
the Paper does not contain any defamatory or libelous material and does not infringe any third party’s patent,
copyright, trade secret or other proprietary rights and does not violate the right of privacy or publicity of any
third party or otherwise violate any other applicable law;

D.
if the Paper was produced in the course of your employment by or contractual relationship with the U.S.
Government and/or contains classified material, it has been cleared for public release through public affairs
channels, and you have indicated those approvals and clearances on the Paper;

E.

F.

the Paper is not subject to any prior claim, encumbrance or agreement and is not under consideration for
publication elsewhere; and

G.

you have cited in the acknowledgements all third parties who have participated significantly in the Paper’s
technical aspects.

AUTHOR OBLIGATIONS AND ACKNOWLEDGEMENTS.
A. You reserve all other rights in the Paper, including (if applicable) all patent rights in the Paper’s patentable
subject matter.

3.

If your Paper is accepted for Balisage, you or one of your co-authors will register and pay any applicable fees
for that conference and present the Paper to your fellow conference attendees.

B.

C.

You acknowledge that (i) all print and electronic copies of the Paper submitted to Tulane University become Tulane University’s
physical property regardless of whether the Paper is accepted for Balisage or published in the Proceedings; (ii)
you are responsible for ensuring the accuracy of your research and the Paper’s content; (iii) Tulane University is not
obligated to accept the Paper for Balisage or to publish your Paper; (iv) statements and opinions advanced in
your Paper are yours and not those of Tulane University; and (v) Tulane University is not responsible for any of your expenses
incurred in connection with preparing the Paper or attending meetings to present it, nor will Tulane University pay you
any financial compensation if it publishes your Paper.

Tulane University OBLIGATIONS. If Tulane University decides to accept the Paper for Balisage and/or publish the Paper in the
Proceedings, Tulane University will provide appropriate credit to the author(s) of the Paper in all copies of the Paper in any
format, but Tulane University’s failure to do so will not constitute a material breach of this Agreement. If Tulane University decides
not to accept or to publish your Paper, it will notify you in writing, which may be given by email. This Agreement,
including all of Tulane University’s rights in your Paper, terminates upon your receipt of that written notice, and you are

4.


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