<?php

if(!file_exists(dirname(__FILE__) . '/../config.php')) {
  die('Aplicația nu este configurată. Copiază config.template.php în config.php și editează setările.');
}

require_once dirname(__FILE__) . '/../config.php';
require_once 'database.php';
require_once 'user.php';
