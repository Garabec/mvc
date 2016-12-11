<?php 

//error_reporting(E_ALL);



define(DS,DIRECTORY_SEPARATOR);
define(ROOT,dirname(__DIR__));
define(VIEW_DIR,ROOT.DS.'views');

require(ROOT.DS.'config'.DS.'init.php');


$routers=new Router;

$content=$routers->run();



require(VIEW_DIR.DS.'layout.php');








