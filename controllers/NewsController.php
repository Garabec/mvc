<?php


class NewsController  extends Controller {
    
    
    public function actionIndex(){
        
      //echo ' <br> просмотр всех новостей' ;
      
      
      $string="21-12-2015";
      
      $pattern="/^(\d{2})-(\d{2})-(\d{4})/";
      
      $replacement="Год $3 Месяц $2 День $1";
      
      $result=preg_replace($pattern,$replacement,$string);
      
      
      //echo " <br> $result" ;
      
      $item=News::getNewsList();
      
      //require_once(VIEW_DIR.DS.'News'.DS.'index.php');
      
      
     // $content=$this->render('index.php',$item);
      
      return $this->render('index.php',array('item'=>$item));
     
      
      
    //   echo '<pre>';
      
    // print_r($item) ;
    //   echo '</pre>';
        
    }
    
    public function actionView($id){
      
      $id=(int)$id;
    //   echo ' <br> одной новости ' ;
    //   echo '<br> Category :'.$category;
    //   echo '<br>  Id :'.$id;
      
      $item=News::getNewsItemById($id);
      
      
      
     return $this->render('view.php',array('item'=>$item));
      
    }
    
    
    
    
    
}