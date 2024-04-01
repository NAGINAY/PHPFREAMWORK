<?php

$endpoint=array_key_exists('PATH_INFO',$_SERVER)? $_SERVER['PATH_INFO']:"";
if(array_key_exists($endpoint,$webRouts)){
	$filetobeloded=$webRouts[$endpoint];
	$path=__DIR__.'/'.$filetobeloded;
	if (file_exists($path)) {

		require_once $path;

		// code...
	}
	else{
		exit(basename($filetobeloded,'.php'."file does not exit"));
	}
}else{
	if (basename($_SERVER['PHP_SELF'])=='index.php'){
	
		if (array_key_exists('DEFAULT_ROUTE',$webRouts)) {


				require_once __DIR__.'/'.$webRouts['DEFAULT_ROUTE'];
			// code...
		}


	}else{
		ob_clean();

if (array_key_exists('404_error',$webRouts)) {


				require_once __DIR__.'/'.$webRouts['404_error'];
			// code...
		}


	exit();
}}



?>


 <h1>INDEX PAGE</h1>