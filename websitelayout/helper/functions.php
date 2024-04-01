<?php

/**
  
 @title :function.php
 @description :This the file where all the ready made functions
   will be declared.

  */
#getBaseURL: It Will Return the base_url and will give the new url.
   if (!function_exists('getBaseURL')) {
   
function getBaseURL($url=''){
	if (empty($url)) {


		return BASE_URL;
	}else{
		return BASE_URL.$url;

	}

}

   }







?>