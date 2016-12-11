<?php


Config::set('routers',array(
                            'product'=>'product/list' ,
                            'product/([\w]+)?/?([\d]+)'=>'product/list/$1/$2' ,
                            
                            'news'=>'news/index' ,
                            'news/([\d]+)'=>'news/view/$1',
                            'news/[\w]+/([\d]+)'=>'news/view/$1',
                            ));
                            
                            
   
   
Config::set('connectionDB',array (
                           'host'=>'localhost',
                           'db_name'=>'my_bd',
                           'password'=>'',
                           'user'=>'root'
                           ));   