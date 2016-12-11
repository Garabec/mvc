<?php 



class Router {
    
    
      private $routers=array();
    
    public function __construct(){
        
        
      $this->routers=Config::get('routers');  
        
        
        
    }
    
    
    private function getUri(){
        
      return !empty($_SERVER[REQUEST_URI])?$uri=trim($_SERVER[REQUEST_URI],'/'):null;
          
     }
    
    
    public function run (){
        
     $uri=$this->getUri() ; 
      
    
        
     foreach($this->routers as $uri_pattern=>$path){
         
       if(preg_match("~^$uri_pattern\/?$~",$uri)){ 
           
           
           $path=preg_replace("~^$uri_pattern\/?$~",$path,$uri);
           
           $segments=explode('/',$path);
           
           $controllers=ucfirst(array_shift($segments).'Controller');
           $method='action'.ucfirst(array_shift($segments));
           
           //echo "Controlers   $controllers <br>";
           //echo "Method   $method";
           
           
           
           $parametrs=$segments;
           
           //print_r($parametrs);
           
           $path_controller=ROOT.DS.'controller'.DS.$controllers.'.php';
           
           if(file_exists($path_controller)){
               
               
            require_once $path_controller;
            
            }
            
            
            
            
           
           $controllers_object=new $controllers;
           
           //$result=$controllers_object->$method();
           
           
           $result=call_user_func_array(array($controllers_object,$method),$parametrs);
           
          
           
           
           if($result!=null){
               
               return $result;
               
               break;
           }
           
           
           
           
           
           
           
           };
        
         
         
         
     } 
         
          
         
     }
     
     
     
     
        
    }
    
    
    
