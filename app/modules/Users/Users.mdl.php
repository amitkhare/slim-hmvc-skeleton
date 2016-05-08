<?php
use \AmitKhare\SlimHMVC\baseModel;
use \AmitKhare\ValidBit\ValidBit as ValidBit;

class Users_mdl extends baseModel {
	protected  $tableName="users";
	protected $validBit;
    function __construct($c) {
        parent::__construct($c);
        $settings = ($this->c->get('settings')['db']) ? $this->c->get('settings')['db'] : false;
		$this->validBit = new ValidBit($settings["hostname"],$settings["username"],$settings["password"],$settings["dbname"]);
		
    }

    function findAll(){
        return parent::_findAll();
	}

	function findOne($id,$key =  "`id` = "){
		return parent::_findOne($id,$key);
	}

	function store ($data){
		$data = $this->db->filter( $data );

        $this->validBit->setSource($data);
		
		$this->validBit->check('username','required|alphanum||unique:users.username');
		$this->validBit->check('password','required|string');
		$this->validBit->check('email','required|email|unique:users.email');

		if($this->validBit->isValid() !== true) {
		    return $this->validBit->getStatus();
		}
		$data = array(
			"username"=>$data['username'],
			"email"=>$data['email'],
			"password"=>$data['password'],
			"visible"=>ValidBit::ifSet($data,'visible',0)
		);
		if($id = parent::_store($data)){
			$this->validBit->setStatus(201,array("id"=>$id));
		} else {
			$this->validBit->setStatus(500,'something went wrong');
		}
		return $this->validBit->getStatus();
	}

	function update($id, $data){

	 	if($item = $this->findOne($id)){

	 		$data = $this->db->filter( $data );

	        $this->validBit->setSource($data);

			$this->validBit->check('username','required|alphanum');
			$this->validBit->check('password','required|string');
			$this->validBit->check('email','required|email');

			if($this->validBit->isValid() !== true) {
			    return $this->validBit->getStatus();
			} else {
				if($item->username!==$data["username"]){
					$this->validBit->check("username",'unique:users.username');
				}
				if($item->email!==$data["email"]){
					$this->validBit->check("email",'unique:users.email');
				}
			}

			if($this->validBit->isValid() !== true) {
			    return $this->validBit->getStatus();
			}

			$data['username']=$data['username'];
			$data['email']=$data['email'];
			$data['password']=sha1($data['password']);
			$data['visible']=ValidBit::ifSet($data,'visible',0);

			if(parent::_update($id,$data)){
				$this->validBit->setStatus(200,'data updated');
			} else {
				$this->validBit->setStatus(500,'something went wrong');
			}
			return $this->validBit->getStatus();
	 	} else {
	 		return array(
	 			"code"=>404,
	 			"msgs"=>array("Invalid ID")
	 			);
	 	}

     }

     function delete($id){
     	if(parent::_delete($id)){
     		$this->validBit->setStatus(200,'Entry Deleted');
		}else {
     		$this->validBit->setStatus(404,'Invalid id');
		}
		return $this->validBit->getStatus();
     }
}