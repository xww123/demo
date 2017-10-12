<?php
/**
 * Created by PhpStorm.
 * User: xuke
 * Date: 2017/10/10
 * Time: 13:14
 */
namespace core;
class View{
//    模板文件
    protected $file;
//    模板变量
    protected $vars = [];
    public function make($file){
//        echo 'make333';
        $this->file = 'view/'.$file.'.html';
        return $this;
    }
    public function with($name,$value){
        $this->vars[$name] = $value;
        return $this;
    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        extract($this->vars);
//        echo 333;
        include $this->file;
        return '';
    }
}
