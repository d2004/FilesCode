<?php 
function CheckPHPVersion() {
  if (phpversion() < 5.6.10) {
    echo "Step 1: Go to <b><a href=\'http://php.net/downloads\' target=\'_blank\'>php.net/downloads</a></b> <br /> ";
    echo "Step 2: <b>Install the last version of PHP</b><br />";
     echo "Step 3: <a href=\'install/\'>Reload this Page</a><br />";
    echo "<h1>PHP Info</h1>";
    phpinfo(); 
  }
}
?>
