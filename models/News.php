<?php

class News {
    
    
public static function getNewsItemById($id){
    
    
  
   $db=DB::getConectionDB();
   
   $result=$db->query("SELECT*FROM `news`WHERE `id`='{$id}'");
   
   
   if($result) {
   
   $item=$result->fetch(PDO::FETCH_ASSOC);
       
     
     
   }
   
   
   
   return $item;  
    
    
}    
    
    
public static function getNewsList(){
    

   
   
   $db=DB::getConectionDB();
   
   $newslist=array();
   
   
   $result=$db->query("SELECT `id`,`title`,`date`,`shot_content`,`content` FROM `news` ORDER BY `id` DESC LIMIT 10");
   
   
    if($result) {
   
     while($row=$result->fetch(PDO::FETCH_ASSOC)){
       
     $newslist[]=$row; 
       
     }
     
  }
   
  return $newslist; 
    
}    
        
    
    
    
    
}
