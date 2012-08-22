<div id="content">
    
    <div class="validation_errors">
        <div id="main_alert">
                <?php echo validation_errors(); ?>
                <?php echo $form_error;?>
        </div>
    </div>
    
    <div id="td_submit_form_wrapper">    
        
        <!--Questions Floating Div-->
<!--        <div id="questions">
            <img src="<?= base_url(); ?>/assets/img/form/questions.png" />
            <ul>
                <li><h5>Contact Jeff Rubin</h5></li>
                <li><img src="<?= base_url(); ?>/assets/img/form/icon_phone.png" class="icon_phone" /><span style="margin-left: 10px;">(504) 247-1832 <span class="phone_hours">[M-F | 9am-5pm]</span></span></li>
                <li><span class="icon-envelope"><a href="mailto:jrubin6@tulane.edu"><span style="margin-left: 20px;">jrubin6@tulane.edu</span></a></span></li>
            </ul>
        </div>-->
        
        
	 <?=form_open_multipart('forms/td_submit');?>
		<fieldset>
                    <legend>Step One: About Yourself</legend>
                        <div id="required_statement">
             <img src="<?= base_url(); ?>/assets/img/common/required_star.gif" />   -  Indicates a required field.
        </div>
                    
                          
                    
                        <div class="span8" id="author_info">
                            <div class="span3">
                            <label for="last_name" class="required"><strong>Author's Last Name</strong></label>
                            <input  
                                class="span3"
                                type="text" 
                                id="last_name" 
                                name="last_name" 
                                value="<?=set_value('last_name');?>" 
                                placeholder="Enter Last Name"
                                required
                                />
                            </div>
                            
                            <div class="span3" >
                             <label for="first_name" class="required"><strong>Author's First Name</strong></label>
                             <input 
                                class="span3"
                                type="text" 
                                id="first_name" 
                                name="first_name" 
                                value="<?=set_value('first_name');?>" 
                                placeholder="Enter First Name"
                                required
                                />
                            </div>
                            
                            <div class="span1">
                             <label for="middle_initial"><strong>Initial</strong></label>
                             <input 
                                class="span1"
                                type="text" 
                                id="middle_initial" 
                                name="middle_initial" 
                                value="<?=set_value('middle_initial');?>" 
                                />
                            </div>
                        
                        
                         <div class="span3">
                             <label for="email" class="required"><strong>Author's Email Address</strong></label>
                            <input 
                                class="span3"
                                type="text" 
                                id="email" 
                                name="email" 
                                value="<?= set_value('email'); ?>" 
                                placeholder="you@tulane.edu"
                                required
                                >
                            </div>
                    
                        <div class="span3">        
                            <label for="degree_date" class="required"><strong>Degree Date (YYYY)</strong></label>
                            
                            <input type="text" 
                                   id="degree_date" 
                                   name="degree_date" 
                                   value="<?= set_value('degree_date'); ?>" 
                                   placeholder="YYYY (<?= date('Y') ?>)" 
                                   class="span2" 
                                   required
                            >
                           <div id="degree_date_error_msg" class="inform_error_msg"></div> 
                        </div> 
                      
                        
                            <div class="span7">
                                    <label for="degree_granted" class="required"><strong>Degree Granted</strong></label>
                                    <select name="degree_granted" id="degree_granted" required>
                                            <option value="" disabled selected> -- Select </option>
                                            <option <?php echo set_select('degree_granted', 'PhD'); ?> value="PhD" >Ph. D</option>
                                            <option <?php echo set_select('degree_granted', 'Masters Degree'); ?> value="Masters Degree">Masters Degree</option>
                                            <option <?php echo set_select('degree_granted', 'Undergraduate Degree'); ?> value="Undergraduate Degree">Undergraduate Degree</option>
                                    </select>
                            </div>
                        <div class="span8">    
                                <label for="school" class="required"><strong>Degree Granting School</strong></label>
                                <select name="school" id="school" class="span5" required>
                                        <option value="" disabled selected> -- Select </option>
                                        <option <?php echo set_select('school', 'Tulane School of Architecture'); ?> value="Tulane School of Architecture">Tulane School of Architecture</option>
                                        <option <?php echo set_select('school', 'A.B. Freeman School of Business'); ?> value="A.B. Freeman School of Business">A.B. Freeman School of Business</option>
                                        <option <?php echo set_select('school', 'School of Continuing Studies'); ?> value="School of Continuing Studies">School of Continuing Studies</option>
                                        <option <?php echo set_select('school', 'School of Law'); ?> value="School of Law">School of Law</option>
                                        <option <?php echo set_select('school', 'School of Liberal Arts'); ?> value="School of Liberal Arts">School of Liberal Arts</option>
                                        <option <?php echo set_select('school', 'School of Public Health & Tropical Medicine'); ?> value="School of Public Health & Tropical Medicine">School of Public Health &amp; Tropical Medicine</option>
                                        <option <?php echo set_select('school', 'School of Public Health and Tropical Medicine'); ?> value="School of Public Health and Tropical Medicine">School of Science & Engineering</option>
                                        <option <?php echo set_select('school', 'School of Medicine'); ?> value="School of Medicine">School of Medicine</option> 
                                        <option <?php echo set_select('school', 'School of Social Work'); ?> value="School of Social Work">School of Social Work</option>
                                </select>
                        </div>
                    
                        <div class="span3">
                            <label for="advisor_last_name" class="required">
                                <strong>Advisor's Last Name</strong>
                            </label>
                            <input type="text" 
                                   id="advisor_last_name" 
                                   name="advisor_last_name" 
                                   value="<?=set_value('advisor_last_name'); ?>" 
                                   placeholder="Enter Advisor's Last Name" 
                                   class="span3" 
                                   required
                             />					
                        </div>
                        
                        <div class="span3" >
                            <label for="advisor" class="required">
                                <strong>Advisor's First Name</strong>
                            </label>
                            <input type="text" 
                                   id="advisor_first_name" 
                                   name="advisor_first_name" 
                                   value="<?= set_value('advisor_first_name'); ?>" 
                                   placeholder="Enter Advisor's First Name" 
                                   class="span3" 
                                   required
                             />					
                        </div>
                    
                        <div class="span8">
                            <label for="department" class="required">
                                <strong>Department</strong>
                            </label>
                            
                            <select name="department" id="department" class="span5">
                             <option value="" disabled selected required>SELECT DEPARTMENT</option>                     
                                <optgroup label="- SCHOOL OF LIBERAL ARTS -">
                                    <option <?php echo set_select('department', 'American Studies'); ?> value="American Studies">American Studies</option>
                                    <option <?php echo set_select('department', 'Anthropology'); ?> value="Anthropology">Anthropology</option>
                                    <option <?php echo set_select('department', 'Art'); ?> value="Art">Art</option>
                                    <option <?php echo set_select('department', 'Asian Studies'); ?> value="Asian Studies">Asian Studies</option>
                                    <option  <?php echo set_select('department', 'Brazilian Studies'); ?>  value="Brazilian Studies">Brazilian Studies</option>
                                    <option  <?php echo set_select('department', 'Classical Studies'); ?> value="Classical Studies">Classical Studies</option>
                                    <option  <?php echo set_select('department', 'Cognitive Studies Program'); ?> value="Cognitive Studies Program">Cognitive Studies Program</option>
                                    <option  <?php echo set_select('department', 'Communication'); ?>  value="Communication">Communication</option>
                                    <option  <?php echo set_select('department', 'Cultural Studies'); ?>  value="Cultural Studies">Cultural Studies</option>
                                    <option  <?php echo set_select('department', 'Digital Media Production'); ?>  value="Digital Media Production">Digital Media Production</option>
                                    <option  <?php echo set_select('department', 'Economics'); ?>  value="Economics">Economics</option>
                                    <option  <?php echo set_select('department', 'English'); ?>  value="English">English</option>
                                    <option  <?php echo set_select('department', 'Environmental Studies Program'); ?>  value="Environmental Studies Program">Environmental Studies Program</option>
                                    <option  <?php echo set_select('department', 'Film Studies'); ?>  value="Film Studies">Film Studies</option>
                                    <option  <?php echo set_select('department', 'French and Italian'); ?>  value="French and Italian">French and Italian</option>
                                    <option  <?php echo set_select('department', 'Gender and Sexuality Studies'); ?>  value="Gender and Sexuality Studies">Gender and Sexuality Studies</option>
                                    <option  <?php echo set_select('department', 'Germanic and Slavic Studies'); ?>  value="Germanic and Slavic Studies">Germanic and Slavic Studies</option>
                                    <option  <?php echo set_select('department', 'History'); ?>  value="History">History</option>
                                    <option  <?php echo set_select('department', 'International Development'); ?>  value="International Development">International Development</option>
                                    <option  <?php echo set_select('department', 'Italian Studies'); ?>  value="Italian Studies">Italian Studies</option>
                                    <option  <?php echo set_select('department', 'Jewish Studies'); ?>  value="Jewish Studies">Jewish Studies</option>
                                    <option  <?php echo set_select('department', 'Latin American Studies'); ?>  value="Latin American Studies">Latin American Studies</option>
                                    <option  <?php echo set_select('department', 'Linguistics'); ?>  value="Linguistics">Linguistics</option>
                                    <option  <?php echo set_select('department', 'Medieval and Early Modern Studies'); ?>  value="Medieval and Early Modern Studies">Medieval and Early Modern Studies</option>
                                    <option  <?php echo set_select('department', 'Music'); ?>  value="Music">Music</option>
                                    <option  <?php echo set_select('department', 'Philosophy'); ?>  value="Philosophy">Philosophy</option>
                                    <option  <?php echo set_select('department', 'Political Economy'); ?>  value="Political Economy">Political Economy</option>
                                    <option  <?php echo set_select('department', 'Political Science'); ?>  value="Political Science">Political Science</option>
                                    <option  <?php echo set_select('department', 'Religious Studies'); ?>  value="Religious Studies">Religious Studies</option>
                                    <option  <?php echo set_select('department', 'Russian Studies'); ?>  value="Russian Studies">Russian Studies</option>
                                    <option  <?php echo set_select('department', 'Social Policy and Practice'); ?>  value="Social Policy and Practice">Social Policy and Practice</option>
                                    <option  <?php echo set_select('department', 'Sociology'); ?>  value="Sociology">Sociology</option>
                                    <option  <?php echo set_select('department', 'Spanish and Portuguese'); ?>  value="Spanish and Portuguese">Spanish and Portuguese</option>
                                    <option  <?php echo set_select('department', 'Teacher Preparation and Certification'); ?>  value="Teacher Preparation and Certification">Teacher Preparation and Certification</option>
                                    <option  <?php echo set_select('department', 'Theatre and Dance'); ?>  value="Theatre and Dance">Theatre and Dance</option>
                                    <option  <?php echo set_select('department', 'Urban Studies'); ?>  value="Urban Studies">Urban Studies</option>
                                    <option  <?php echo set_select('department', 'Gender and Sexuality Studies'); ?>  value="Gender and Sexuality Studies">Gender and Sexuality Studies</option>
                                </optgroup>
                                <br /><br />
                                <optgroup label="- SCHOOL OF SCIENCE & ENGINEERING-">
                                <br /><br />

                                <option  <?php echo set_select('department', 'Biological Chemistry Undergraduate Program'); ?>  value="Biological Chemistry Undergraduate Program">Biological Chemistry Undergraduate Program</option>
                                <option  <?php echo set_select('department', 'Biomedical Engineering'); ?>  value="Biomedical Engineering">Biomedical Engineering</option>
                                <option  <?php echo set_select('department', 'Cell and Molecular Biology'); ?>  value="Cell and Molecular Biology">Cell and Molecular Biology</option>
                                <option  <?php echo set_select('department', 'Chemical and Biomolecular Engineering'); ?>  value="Chemical and Biomolecular Engineering">Chemical and Biomolecular Engineering</option>
                                <option  <?php echo set_select('department', 'Chemistry'); ?>  value="Chemistry">Chemistry</option>
                                <option  <?php echo set_select('department', 'Earth and Environmental Sciences'); ?>  value="Earth and Environmental Sciences">Earth and Environmental Sciences</option>
                                <option  <?php echo set_select('department', 'Ecology and Evolutionary Biology'); ?>  value="Ecology and Evolutionary Biology">Ecology and Evolutionary Biology</option>
                                <option  <?php echo set_select('department', 'Environmental Science Program'); ?>  value="Environmental Science Program">Environmental Science Program</option>
                                <option  <?php echo set_select('department', 'Graduate Alliance for Education in Louisiana'); ?>  value="Graduate Alliance for Education in Louisiana">Graduate Alliance for Education in Louisiana</option>
                                <option  <?php echo set_select('department', 'Louis Stokes Louisiana Alliance for Minority Participation'); ?>  value="Louis Stokes Louisiana Alliance for Minority Participation">Louis Stokes Louisiana Alliance for Minority Participation</option>
                                <option  <?php echo set_select('department', 'Mathematics'); ?>  value="Mathematics">Mathematics</option>
                                <option  <?php echo set_select('department', 'Neuroscience'); ?>  value="Neuroscience">Neuroscience</option>
                                <option  <?php echo set_select('department', 'Physics and Engineering Physics'); ?>  value="Physics and Engineering Physics">Physics and Engineering Physics</option>
                                <option  <?php echo set_select('department', 'Psychology'); ?>  value="Psychology">Psychology</option>
                                <option  <?php echo set_select('department', 'Tulane Science Scholars Program'); ?>  value="Tulane Science Scholars Program">Tulane Science Scholars Program</option>
                                </optgroup>

                                <optgroup label="- SCHOOL OF ARCHITECTURE -">
                                <option  <?php echo set_select('department', 'Architecture'); ?>  value="Architecture">Architecture</option>
                                <option  <?php echo set_select('department', 'Preservation Studies'); ?>  value="Preservation Studies">Preservation Studies</option>
                                </optgroup>

                                <optgroup label="- A. B. FREEMAN SCHOOL OF BUSINESS -">

                                <option  <?php echo set_select('department', 'Accounting'); ?>  value="Accounting">Accounting</option>
                                <option  <?php echo set_select('department', 'Entrepreneurship'); ?>  value="Entrepreneurship">Entrepreneurship</option>
                                <option  <?php echo set_select('department', 'Finance'); ?>  value="Finance">Finance</option>
                                <option  <?php echo set_select('department', 'Investments and Trading'); ?>  value="Investments and Trading">Investments and Trading</option>
                                <option  <?php echo set_select('department', 'Legal Studies'); ?>  value="Legal Studies">Legal Studies</option>
                                <option  <?php echo set_select('department', 'Marketing'); ?>  value="Marketing">Marketing</option>
                                <option  <?php echo set_select('department', 'Strategy and Leadership'); ?>  value="Strategy and Leadership">Strategy and Leadership</option>
                                </optgroup>

                                <optgroup label="- SCHOOL OF LAW -">

                                <option  <?php echo set_select('department', 'JD Program'); ?>  value="JD Program">JD Program</option>
                                <option  <?php echo set_select('department', 'LLM and SJD Programs'); ?>  value="LLM and SJD Programs">LLM and SJD Programs</option>
                                </optgroup>

                                <optgroup label="- SCHOOL OF MEDICINE -">

                                <option  <?php echo set_select('department', 'Anesthesiology'); ?>  value="Anesthesiology">Anesthesiology</option>
                                <option  <?php echo set_select('department', 'Biochemistry'); ?>  value="Biochemistry">Biochemistry</option>
                                <option  <?php echo set_select('department', 'Biomedical Sciences Graduate Program'); ?>  value="Biomedical Sciences Graduate Program">Biomedical Sciences Graduate Program</option>
                                <option  <?php echo set_select('department', 'Family and Community Medicine'); ?>  value="Family and Community Medicine">Family and Community Medicine</option>
                                <option  <?php echo set_select('department', 'Human Genetics Graduate Programs'); ?>  value="Human Genetics Graduate Programs">Human Genetics Graduate Programs</option>
                                <option  <?php echo set_select('department', 'Internal Medicine'); ?>  value="Internal Medicine">Internal Medicine</option>
                                <option  <?php echo set_select('department', 'Microbiology and Immunology'); ?>  value="Microbiology and Immunology">Microbiology and Immunology</option>
                                <option  <?php echo set_select('department', 'Neurology'); ?>  value="Neurology">Neurology</option>
                                <option  <?php echo set_select('department', 'Neurosurgery'); ?>  value="Neurosurgery">Neurosurgery</option>
                                <option  <?php echo set_select('department', 'Obstetrics and Gynecology'); ?>  value="Obstetrics and Gynecology">Obstetrics and Gynecology</option>
                                <option  <?php echo set_select('department', 'Ophthalmology'); ?>  value="Ophthalmology">Ophthalmology</option>
                                <option  <?php echo set_select('department', 'Orthopaedic Surgery'); ?>  value="Orthopaedic Surgery">Orthopaedic Surgery</option>
                                <option  <?php echo set_select('department', 'Otolaryngology'); ?>  value="Otolaryngology">Otolaryngology</option>
                                <option  <?php echo set_select('department', 'Pathology and Laboratory Medicine'); ?>  value="Pathology and Laboratory Medicine">Pathology and Laboratory Medicine</option>
                                <option  <?php echo set_select('department', 'Pediatrics'); ?>  value="Pediatrics">Pediatrics</option>
                                <option  <?php echo set_select('department', 'Pharmacology'); ?>  value="Pharmacology">Pharmacology</option>
                                <option  <?php echo set_select('department', 'Physiology'); ?>  value="Physiology">Physiology</option>
                                <option  <?php echo set_select('department', 'Psychiatry'); ?>  value="Psychiatry">Psychiatry</option>
                                <option  <?php echo set_select('department', 'Radiology'); ?>  value="Radiology">Radiology</option>
                                <option  <?php echo set_select('department', 'Structural and Cellular Biology'); ?>  value="Structural and Cellular Biology">Structural and Cellular Biology</option>
                                <option  <?php echo set_select('department', 'Surgery'); ?>  value="Surgery">Surgery</option>
                                <option  <?php echo set_select('department', 'Urology'); ?>  value="Urology">Urology</option>


                                </optgroup>

                                <optgroup label="- SCHOOL OF PUBLIC HEALTH & TROPICAL MEDICINE -">

                                <option  <?php echo set_select('department', 'Biostatistics'); ?>  value="Biostatistics">Biostatistics</option>
                                <option  <?php echo set_select('department', 'Community Health Sciences'); ?>  value="Community Health Sciences">Community Health Sciences</option>
                                <option  <?php echo set_select('department', 'Environmental Health Sciences'); ?>  value="Environmental Health Sciences">Environmental Health Sciences</option>
                                <option  <?php echo set_select('department', 'Epidemiology'); ?>  value="Epidemiology">Epidemiology</option>
                                <option  <?php echo set_select('department', 'Global Health Systems and Development'); ?>  value="Global Health Systems and Development">Global Health Systems and Development</option>
                                <option  <?php echo set_select('department', 'Health Systems Management'); ?>  value="Health Systems Management">Health Systems Management</option>
                                <option  <?php echo set_select('department', 'International Health and Development'); ?>  value="International Health and Development">International Health and Development</option>
                                <option  <?php echo set_select('department', 'Tropical Medicine'); ?>  value="Tropical Medicine">Tropical Medicine</option>
                                </optgroup>


                                <optgroup label="- SCHOOL OF SOCIAL WORK -">

                                <option  <?php echo set_select('department', 'Master of Social Work'); ?>  value="Master of Social Work">Master of Social Work</option>
                                <option  <?php echo set_select('department', 'Clinical-Community Concentration'); ?>  value="Clinical-Community Concentration">Clinical-Community Concentration</option>
                                <option  <?php echo set_select('department', 'MSW/MPH'); ?>  value="MSW/MPH">MSW/MPH</option>
                                <option  <?php echo set_select('department', 'MSW/JD'); ?>  value="MSW/JD">MSW/JD</option>
                                <option  <?php echo set_select('department', 'Disaster Mental Health Certificate'); ?>  value="Disaster Mental Health Certificate">Disaster Mental Health Certificate</option>
                                <option  <?php echo set_select('department', 'Gerontology Certificate'); ?>  value="Gerontology Certificate">Gerontology Certificate</option>
                                <option  <?php echo set_select('department', 'International Social Work Certificate'); ?>  value="International Social Work Certificate">International Social Work Certificate</option>
                                <option  <?php echo set_select('department', 'Social Policy and Practice Undergraduate Coordinate Major'); ?>  value="Social Policy and Practice Undergraduate Coordinate Major">Social Policy and Practice Undergraduate Coordinate Major</option>
                                </optgroup>

                                <optgroup label="- MURPHY INSTITUTE -">
                                <option  <?php echo set_select('department', 'Political Economy'); ?>  value="Political Economy">Political Economy</option>
                                <option  <?php echo set_select('department', 'Institute of Economic and Political Studies Study Abroad Program in England'); ?>  value="Institute of Economic and Political Studies Study Abroad Program in England">Institute of Economic and Political Studies Study Abroad Program in England</option>
                                <option  <?php echo set_select('department', 'Center for Ethics and Public Affairs'); ?>  value="Center for Ethics and Public Affairs">Center for Ethics and Public Affairs</option>
                                </optgroup>

                                <optgroup label="- INSTITUTE -">
                                <option  <?php echo set_select('department', 'H. SOPHIE NEWCOMB MEMORIAL COLLEGE INSTITUTE'); ?>  value="H. SOPHIE NEWCOMB MEMORIAL COLLEGE INSTITUTE">H. SOPHIE NEWCOMB MEMORIAL COLLEGE INSTITUTE</option>
                                <option  <?php echo set_select('department', 'STONE CENTER FOR LATIN AMERICAN STUDIES'); ?>  value="STONE CENTER FOR LATIN AMERICAN STUDIES">STONE CENTER FOR LATIN AMERICAN STUDIES</option>
                                <option  <?php echo set_select('department', 'PAYSON CENTER FOR INTERNATIONAL DEVELOPMENT AND TECHNOLOGY TRANSFER'); ?>  value="PAYSON CENTER FOR INTERNATIONAL DEVELOPMENT AND TECHNOLOGY TRANSFER">PAYSON CENTER FOR INTERNATIONAL DEVELOPMENT AND TECHNOLOGY TRANSFER</option>
                                <option  <?php echo set_select('department', 'NEWCOMB-TULANE COLLEGE'); ?>  value="NEWCOMB-TULANE COLLEGE">NEWCOMB-TULANE COLLEGE</option>
                                </optgroup>




                            </select>
                        </div> 
                    </div>        
                </fieldset>
                        
                

                <fieldset>
                    <legend>Step Two: About Your Thesis/Dissertation</legend>
                    
                    
                        <div class="span8">
                            <label for="title" class="required"><strong>Title</strong> *[Capitalize the first letter of the first word and proper nouns]</label>
                            <input type="text" id="title" name="title" value="<?php echo set_value('title'); ?>" placeholder="A formal theorem in Church's theory of types" class="span7" required/>
                        </div>
                    
                        <div class="span4">
                            <label for="document_type"  class="required"><strong>Document Type</strong></label>
                            <select name="document_type" id="document_type" required>
                                    <option value="" disabled selected> -- Select -- </option>
                                    <option <?= set_select('document_type','Dissertation'); ?> value="Dissertation">Dissertation</option>
                                    <option <?= set_select('document_type','Thesis'); ?> value="Thesis">Thesis</option>
                            </select>	
                        </div>
                        
                        <div class="span8">	

                            <label for="keywords" class="required"><strong>Keywords</strong> *[Maximum 3. Comma separated.]</label>
                            <input type="text" id="keywords" name="keywords" value="<?= set_value('keywords'); ?>" placeholder="Comma separated list, ie: optics, linguistics, lasers" class="span7" required>

                            <label for="abstract"><strong>Abstract</strong> *[Optional]</label>
                            <textarea name="abstract" id="abstract" class="span7" rows="4" placeholder="Paper abstract, maximum 400 words"><?=set_value('abstract');?></textarea>
                        </div>
                    
                    
                        <div class="span8 nopad">
                            <div class="span3">
                                <label for="language" class="required"><strong>Primary Language</strong></label>
                                <select name="language" id="language" required>
                                        <option value="" disabled selected> -- Select </option>
                                        <option <?= set_select('language', 'English'); ?>  value="English">English</option>
                                        <option <?= set_select('language', 'French'); ?> value="French">French</option>
                                        <option <?= set_select('language', 'German'); ?> value="German">German</option>
                                        <option <?= set_select('language', 'Italian'); ?> value="Italian">Italian</option>
                                        <option <?= set_select('language', 'Italian'); ?> value="Portuguese">Portuguese</option>
                                        <option <?= set_select('language', 'Spanish'); ?> value="Spanish">Spanish</option> 
                                </select>
                            </div>
		</fieldset>
        
                <fieldset>
			<legend>Step Three: Upload Your Paper</legend>
     
                        <img src="<?=base_url()?>assets/img/icons/pdf_white.png" align="left" width="150px" height="150px" class="pdf_image"/>
                            <span class="pdf_text">Papers Must  be in PDF Format!</span>
                            <span class="pdf_creation_help">Not sure how to convert your document into PDF format? Our <a href="<?=base_url()?>assets/doc/Tulane_PDF_Creation_Guide.pdf" target="_blank"><strong>PDF Creation Guide</strong></a> can help! </span>
                            <div class="upload_field">    
                                <input 
                                    class="input-file" 
                                    id="userfile" 
                                    name="userfile" 
                                    type="file" 
                                    required 
                                />
                                <span style="float:left; padding-right: 5px;"><img src="<?=base_url()?>assets/img/common/required_star.gif" /></span>
                            </div>
                </fieldset>
        
                <fieldset>
			<legend>Step Four: Copyright Permission Agreement</legend>
