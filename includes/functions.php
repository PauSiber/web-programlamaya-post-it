<?php

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
