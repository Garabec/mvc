<?php


class DB{
    
    
  public  static function getConectionDB(){
      
//   $host='localhost';
//   $db_name='my_bd';
//   $password='';
//   $user='root';
   
   extract(Config::get('connectionDB'));
   
  
   
   $db=new PDO("mysql:host=$host;dbname=$db_name",$user,$password); 
      
    return $db;  
  }  
    
    
    
    
}