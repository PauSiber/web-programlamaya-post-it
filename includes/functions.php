<?php
session_start();
// Verileri çektir. Beni $_POST yazmaktan kurtar.
function post($parametre) {
  return filter($_POST[$parametre]);
}

function filter($veri) {
  return htmlspecialchars(trim($veri));
}

function uye_kaydi() {
  if ($_POST) {
  $veri = array(post('kullanici_adi'), post('mail'), post('sifre'));
  if (!in_array("", $veri)) {
    global $db;
    $query = $db->prepare("INSERT INTO uyeler SET
      Kullanici_Adi = ?, Mail = ?, Sifre = ?");
      $query->execute($veri);
    }
  }
}

function uye_girisi() {
  if ($_POST) {
    $ad = post("kullanici_adi");
    $sifre = post("sifre");

    global $db;
    $query = $db->prepare("SELECT * FROM uyeler
      WHERE Kullanici_Adi = ? AND Sifre = ?");
    $query->execute(array($ad, $sifre));

    $row = $query->fetch();
    if ($row) {
      oturum_ac($row['Kullanici_ID'], $ad);
    }
  }
}

function verileri_cek() {
  global $db;
  $query = $db->query("SELECT * FROM postlar");
  return $query->fetch();
}

function yazi_kayit() {
  if ($_POST) {
    global $db;
    $yazi = post("yazi");
    $id = $_SESSION['ID'];

    $query = $db->prepare("INSERT INTO postlar
        SET Post_Sahibi = ?, Post = ?");
      $query->execute(array($id, $yazi));

  }
}

function oturum_ac($uye_id, $kullanici_adi) {
  // session_start();
  $_SESSION['ID'] = $uye_id;
  $_SESSION['USERNAME'] = $kullanici_adi;
  header("Location: index.php");
}

function oturum_acildi_mi() {
  $sonuc = 0;
  if (isset($_SESSION['ID']) && $_SESSION['USERNAME']) {
    $sonuc = 1;
  }
  return $sonuc;
}


/*
function uye_varmi($uye) {
  global $db;
  $result = 0;
  $query = $db->prepare("SELECT Kullanici_ID FROM uyeler WHERE Kullanici_Adi = ?");
  $query->execute(array($uye));
  $row = $query->rowCount();
  if($row)
  {
      $result = $query->fetch();
      $result = $result['Kullanici_ID'];
  }
  return $result;
}

$ad = "gurkan";
echo uye_varmi($ad);
*/
