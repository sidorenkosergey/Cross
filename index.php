<?php
function __autoload($class_name){
    $file = './library/' . $class_name. '.php';
if (file_exists($file)){
    include_once $file;
}
}
function useObject(A $obj){
    $obj->test();
}
useObject(new B());


