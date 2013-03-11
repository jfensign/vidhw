<?php

class Template {
	
	public $file_path,
		   $view,
		   $vars;
		   
	public function __construct($view_name, $view_vars = NULL) {
		
		$this->vars = $view_vars;
		$this->file_path = "Application/View/$view_name";
		

		if(!file_exists($this->file_path)) {
			try {
				echo $this->file_path;
			}
			catch(AppException $e) {
				error_log($e->getMessage());
			}
		}
		
		if(is_array($this->vars) && count($this->vars) > 0) {
			extract($this->vars, EXTR_PREFIX_SAME, "APP_");
		}
		
		include_once($this->file_path);
	
		return FALSE;
	
	}
	
	public function redirect() {
		header("Location: " . $_SERVER['HTTP_REFERER']);
	}
	
}

?>