<?php

/**
 * Funcția de autentificare.
 *
 * @param $username
 * @param $password
 * @return null|object
 * @throws \Exception
 */
function login($username, $password) {
  $ret = NULL;
  $conn = db_connect();
  $sql = "SELECT * FROM `user` WHERE mail = '$username' AND `password` = PASSWORD('$password') LIMIT 1";
  if ($query = mysqli_query($conn, $sql)) {
    $ret = mysqli_fetch_object($query);
  }
  else {
    throw new Exception(mysqli_error($conn));
  }
  return $ret;
}
