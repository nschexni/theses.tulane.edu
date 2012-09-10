<?php
class Cdm_queries extends CI_Model{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    /**
         * @desc    Browse By Schools Default custom query
         * @param   $institution is the school name
         */
    function school_browse($institution){
        $cdm_generic = 'http://louisdl.louislibraries.org/cdm4/results.php?CISORESTMP=results.php
                    &CISOVIEWTMP=item_viewer.php
                    &CISOMODE=grid
                    &CISOGRID=thumbnail,A,1;title,A,1;creato,A,0;date,A,0;descri,200,0;100;date,creato,none,none,none
                    &CISOBIB=discla,A,1,N;link,A,0,N;title,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none
                    &CISOTHUMB=20%20(4x5);relevancy,none,none,none,none
                    &CISOTITLE=20;title,none,none,none,none
                    &CISOHIERA=20;creato,title,none,none,none
                    &CISOSUPPRESS=0
                    &CISOTYPE=link
                    &CISOOP1=exact
                    &CISOFIELD1=school
                    &CISOBOX1=
                    '
                    .$institution.
                    '
                    &CISOOP2=exact
                    &CISOFIELD2=creato
                    &CISOBOX2=
                    &CISOOP3=exact
                    &CISOFIELD3=contri
                    &CISOBOX3=
                    &CISOOP4=exact
                    &CISOFIELD4=CISOSEARCHALL
                    &CISOBOX4=
                    &c=exact
                    &CISOROOT=%2Fp16313coll12
                    &CISOSORT=date|r';
        $cdm_generic = preg_replace( '/\s+/','',$cdm_generic);
        return $cdm_generic;
    }    

    function school_engineering(){
        $cdm_engineering = 'http://louisdl.louislibraries.org/cdm4/results.php?CISOOP1=all
                &CISOVIEWTMP=item_viewer.php    
                &CISOMODE=grid    
                &CISOGRID=thumbnail,A,1;title,A,1;creato,A,0;date,A,0;descri,200,0;100;date,creato,none,none,none
                &CISOBIB=discla,A,1,N;link,A,0,N;title,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none
                &CISOTHUMB=20%20(4x5);relevancy,none,none,none,none
                &CISOTITLE=20;title,none,none,none,none
                &CISOHIERA=20;creato,title,none,none,none
                &CISOSUPPRESS=0
                &CISOTYPE=link
                &CISOFIELD1=school    
                    &CISOBOX1=School%20of%20Science%20and%20Engineering
                    &CISOOP2=none
                    &CISOBOX2=1999%202000%202001%202002%202003%202004%202005%202006%202007%202008%202009%202010%202011%202012
                    &CISOFIELD2=date
                    &CISOOP3=any
                    &CISOBOX3=
                    &CISOFIELD3=school
                    &CISOOP4=none
                    &CISOBOX4=
                    &CISOFIELD4=CISOSEARCHALL
                    &CISOROOT=/p16313coll12
                    &CISOSORT=date|r
        ';
        $cdm_engineering = preg_replace( '/\s+/','',$cdm_engineering);
        return $cdm_engineering;
    }
}
?>
