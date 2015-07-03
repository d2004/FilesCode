<?php
require_once('phpchecker.php');
CheckPHPVersion();
if (!file_exists('pass.txt')) {
  exit('creating error'); 
}
if (!file_exists('/FilesCode/install/')) {
  header('location: dashboard.php'); 
}
if ($_GET['auto'] == 1) {
  unlink("/FilesCode/install"); 
  echo "Operation finished. You are be redirected to dashboard"; 
  header('refresh: 2; URL=/FilesCode/dashboard.php');
} 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Next Steps Before Accessing the Dashboard</title>
  </head>
  <body>
    <p>Step 1: Verify if in the root exist the file dashboard.php</p>
    <p style="font-color:red;">Step 2: Delete the <b>install</b> directory</p>
    <p>Step 3: <a href="step3.php?reload=1">Reload this page</a></p> 
    <p>Or for automatic steps, <a href="step3.php?auto=1">Click here</a></p>
  </body>
</html>
