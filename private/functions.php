<?php
// url
function url_for($script_path) {
    // add the leading '/' if not present -  voeg de leidende '/' toe als deze niet aanwezig is
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}



function u($string="") {
  return urlencode($string);
}

function raw_u($string="") {
  return rawurlencode($string);
}

 ?>
