<?php include 'includes/header.php'; ?>

<form>
  <textarea class="yazi_alani" placeholder="Bir şeyler yaz" id="yazi_alani"></textarea>

  <input type="submit" class="yazi_butonu" value="Paylaş" id="paylas_butonu">
  <div class="clear"></div>
  
</form>


<div class="posts">

  <?php for ($i = 1; $i <= 30; $i++) { ?>
  <div class="post">MERHABA PAÜSİBER</div>
  <?php } ?>

  <div class="clear"></div>

</div>
<?php include 'includes/footer.php'; ?>
