<?php
use \AmitKhare\SlimHMVC\baseModel;
use \AmitKhare\ValidBit\ValidBit;
class Users_mdl extends baseModel {
	protected  $tableName="users";
    function __construct($c) {
        parent::__construct($c);
    }

    function findAll(){
        return parent::_findAll();
	}

	function findOne($id,$key =  "`id` = "){
		return parent::_findOne($id,$key);
	}

	function store ($data){
		$data = $this->db->filter( $data );

		$v = new ValidBit();
		$v->setSource($data);
		
		$v->check('username','required|string');
		$v->check('password','required|string');
		$v->check('email','required|email');

		if($v->isValid() !== true) {
		    return $v->getStatus();
		}
		$data = array(
			"username"=>$data['username'],
			"email"=>$data['email'],
			"password"=>$data['password'],
			"visible"=>ValidBit::ifSet($data,'visible',0)
		);
		if($id = parent::_store($data)){
			$v->setStatus(200,array("id"=>$id));
		} else {
			$v->setStatus(500,'something went wrong');
		}
		return $v->getStatus();
	}

	function update($id, $data){
	 	$data = $this->db->filter( $data );

		$v = new ValidBit();
		$v->setSource($data);
		
		$v->check('username','required|string');
		$v->check('password','required|string');
		$v->check('email','required|email');

		if($v->isValid() !== true) {
		    return $v->getStatus();
		}
		$data = array(
			"username"=>$data['username'],
			"email"=>$data['email'],
			"password"=>$data['password'],
			"visible"=>ValidBit::ifSet($data,'visible',0)
		);
		if(parent::_update($id,$data)){
			$v->setStatus(200,'data updated');
		} else {
			$v->setStatus(500,'something went wrong');
		}
		return $v->getStatus();
     }

     function delete($id){
     	return parent::_delete($id);
     }
}