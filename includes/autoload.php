<?php

if(!file_exists(dirname(__FILE__) . '/../config.php')) {
  die('Aplicația nu este configurată. Copiază config.template.php în config.php și editează setările.');
}

session_start();
$user = NULL;

if (!empty($_SESSION['user'])) {
  $user = $_SESSION['user'];
}

require_once dirname(__FILE__) . '/../config.php';
require_once 'util.php';
require_once 'database.php';
require_once 'user.php';