<textarea readonly name="copyright_release" cols="30" rows="10" class="span7" style="margin:5px 0 10px 20px; height:300px;">
I warrant that I have the authority to act on any copyright related matters for the attached thesis or dissertation to be deposited in the Tulane University Digital Library for Thesis and Dissertations and as such have the right to grant permission to digitize, republish and use the said work in all media now known or hereafter devised. 

I grant to the Tulane University Archives the nonexclusive worldwide rights to digitize, preserve, publish, exhibit, and use the work in any way that furthers the educational, research and public service purposes of the Tulane University Archives and Tulane University.

NOTICE OF ORIGINAL WORK AND USE OF COPYRIGHT PROTECTED MATERIALS:
If your work includes images, videos, music, data sets, or other accompanying material that is not original work by you, you must include permissions from original content provider in order to have the material included in the electronic Thesis and Dissertation repository. If your work includes interviews, you must include a statement that you have permission from the interviewees to make their interviews public. For information about obtaining permissions and sample forms contact the Tulane University Archivist.

This Agreement shall be governed by and interpreted in accordance with the laws of the State of Louisiana. This Agreement expresses the complete understanding of the parties with respect to the subject matter and supersedes all prior representations and understandings.

</textarea>
           
                        <div class="span6" style="margin:5px 5px 15px 25px">    
                            <label class="checkbox" class="required">
                                <input type="checkbox" 
                                	id="copyright_release" 
                                        name="copyright_release" 
                                        value="1" 
                                        <?php echo set_checkbox('copyright_release','1'); ?> 
                                        style="margin-right:10px;" 
                                        required
                                >
                                <img src="<?= base_url(); ?>/assets/img/common/required_star.gif" /> I Agree to the Above Terms
                            </label>
                        </div>    

                        <div class="span6">
                            <label for="digital_signature"  class="required"><strong>Digital Signature</strong></label>
                            <input type="text" id="digital_signature" name="digital_signature" value="<?php echo set_value('digital_signature'); ?>" placeholder="Type in your full name here" class="span4" required>
                        </div>
                       
                        <div class="span6" style="margin:5px 0 20px 20px;">
                            <button type="submit" value="submit" id="submit">
                                Submit to the Digital Library
                            </button>
                        </div>    
                </fieldset>
        <?=form_close();?>
     
    </div>
</div>    


<?php 
   require_once 'application/models/submit_td_validations.php';
?>