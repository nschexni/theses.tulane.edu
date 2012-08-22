<script type="text/javascript">
  
            
    $(document).ready(function() {
            var megaConfig = {      
                interval: 200,  
                sensitivity: 3,  
                over: addMega, 
                timeout: 500,  
                out: removeMega  
            } 
		function addMega(){ 
				$($(this).find("#dropList ul#menu li")).addClass("hovering"); 
				$(this).addClass("hovering"); 
					} 
		function removeMega(){ 
				$($(this).find("#dropList ul#menu li")).removeClass("hovering"); 
				$(this).removeClass("hovering"); 						   
			
                $("#dropList ul#menu li.level1-li").hoverIntent(megaConfig);
                }
    });
</script>

<div id="top_stripe_bar">&nbsp;</div>

<div id="dropList">

<ul id="menu">
    <li class="level1-li"><a class="level1-a" href="<?= base_url();?>">Home</a></li>
    
    <?php 
        if($this->session->userdata('authenticated')){
             $logout_button = '<li class="level1-li"><a class="level1-a" href='
             .base_url()
             .'user/logout>Logout</a></li>';
        }else {
             $logout_button = '';
        }
        echo $logout_button;
     ?>   
    
    
</ul>
</div> 
