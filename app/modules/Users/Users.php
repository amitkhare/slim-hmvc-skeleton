<?php
use \AmitKhare\SlimHMVC\Modules;
use \AmitKhare\SlimHMVC\baseController;

class Users extends baseController {
    protected $moduleName ="Users";
    function __construct($c) {
        parent::__construct($c);
    }

    function  findAll($request, $response, $args){
        $results =  $this->model->findAll();
        if($results) {
            return $response->withStatus(200)
                ->withHeader('Content-Type', 'application/json')
                ->write(json_encode($results));

        } else {
            return $response->withStatus(404)
                ->withHeader('Content-Type', 'application/json')
                ->write(json_encode(array("code"=>404,"msg"=>"No records found")));
        }
    }

    function  findOne($request, $response, $args){
        $result =  $this->model->findOne($args['id']);
        if($result) {
            return $response->withStatus(200)
                ->withHeader('Content-Type', 'application/json')
                ->write(json_encode($result));

        } else {
            return $response->withStatus(404)
                ->withHeader('Content-Type', 'application/json')
                ->write(json_encode(array("code"=>404,"msg"=>"No records found")));
        }
    }
}