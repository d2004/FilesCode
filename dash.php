<?php
require_once('phpcheck.php'); 
if (CheckPHPVersion() == false) {
  exit('Upgrade the PHP version and reinstall FilesCode.');
}
if (file_exists('install')) {
  exit('Is necessary to remove the install directory');
}
if (!file_exists('pass.txt')) {
  exit('Please configure FilesCode before use');
}
if (!$_SESSION['login']) {
  header('location: dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Dashboard of FilesCode</title>
  </head>
  <body>
    <div id="body">
      <h1>FilesCode</h1>
      <p>di Davide Ramondetti</p>
      <?php if (!$_GET['file']) { echo "For use FilesCode type a special link. The variables are <b>filename</b> and <b>external</b>. An example is http://".$_SERVER['HTTP_HOST']."/FilesCode/dash.php?file=filename.php&external=x, When you have typed this link FilesCode found the code."; ?>
      <?php if ($_GET['file']) { echo "Code: <br />".file_get_contents("data://text/plain;base64,".file_get_contents($_GET['file']); } ?>
    </div>
  </body>
</html>
