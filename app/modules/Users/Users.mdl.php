<?php
use \AmitKhare\SlimHMVC\baseModel;
use \AmitKhare\SlimHMVC\ValidateIt;
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

		$v = new ValidateIt();
		$v->check($data,'username','required|numeric');
		$v->check($data,'password','required|numeric');
		$v->check($data,'email','required|numeric');

		if($v->isValid() !== true) {
		    return $v->getStatus();
		}
		$data = array(
			"username"=>$data['username'],
			"email"=>$data['email'],
			"password"=>$data['password'],
			"visible"=>ValidateIt::ifSet($data,'visible',0)
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

		$v = new ValidateIt();
		$v->check($data,'username','required|numeric');
		$v->check($data,'password','required|numeric');
		$v->check($data,'email','required|numeric');
		
		if($v->isValid() !== true) {
		    return $v->getStatus();
		}
		$data = array(
			"username"=>$data['username'],
			"email"=>$data['email'],
			"password"=>$data['password'],
			"visible"=>ValidateIt::ifSet($data,'visible',0)
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