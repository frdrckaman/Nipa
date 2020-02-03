<?php
//include init.php so that you can link/access all project files
require_once 'config/core/init.php';

//Example of how the function work
print_r(Config::get('mysql/host'));