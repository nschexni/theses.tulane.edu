<?php
/**
 * Description of CDM_REST
 *  Changing over from custom queries to REST urls. Update needed after CDM 6 changeover.
 * @author nschexni
 */
class Cdm_rest extends CI_Model {
    
    function search_url($institution){
           $cdm_rest = 'http://louisdl.louislibraries.org/cdm/search/collection/p16313coll12/searchterm/'.$institution.'/mode/exact/order/date/ad/desc';
        $cdm_rest = preg_replace( '/\s+/','',$cdm_rest);
        return $cdm_rest;
    }
    
        function search_school_engineering(){
            $cdm_engineering_rest = 'http://louisdl.louislibraries.org/cdm/search/collection/p16313coll12/searchterm/School%20of%20Science%20and%20Engineering!1999%202000%202001%202002%202003%202004%202005%202006%202007%202008%202009%202010%202011%202012/field/school!date/mode/all!none/conn/and!and/order/date!creato/ad/desc/cosuppress/0';
            $cdm_engineering_rest = preg_replace( '/\s+/','',$cdm_engineering_rest);
            return $cdm_engineering_rest;      
        }
}

