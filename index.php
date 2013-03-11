<?php
if(!ob_start('ob_gz_handler')) ob_start();
if(!session_id()) session_start();

require_once "Core/App.php";

App::setRoute('/^/', 'home', 'GET');
App::setRoute('/^about/', 'about', 'GET');
App::setRoute('/^2-dimensions/', 'twoD', 'GET');
App::setRoute('/^3-dimensions/', 'threeD', 'GET');
App::setRoute('/^contact/', 'contact', 'GET');

App::setLocals(array(
 "header_tpl"=>"Templates/header.tpl.php",
 "footer_tpl"=>"Templates/footer.tpl.php",
 "css_path"=>App::APP_PATH . "Application/View/Assets/css",
 "image_path"=>App::APP_PATH . "Application/View/Assets/images"
));

//Set Application Env. Variables
App::Init();


//handler functions
function home() { App::load()->view("Templates/master.tpl.php", array("main_content"=>"home.tpl.php")); }

function about() { App::load()->view("Templates/master.tpl.php", array(
 "main_content"=>"about.tpl.php", 
 "accordion"=>array(
  "tabs"=>array(
  	array(
  	 "name"=>"About", 
  	 "template"=>"Accordion/about.tpl.php"
  	),
  	array(
  	 "name"=>"Artist Statement", 
  	 "template"=>"Accordion/statement.tpl.php"
  	), 
  	array(
  	 "name"=>"Studio", 
  	 "template"=>"Accordion/studio.tpl.php"
  	),
   )
  )
 ));  
}

function twoD() { App::load()->view("Templates/master.tpl.php", array(
 "main_content"=>"work.tpl.php", 
 "gallery"=>array(
  "images"=>array(
   array("name"=>"Balancing Regularity", "src"=>"/2d/Balancing Regularity.jpg"),
   array("name"=>"Untitled", "src"=>"/2d/study01.jpg"),
   array("name"=>"Untitled", "src"=>"/2d/background.jpg"),
   array("name"=>"Zoetrope", "src"=>"/2d/Zoetrope.jpg"),
   array("name"=>"Sets of Infinity", "src"=>"/2d/setsofinfinity.jpg"),
   array("name"=>"Tribute", "src"=>"/2d/gunviolencedrawing.jpg"),
   array("name"=>"Inscriptions", "src"=>"/2d/inscription.jpg"),
  ))
 )); 
}
function threeD() { App::load()->view("Templates/master.tpl.php", array(
 "main_content"=>"work.tpl.php", 
 "gallery"=>array(
  "images"=>array(
   array("name"=>"Icosagon", "src"=>"/3d/icosagon.jpg"),
   array("name"=>"Icosagon", "src"=>"/3d/icosagon02.jpg"),
   array("name"=>"Icosagon", "src"=>"/3d/icosagon03.jpg"),
   array("name"=>"Flexagon", "src"=>"/3d/flexagon.jpg"),
   array("name"=>"Flexagon", "src"=>"/3d/flexagon02.jpg"),
   array("name"=>"Dimensional Hexagon", "src"=>"/3d/dimensionalhexagon.jpg"),
   array("name"=>"Hyperbolic Manifestation", "src"=>"/3d/hyperbolicmanifestation.jpg"),
   array("name"=>"Crocheted Tangrams", "src"=>"/3d/tangrams.jpg")
  ))
 )); 
}

function contact() { App::load()->view("Templates/master.tpl.php", array("main_content"=>"contact.tpl.php")); }
//Route and render output
App::Run();
ob_end_clean();
?>