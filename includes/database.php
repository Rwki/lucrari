<?php

/**
 * Conexiune la baza de date.
 *
 * @return bool|\mysqli
 *   Conexiunea sau FALSE dacă nu se poate conecta
 *
 * @throws Exception
 *   Când nu se poate conecta la baza de date.
 */
function db_connect() {
  global $db_host;
  global $db_username;
  global $db_password;
  global $db_database;

  $conn = mysqli_connect($db_host, $db_username, $db_password, $db_database);
    if (mysqli_connect_errno()) {
      throw new Exception(mysqli_connect_error());
    }
  return $conn;
}
