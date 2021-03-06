    <div id ="content_wrapper">
            <p class="etd_desc">
                The <strong>Theses &amp; Dissertations Archive</strong> allows for the submission and accessing of theses &amp; dissertations at Tulane University.  
            </p>
            
            <div id="tdl_search_area">
            
                <div class="tdl_search_form">

                    <div id="tdl_hp_search_everything">
                        <form action="http://louisdl.louislibraries.org/cdm4/results.php"
                          name="simplesearchform" 
                          method="get" 
                          name="displayCheckboxResults"
                          onsubmit="javascript:if(document.simplesearchform.CISOBOX1.value==''){alert('Enter a valid search term.');return false;}else{dmTextCookie(document.simplesearchform.CISOBOX1);return true;}"
                          target="_blank"
                          >  
                            <label>Search Theses &amp; Dissertations:</label>  
                                <input type="hidden" name="CISOOP1" value="any" />
                                <input type="hidden" name="CISOFIELD1" value="CISOSEARCHALL"/>
                                <input type="hidden" name="CISORESTMP" value="results.php"/>
                                <input type="hidden" name="CISOVIEWTMP" value="item_viewer.php"/>
                                <input type="hidden" name="CISOMODE" value="grid" />
                                <input type="hidden" name="CISOSORT" value="date|r" />
                                <input type="hidden" name="CISOGRID" value="thumbnail,A,1;title,A,1;creato,A,0;date,A,0;descri,200,0;100;date,creato,none,none,none" />
                                <input type="hidden" name="CISOBIB" value="discla,A,1,N;link,A,0,N;title,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none" />
                                <input type="hidden" name="CISOTHUMB" value="20%20(4x5);title,none,none,none,none" />
                                <input type="hidden" name="CISOTITLE" value="20;title,none,none,none,none" />
                                <input type="hidden" name="CISOHIERA" value="20;creato,title,none,none,none" />
                                <input type="hidden" name="CISOSUPPRESS" value="0"/>
                                <input type="text" onfocus="this.value='';" name="CISOBOX1" class="search_all_etd" placeholder="Search Theses &amp; Dissertations" />
                                <input type="hidden" name="CISOROOT" value="/p16313coll12"/>
                                <input type="submit" value="Search" class="tdl_standard_submit" 
                                       onmouseover="this.style.color='#d98a00';"
                                       onmouseout="this.style.color='#224568';" 
                                />
                        </form>
                    </div>

                    <div id="tdl_search_form_browse_line">
                        <div class="tdl_hp_browse">
                            <form action="http://louisdl.louislibraries.org/cdm/search/collection/p16313coll12"
                              name="browse" 
                              method="get" 
                              name="displayCheckboxResults"
                              target="_blank"
                              >         
                                <input type="submit" value="Browse Our Collection" class="tdl_standard_submit" 
                                       onmouseover="this.style.color='#d98a00';"
                                       onmouseout="this.style.color='#224568';" 
                                />
                            </form>      
                        </div>
                    </div>

                </div>
                 
                
              <div class="tdl_search_area_schools_list">
                <div class="school_list_column">
                    <ul>
                         <a href="<?=$tulane?>" target="_blank"
                            onmouseover="document.tulane.src='<?=base_url()?>assets/img/icons/ttd_icon_tulane_hover.png'"
                             onmouseout="document.tulane.src='<?=base_url()?>assets/img/icons/ttd_icon_tulane.png'">     
                            <li>
                                <img name="tulane" src="<?=base_url()?>assets/img/icons/ttd_icon_tulane.png" class="dept_icon" />
                                <h3 class="one_line">Tulane University</h3>   
                            </li>
                        </a>
                   
                        <a href="<?=$tropical?>" target="_blank"
                            onmouseover="document.tropical.src='<?=base_url()?>assets/img/icons/ttd_icon_tropical_hover.png'"
                                onmouseout="document.tropical.src='<?=base_url()?>assets/img/icons/ttd_icon_tropical.png'"> 
                            <li>
                                <img name="tropical" src="<?=base_url()?>assets/img/icons/ttd_icon_tropical.png" class="dept_icon" />
                                <h3>School of Public Health and Tropical Medicine</h3>    
                            </li>
                        </a>      
                        
                        <a href="<?=$science?>" target="_blank" 
                            onmouseover="document.science.src='<?=base_url()?>assets/img/icons/ttd_icon_science_hover.png'"
                            onmouseout="document.science.src='<?=base_url()?>assets/img/icons/ttd_icon_science.png'"> 
                            <li>
                                <img name="science" src="<?=base_url()?>assets/img/icons/ttd_icon_science.png" class="dept_icon" />
                                <h3>School of Science and Engineering</h3>    
                            </li>
                       </a>    

                    <li>    
                        <img name="business" src="<?=base_url()?>assets/img/icons/ttd_icon_business.png" class="dept_icon" />
                        <h3>A.B. Freeman School of Business</h3>    
                    </li>

                    <li>
                        <img name="continuing" src="<?=base_url()?>assets/img/icons/ttd_icon_continuing.png" class="dept_icon" />
                        <h3>School of Continuing Studies</h3>    
                    </li>

                    <li>
                        <img name="law" src="<?=base_url()?>assets/img/icons/ttd_icon_law.png" class="dept_icon" />
                        <h3 class="one_line">School of Law</h3>    
                    </li>
                   
                </ul>
                </div>
                
                <div class="school_list_column">
                    <ul>
                    <a href="<?=$payson?>" target="_blank"
                    onmouseover="document.payson.src='<?=base_url()?>assets/img/icons/ttd_icon_payson_hover.png'"
                        onmouseout="document.payson.src='<?=base_url()?>assets/img/icons/ttd_icon_payson.png'"> 
                        <li>
                            <img name="payson" src="<?=base_url()?>assets/img/icons/ttd_icon_payson.png" class="dept_icon" />
                            <h3>Payson Center for International Development</h3>    
                        </li>
                    </a>   
                     
                        
                   <a href="<?=$engineering?>" target="_blank" 
                            onmouseover="document.engineering.src='<?=base_url()?>assets/img/icons/ttd_icon_engineering_hover.png'"
                            onmouseout="document.engineering.src='<?=base_url()?>assets/img/icons/ttd_icon_engineering.png'">     
                        <li>
                            <img name="engineering" src="<?=base_url()?>assets/img/icons/ttd_icon_engineering.png" class="dept_icon" />
                            <h3>Tulane School of Engineering <span class="prior">(1998 - Prior)</span></h3>    
                        </li>
                    </a>       
                        
                    
                     <a href="<?=$social?>" target="_blank"
                        onmouseover="document.social.src='<?=base_url()?>assets/img/icons/ttd_icon_social_hover.png'"
                        onmouseout="document.social.src='<?=base_url()?>assets/img/icons/ttd_icon_social.png'"   
                     > 
                        <li>
                            <img name="social" src="<?=base_url()?>assets/img/icons/ttd_icon_social.png" class="dept_icon" />
                            <h3 class="one_line">School of Social Work</h3>    
                        </li>
                    </a>
 
                        <li>
                            <img name="arch" src="<?=base_url()?>assets/img/icons/ttd_icon_arch.png" class="dept_icon" />
                            <h3 class="one_line">School of Architecture</h3>    
                        </li>

                        <li>
                            <img src="<?=base_url()?>assets/img/icons/ttd_icon_liberal.png" class="dept_icon" name="liberal" />
                            <h3 class="one_line">School of Liberal Arts</h3>    
                        </li>

                    <li>
                        <img name="medicine" src="<?=base_url()?>assets/img/icons/ttd_icon_medicine.png" class="dept_icon" />
                        <h3 class="one_line">School of Medicine</h3>    
                    </li>
                    </ul>
                </div>               
            </div>

        </div>
       
        <div id="tdl_hp_right_side">     
            <div id="links_area">
                <div class="link_box_container">
                    <h3>
                        <img src="<?=  base_url();?>assets/img/icons/icon_inbox.png" class="default_icon" alt="Submit your Thesis or Dissertation" /> 
                        Submit</h3>
                        <ul>
                            <li><a href="<?=base_url();?>submit">
                                    Submit Thesis | Dissertation</a></li>
                    </ul>
                </div>

                
                <div class="link_box_container">
                    <h3>
                        <img src="<?=  base_url();?>assets/img/icons/icon_signpost.png" class="default_icon" alt="Helpful links" />
                        Helpful Links</h3>
                        <ul>
                            <li>
                                <a href="http://tulane.edu/sse/academics/graduate/upload/guidelines_theses_dissertations.pdf" target="_blank">
                                Style Guide
                                <img src="<?=base_url()?>assets/img/icons/pdf_white_16.png" width="16px" height="16px"/>
                                </a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>assets/doc/Tulane_PDF_Creation_Guide.pdf" target="_blank">
                                PDF Creation Guide
                                <img src="<?=base_url()?>assets/img/icons/pdf_white_16.png" width="16px" height="16px"/>
                                </a>
                            </li>
                            <li><a href="http://tulane.edu/ogps/" target="_blank">Copyright</a></li>
                            <li><a href="http://tulane.edu/ogps/" target="_blank">Deadlines</a></li>
                            <li><a href="http://www.ndltd.org/" target="_blank">Search Networked Digital Library of Theses and Dissertations</a></li>
                    </ul>
                </div>                
                
                <div class="link_box_container">
                    <h3>
                        <img src="<?=base_url();?>assets/img/icons/icon_conversation.png" class="default_icon" alt="Contacts" />
                        Contacts</h3>
                    <ul>
                        <li><a href="http://tulane.edu/ogps/contact.cfm" target="_blank">Office of Graduate &amp; Postdoctoral Studies</a></li>
                        <li><a href="http://digitallibrary.tulane.edu/about/staff" target="_blank">Tulane Digital Library</a></li>
                        <li><a href="http://registrar.tulane.edu/registrar_staff" target="_blank">Office of the Registrar</a></li>
                         <li><a href="http://tuarchives.tulane.edu/about/staff" target="_blank">University Archives</a></li>
                    </ul>
                </div>
            </div><!--end:links_area -->       
                
            <div class="links_box_catalog">
                <span class="lb_catalog_img">
                    <img src="<?=base_url()?>assets/img/icons/magnifying_glass.png" />
                </span>
                <span class="lb_catalog_text">
                    Looking for a Thesis or Dissertation that's not available electronically?  Try searching our Catalog.
                </span>
                
                
                <form action="http://voyager.tcs.tulane.edu/vwebv/search" method="get" accept-charset="utf-8" target="_blank">
                    <input type="text" name="searchArg1" value="" placeholder="Search for...">
                    <input type="hidden" name="argType1" value="all">
                    <input type="hidden" name="searchCode1" value="GKEY">
                    <input type="hidden" name="location" value="Theses and Dissertations">
                    <input type="hidden" name="recCount" value="10">
                    <input type="hidden" name="searchType" value="2">
                    <button type="submit" name="page.search.search.button" value="Search"
                            onmouseover="this.style.color='#d98a00';"
                            onmouseout="this.style.color='#224568';" 
                    >Search</button>
                </form>
            </div>   
        </div><!--end:tdl_hp_right_side -->           
</div><!--end:Content -->

            