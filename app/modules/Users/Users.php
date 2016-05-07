<?php
use \AmitKhare\SlimHMVC\Modules;
use \AmitKhare\SlimHMVC\baseController;

class Users extends baseController {
    protected $moduleName ="Users";
    protected $modules;
    function __construct($c) {
        parent::__construct($c);
        $this->modules = new Modules($c);
    }

    function  home ($request, $response, $args){
        $data['title'] ="Slim HMVC";
        echo $this->modules->loadView("Users","index",$data);
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

    function  store($request, $response, $args){
        $parsedBody = $request->getParsedBody();
        $result = $this->model->store($parsedBody);
        if($result) {
            return $response->withStatus(200)
                ->withHeader('Content-Type', 'application/json')
                ->write(json_encode($result));

        } else {
            return $response->withStatus(500)
                ->withHeader('Content-Type', 'application/json')
                ->write(json_encode(array("code"=>500,"msg"=>"Somethin went wrong.")));
        }
    }

    function  update ($request, $response, $args){
        $parsedBody = $request->getParsedBody();
        $result = $this->model->update($args['id'],$parsedBody);
        if($result) {
            return $response->withStatus(200)
                ->withHeader('Content-Type', 'application/json')
                ->write(json_encode($result));

        } else {
            return $response->withStatus(404)
                ->withHeader('Content-Type', 'application/json')
                ->write(json_encode(array("code"=>404,"msg"=>"Invalid ID")));
        }
    }

    function  delete ($request, $response, $args){
        $parsedBody = $request->getParsedBody();
        $result = $this->model->delete($args['id']);
        if($result) {
            return $response->withStatus(200)
                ->withHeader('Content-Type', 'application/json')
                ->write(json_encode(array("code"=>200,"msg"=>"Record deleted")));

        } else {
            return $response->withStatus(404)
                ->withHeader('Content-Type', 'application/json')
                ->write(json_encode(array("code"=>404,"msg"=>"Invalid ID")));
        }
    }
}