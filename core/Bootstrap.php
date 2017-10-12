<?php
/**
 * Created by PhpStorm.
 * User: xuke
 * Date: 2017/10/10
 * Time: 0:12
 */
namespace core;

class Bootstrap{
    public static function run(){
        session_start();
        self::parseUrl();
    }

//    分析URL生成控制器方法常量
    public static function parseUrl(){
//        dd($_SERVER);
        if(isset($_GET['s'])){
//            分析s变量生成控制器方法
            $info = explode('/',$_GET['s']);
//            dd($info);
            $class = '\web\controller\\'.ucfirst($info[0]);
            $action = isset($info[1])&&trim($info[1]) ? $info[1] : 'index';
        }else{
            $class = "\\web\\controller\\Index";
            $action = "index";
        }
//        $obj = new $class();
//        $obj->$action();
//        (new $class)->$action();
        echo (new $class())->$action();

    }

}