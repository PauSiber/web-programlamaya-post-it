<?php

// Verileri çektir. Beni $_POST yazmaktan kurtar.
function post($parametre) {
  return filter($_POST[$parametre]);
}

function filter($veri) {
  return htmlspecialchars(trim($veri));
}
