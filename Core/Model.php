<?php

abstract class Model {

private static $instance;
private static $file_path;
protected $db;
protected $fs;

//$encryptedmessage = encrypt("your message"); 
//echo decrypt($encryptedmessage); 

private function __construct() {
  $this->db = new Mongo();	
  $this->fs = $this->db->getGridFS();
}

//Singleton to ensure that class is instantiated once
public static function get_instance() {
	if(empty(self::$instance)) {
		self::$instance = new Model();
	}
	return self::$instance;
}

//Check if model exists in Module 
public static function load_model($model_name) {

	self::$file_path = App::MODEL_PATH . $model_name . App::PHP_EXT;

	if(!file_exists(self::$file_path)) {
		throw new Exception("Model $model_name.php could not be located");
	} 
	else {
		try {
			require_once(self::$file_path);
			$model_name = $model_name . "Model";
			$model = new $model_name();
	
			return $model;	
		} 
		catch(Exception $e) {
			echo $e->getMessage();	
		}
	}
}

}

?>