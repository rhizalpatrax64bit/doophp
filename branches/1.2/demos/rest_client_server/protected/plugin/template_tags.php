<?php

//register functions to be used with your template files
$template_tags = array('upper', 'tofloat', 'sample_with_args', 'debug');

function upper($str){
    return strtoupper($str);
}

function tofloat($str){
    return sprintf("%.2f", $str);
}

function sample_with_args($str, $prefix){
    return $str .' with args '. $prefix;
}

function debug($var){
    if(!empty($var)){
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }
}

?>