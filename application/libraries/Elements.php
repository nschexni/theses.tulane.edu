<?php

class Elements
{

    /**
    * @desc    Creates a Complete Title consisting of Institution | Domain | Sub-Domain | Current Page Location
    * @param   
    */
    function title()
    {
      $main_title =  'Tulane University | Tulane Digital Library | Thesis &amp; Dissertations';
      //Returns the file location
      $page = basename($_SERVER['PHP_SELF']);
      //Seperates into an array of 'Title' 'Extension' 
      $page = explode('.', $page);
      //Get the first postion of the array which is the 'Title'
      $page = $page[0];
      //Convert the 'Title' name so that the first character is Capitalized
      $page = ucfirst($page);
      //If $page is Index then rename it to Homepage
      $page = ($page == 'Index')? 'Homepage' : $page;
      //Combine the $main_title and modified $page to form the complete title
      $complete_title = $main_title.' | '.$page;
      
      return $complete_title; 
    }
    
    
    
    /**
    * @desc    Check to see if the user is logged in.  If so then add the Logout Button to the Main Nav.
    * @param   
    */
    function menu_logout_button()
    {
 
        if($this->session->userdata('authenticated')){
                 $menu_logout_button = '<li class="level1-li"><a class="level1-a" href='
                 .base_url()
                 .'user/logout>Logout</a></li>';
            }else {
                 $menu_logout_button = '';
            }
        return $menu_logout_button;
    }

    
} 

?>
