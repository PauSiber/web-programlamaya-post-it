<?php include 'includes/header.php'; ?>
<form method="POST" class="uyelik_formu">

  <label>Kullanıcı Adı:</label>
  <input type="text" name="kullanici_adi" class="uyelik_texti" placeholder="Kullanıcı Adınızi Giriniz">

  <label>Mail Adresi:</label>
  <input type="text" name="mail" class="uyelik_texti" placeholder="Mail adresiniz">

  <label>Şifre:</label>
  <input type="password" name="sifre" class="uyelik_texti" placeholder="Şifrenizi seçiniz">

  <input type="submit" value="Kayıt Ol" class="yazi_butonu">

</form>

<?php

if ($_POST) {

$veri = array(post('kullanici_adi'), post('mail'), post('sifre'));

if (!in_array("", $veri)) {
  global $db;
  $query = $db->prepare("INSERT INTO uyeler SET
    Kullanici_Adi = ?, Mail = ?, Sifre = ?");
    $query->execute($veri);

  }
}

?>





<?php include 'includes/footer.php'; ?>
