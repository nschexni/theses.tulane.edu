 
<!--// link to the JavaScript files (hoverIntent is optional) -->
<script type="text/javascript"  src="<?=base_url()?>assets/js/custom/jquery_hoverIntent.js"></script> 
<script type="text/javascript"  src="<?=base_url()?>assets/js/custom/jquery_superfish.js"></script> 

<script>
    $(document).ready(function(){
        
        $("li.nav_top_level ul li a").hover(
            function () {
                    $("li.nav_top_level").css("color", "#224568")
               },
            function () {
                $("li.nav_top_level").css("color", "#fff");
               }
         );
    });    
</script> 


    <div id="top_stripe_bar">&nbsp;</div>
        <ul class="sf-menu">
            <li class="nav_top_level">
                <a href="<?= base_url();?>">home</a>
            </li>
            <?php 
                if($this->session->userdata('authenticated')){
                     $logout_button = '<li class="nav_top_level">
                                            <a href='
                                                .base_url()
                                                .'user/logout>Logout
                                            </a>
                                       </li>';
                }else {
                     $logout_button = '';
                }
                echo $logout_button;
             ?>  
        </ul>

                    


