<?php



function autoload_class($nameclass){
    
 $file_component=ROOT.DS.'components'.DS.$nameclass.'.php';
 $file_config=ROOT.DS.'config'.DS.$nameclass.'.php';
 $file_controllers=ROOT.DS.'controllers'.DS.$nameclass.'.php';
 $file_library=ROOT.DS.'library'.DS.$nameclass.'.php';
 $file_model=ROOT.DS.'models'.DS.$nameclass.'.php';
 

 
if(file_exists($file_component)){
    
 return require_once $file_component;   
} 
if(file_exists($file_config)){
     
 return require_once $file_config;   
}  
 if(file_exists($file_controllers)){
    
 return require_once $file_controllers;   
}    
    
if(file_exists($file_library)){
    
 return require_once $file_library;   
}     
    
if(file_exists($file_model)){
    
return  require_once $file_model;   
}     
    
    }
    
    spl_autoload_register('autoload_class');
    
    
 require_once ROOT.DS.'config'.DS.'config.php';