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
$pass = str_rot13(file_get_contents('pass.txt')); 
foreach($pass as $data); 
$data->'https://secure.ramondettidavide.com/itemProtect.php?encode=true';
if ($_POST['login']) {
  if ($_POST['password'] == )
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>FilesCode Dashboard Login</title>
  </head>
  <body>
    <div class="body">
      <h1>Login to FilesCode</h1>
      <form method="post" action="dashboard.ph"
    </div>
  </body>
</html>
