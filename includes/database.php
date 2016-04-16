<?php

/**
 * Conexiune la baza de date.
 *
 * @param string $host
 * @param string $username
 * @param string $password
 * @param string $database
 * @return bool|\mysqli
 *   Conexiunea sau FALSE dacă nu se poate conecta
 */
function db_connect($host, $username, $password, $database) {
    $conn = mysqli_connect($host, $username, $password, $database);
    if (mysqli_connect_errno()) {
      return FALSE;
    }
  return $conn;
}
