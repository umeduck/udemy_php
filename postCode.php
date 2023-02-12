<?php
$postalCode = '123-4567';

function checkPostalCode($code){
  $repleaced = str_replace('-', '', $code);
  $length = strlen($repleaced);

  if($length === 7){
    return true;
  }else{
    return false;
  }
}
var_dump(checkPostalCode($postalCode));
?>