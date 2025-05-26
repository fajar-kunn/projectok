<?php

$db_name = 'mysql:host=localhost;dbname=food_db';
$user_name = 'root';
$user_password = '';

$conn = new PDO("mysql:host=localhost;$db_name", "$user_name", "$user_password");

