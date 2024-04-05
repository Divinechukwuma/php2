<?php

require 'functions.php';
require 'router.php';
require 'Database.php'; 

//this is saying create a variable called $config and require whatever is returned in the config.php file

 $config =  require 'config.php';

$db = new Database($config['database']);
