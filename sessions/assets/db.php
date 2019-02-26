<?php
define('DB_SERVER', 'localhost');
define('DB_DATABASE', 'test_db');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');

$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);