<?php
    function C($name,$method){
        require_once ('/libs/Controller/'.$name.'Controller.class.php');
        //$testController = new testController();
        //$testController -> show();

        //eval('$obj = new '.$name.'Controller();$obj -> '.$method.'();');
        $controller=$name.'Controller';
        $obj=new $controller();
        $obj ->$method();
    }


    function M($name){
        require_once('/libs/Model/'.$name.'Model.class.php');
       // $testModel=new testModel();
        $model=$name.'Model';
        $obj=new $model();
        return $obj;
    }


    function V($name){
        require_once('/libs/View/'.$name.'View.class.php');
        $view=$name.'View';
        $obj=new $view();
        return $obj;
    }

    function ORG($path, $name, $params=array()){
        require_once('/libs/ORG/'.$path.$name.'.class.php');
//        require_once('/libs/ORG/'.$path.$name.'BC.class.php');
        $obj=new $name();
        if(!empty($params)){
            foreach($params as $key=>$value){
                $obj->$key = $value;
            }
        }
        return $obj;
    }
