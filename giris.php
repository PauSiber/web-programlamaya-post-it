<?php include 'includes/header.php'; ?>

<form method="POST" class="uyelik_formu">

  <label>Kullanıcı Adı:</label>
  <input type="text" class="uyelik_texti" name="kullanici_adi" placeholder="Kullanıcı Adınızi Giriniz">

  <label>Şifre:</label>
  <input type="password" class="uyelik_texti" name="sifre" placeholder="Şifrenizi seçiniz">


  <input type="submit" value="Giriş Yap" class="yazi_butonu">

</form>


<?php

uye_girisi();



?>


<?php include 'includes/footer.php'; ?>
