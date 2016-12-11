<?php


class Controller{
    
 public function render($view,$arg=array()){
        
   
  
   extract($arg);
  
  
    
    $dirView=str_ireplace('Controller','',get_class($this));
    
     $tplDir=VIEW_DIR.DS.$dirView.DS.$view;
     
    //  var_dump($tplDir);
     
    //  var_dump(VIEW_DIR.DS.'News'.DS.'index.php');
     
     
     
     
    //  die();
    
        
    ob_start() ;
    
    
    require_once($tplDir);
    
    return ob_get_clean(); 
    
    
    
 }   
    
    
    
}