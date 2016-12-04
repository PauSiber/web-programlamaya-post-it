<?php include 'includes/header.php'; ?>

<?php $username = $_GET['uye'];

global $db;
$query = $db->prepare("SELECT * FROM uyeler WHERE Kullanici_Adi = ?");
$query->execute(array($username));
$row = $query->fetch();
$id = $row['Kullanici_ID'];
$ad = $row['Kullanici_Adi'];

echo $id;

?>

<div class="profil_bolumu">

  <a href="images/uyeler/sincap.jpg" id="profil_resmi">
    <img src="images/uyeler/sincap.jpg">
  </a>


  <div class="profil_bilgisi">
    <h1><?php echo $ad; ?></h1>
    <p>Buraya hakkında falan filan gelecek bgiibalşskfşldsfk</p>
  </div>

  <div class="clear"></div>
</div>


<h2>Paylaşımları (10)</h2>
<div class="posts">


  <?php
  global $db;
  $query = $db->prepare("SELECT * FROM postlar WHERE Post_Sahibi = ? ORDER BY Post_ID DESC");
  $query->execute(array($id));

  while($cek = $query->fetch()) { ?>
  <div class="post"><?php echo $cek['Post']; ?></div>

  <?php } ?>

  <div class="clear"></div>

</div>


<div class="karanlik"><img src="images/uyeler/sincap.jpg"></div>

<?php include 'includes/footer.php'; ?>
