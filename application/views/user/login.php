<div class="container">
	<h2>Tulane Dissertation &amp; Thesis : Login Page</h2>
        
        <div id="login_box">
          
            <?= form_open() ?>
              <span class="login_text">Login using your Tulane Credentials</span>
                <div class="span8">
                    <label class="userpass_label">User Name:</label>
                    <input type="text" name="username" id="username" value="" placeholder="Username">
                </div>    
                <div class="span8">
                    <label class="userpass_label">Password:</label>            
                    <input type="password" name="password" id="password" value="" placeholder="Password">
                </div>    
                <div class="span8">
                    <label class="userpass_label"></label>
                    <input type="submit" class="btn submit active" value="Log In" id="login" name="login">
                </div>
            </form>
            
              <div id="best_experienced" class="span8">
                Best Experienced with:
                <a href="http://www.mozilla.org/en-US/firefox/fx/" target="_blank">
                    <img src="<?=base_url() ?>assets/bootstrap/img/icons/mozilla_firefox_logo_100.png" width="60px" alt="mozilla firefox browser"/> 
                </a>
                <a href="https://www.google.com/chrome" target="_blank">
                    <img src="<?= base_url() ?>assets/bootstrap/img/icons/chrome_logo.png" width="60px" alt="google chrome browser"/>  
                </a>    
            </div>
            
	</div>
                 
</div>