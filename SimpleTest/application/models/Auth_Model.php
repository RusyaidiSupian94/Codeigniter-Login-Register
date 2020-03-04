<?php
class Auth_model extends CI_Model{

	public function validate($email,$password){
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$result = $this->db->get('user',1);
		return $result;
	}

	/////////////insert user///////////
	public function insert($data = array()){
		if(!empty($data)){
			if(!array_key_exists("created", $data)){ 
                $data['created'] = date("Y-m-d H:i:s"); 
            } 
            if(!array_key_exists("modified", $data)){ 
                $data['modified'] = date("Y-m-d H:i:s"); 
            }
            $insert = $this->db->insert('user',$data);
		}
		return false;
	}

	//////////check email and username is exist or not///////////

}
