<?php

/**
 * Database functions for the Tulane Theses & Dissertations Site
 *
 * @author Neal Schexnider
 */

class Theses_db extends CI_Model {
    
    function __construct()
    {
        parent::__construct();
    }
    
    function theses_db_insert($data){
            $query_str = "INSERT INTO submissions ( 
                                                        last_name, 
                                                        first_name, 
                                                        middle_initial, 
                                                        email, 
                                                        degree_date, 
                                                        degree_granted, 
                                                        school, 
                                                        advisor_last_name, 
                                                        advisor_first_name, 
                                                        department, 
                                                        title, 
                                                        document_type, 
                                                        keywords, 
                                                        abstract, 
                                                        language,  
                                                        userfile, 
                                                        copyright_release, 
                                                        digital_signature 
                                                       )
                                               VALUES  (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
              $this->db->query($query_str, $data);
            
    }

    
}

?>
