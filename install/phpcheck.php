<?php 
function CheckPHPVersion() {
  if (phpversion() < 5.6.10) {
    header('location: index.php');  
  }
}
?>
