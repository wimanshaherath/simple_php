<?php

spl_autoload_register(function ($classname)
{
    $path="../classes/";
    $extension=".class.php";
    $fullpath=$path.$classname.$extension;

    if(!file_exists($fullpath))
    {
        return false;
    }

    include_once $fullpath;
}
);




/* 
function MyAutoLoad1($classname)
{
    $url=$_SERVER['HTTP_HOST'].$SERVER['REQUEST_URI'];

    if(strpos($url,'includes')!==false)
    {
        $path='../classes/';
    }
    else{
        $path='classes/';
    }

    $extension='.class.php';
    $fullpath=$path.$classname.$extension;

    if(!file_exists($fullpath))
    {
        return false;
    }

    require_once $fullpath;
}

spl_autoload_register('MyAutoLoad1');*/