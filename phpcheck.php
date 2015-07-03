<?php 
function CheckPHPVersion() {
  if (phpversion() < 5.6.10) {
    return false;
  } else {
    return true;
  }
}
?>
