<?php
require_once('LDAP/adLDAP.php');

class ADUser {

	protected $authenticated = false;
	protected $exists = false;

	function __construct($params){
            $this->ad = new adLDAP();
		$this->ad->connect();
                
		if(!$params['user']){
			throw new Exception('Must supply a username');
		}

		$this->username = $params['user'];

		if(@($params['passwd'])){
			$this->auth($params['passwd']);
		}

		
		$this->rawInfo = $this->ad->user()->info($this->username, array('*'));

		if(@($this->rawInfo['count'] == 1)){
			$this->exists = true;
			$this->rawInfo = $this->rawInfo[0]; 
			$this->name = $this->rawInfo['displayname'][0];  
                        $this->last_name = $this->rawInfo['sn'][0];
                        $this->first_name = $this->rawInfo['givenname'][0];
                        $this->middle_initial = $this->rawInfo['initials'][0];
			$this->phone = $this->rawInfo['telephonenumber'][0];
			$this->department = $this->rawInfo['departmentnumber'][0];
			$this->title = $this->rawInfo['title'][0];
			$this->email = $this->rawInfo['mail'][0];
			$this->address = $this->rawInfo['physicaldeliveryofficename'][0];
			$this->groups = array_values(array_slice($this->rawInfo['edupersonaffiliation'], 1)); // removes "count" element
			array_walk($this->groups, function(&$n){
				$n = strtolower($n);
			});
			$this->memberships = $this->memberships();
		}


	}

	function getInfo(){
		return array(
			'name' => $this->name,
                        'last_name' => $this->last_name,
                        'first_name' => $this->first_name,
                        'middle_initial' => $this->middle_initial,
			'title' => $this->title,
			'department' => $this->department,
			'address' => $this->address,
			'email' => $this->email,
			'phone' => $this->phone,
			'groups' => $this->groups,
			'memberships' => $this->memberships
		);
	}

	function getRaw(){
		$clean = array();
		foreach($this->rawInfo as $k=>$v){
			if(!is_numeric($k)){
				$clean[$k] = $v;
			}
		}

		return $clean;
	}

	function exists(){
		return $this->exists;
	}

	function memberships(){
		$memberships = array();

		$memberships['graduate'] = $this->isA('graduate');
		$memberships['undergraduate'] = $this->isA('undergraduate');
		$memberships['alumni'] = $this->isA('alumni');
		$memberships['staff'] = $this->isA('staff');
		$memberships['faculty'] = $this->isA('faculty');

		return $memberships;
	}

	function isA($type){

		$is_type = false;
		$student_types = explode(',', $this->rawInfo['gecos'][0]);
		array_walk($student_types, function(&$n){
			$n = strtolower($n);
		});

		if(in_array($type, $student_types) || in_array($type, $this->groups)){
			$is_type = true;
		}

		return $is_type;
	}

	function isAuthenticated(){
		return $this->authenticated;
	}

	function auth($passwd){
		if($this->ad->authenticate($this->username, $passwd)){
			$this->authenticated = true;
			return true;
		} else {
			$this->authenticated = false;
		}

		return false;
	}

}


/* End of file routes.php */
/* Location: ./application/config/routes.php */