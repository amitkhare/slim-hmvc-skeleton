<?php
use \AmitKhare\SlimHMVC\Modules;
use \AmitKhare\SlimHMVC\baseController;

class Pages extends baseController {
    protected $moduleName ="Pages";
    function __construct($c) {
        parent::__construct($c);
        $this->loadModule("Users");
   }

    function home ($request, $response, $args){
        $data['title'] ="Slim HMVC Skeleton";
        echo $this->loadView("Pages","index",$data);
    }

    function users ($request, $response, $args){
       $this->modules->users->findAll($request, $response, $args);
    }

}