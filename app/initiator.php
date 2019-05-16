<?php 

require_once 'config/configuration.php';
require_once 'helpers/url_helper.php';


	spl_autoload_register(function($nameClass){
		require_once 'library/'.$nameClass . '.php';
	});

	

 