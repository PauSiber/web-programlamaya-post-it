<?php include 'includes/header.php'; ?>

<?php if (oturum_acildi_mi()) { ?>

<form method="POST">
  <textarea class="yazi_alani" name="yazi" placeholder="Bir şeyler yaz" id="yazi_alani"></textarea>

  <input type="submit" class="yazi_butonu" name="yazi_butonu" value="Paylaş" id="paylas_butonu">
  <div class="clear"></div>

</form>

<?php yazi_kayit(); ?>


<?php } ?>


<div class="posts">


  <?php
  global $db;
  $query = $db->query("SELECT * FROM postlar ORDER BY Post_ID DESC");

  while($cek = $query->fetch()) { ?>
  <div class="post"><?php echo $cek['Post']; ?></div>

  <?php } ?>
  <div class="clear"></div>

</div>
<?php include 'includes/footer.php'; ?>
