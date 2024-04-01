<?php

#note in laravel same file is called : kernel.php,boot.php,core.php
#bootstrap: folder: intialisation of the application


$db=include_once dirname(__DIR__).'/config/settings.php';
require_once Project_path.'/helper/functions.php';
$host=$db['database']['hostname'];
$user=$db['database']['username'];
$pass=$db['database']['password'];
$host=$db['database']['dbname'];
$port=$db['database']['port'];


require_once dirname(__DIR__).'/routes/web-routes.php';
require_once dirname(__DIR__).'/routes/api-routes.php';


?>

