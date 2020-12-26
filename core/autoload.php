<?php

// WARNING:IF YOU INSTALL LINKER FROM LINKER INSTALLER
// DO  NOT  CHANGE THIS FILE UNLESS YOU  KNOW WHAT YOU
// YOU ARE DOING.

$pathsdir = __DIR__."/paths.php";

if(is_file($pathsdir)){
    $paths = include_once($pathsdir);
    if(!is_file($paths["autoload"])){
        $loader = require $paths["vendor"];  
        if(is_file($paths["composer"])){
            $composer = json_decode(file_get_contents($paths["composer"]),true);
            if(isset($composer["autoload"]) && isset($composer["autoload"]["psr-4"]))
            /**/foreach($composer["autoload"]["psr-4"] as $psr => $src)
            /******/$loader->addPsr4($psr,$src);
        }
    } else require_once $paths["autoload"];
    return new \Linker\Application($paths);
} else throw \Exception("Paths does not exists");

