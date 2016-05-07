<?php
use \AmitKhare\SlimHMVC\Modules;
use \AmitKhare\SlimHMVC\baseController;

class Pages extends baseController {
    protected $moduleName ="Pages";
    protected $modules;
    function __construct($c) {
        parent::__construct($c);
        $this->modules = new Modules($c);
    }

    function  home ($request, $response, $args){
        $data['title'] ="Slim HMVC Skeleton";
        echo $this->modules->loadView("Pages","index",$data);
    }

}