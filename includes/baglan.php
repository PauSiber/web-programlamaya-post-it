<?php

function baglanti() {

  $host = "localhost";
  $vt_adi = "postit_vt";
  $user = "root";
  $pass = "";

  try {
    $db = new PDO("mysql:host=$host;dbname=$vt_adi;charset=UTF8",$user,$pass);
  }
  catch ( PDOException $e ) {
    print $e->getMessage();
    $db = null;
  }
  return $db;
}
