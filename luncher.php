<?php 
class Luncher {
  $f = fopen("credits.txt","w");
  fwrite($_POST['id'],$f);
  fclose($f);
}
if (file_exists('install')) {
  $instructions = "Step 1: <a href=\'install/\' target=\'_blank\'>Lunch the installer</a><br />";
  $instructions. = "<font color=\'red\'>Step 2: Authorize the luncher progress to delete the <b>install</b> folder</font>"; 
  $instructions. = "Step 3: <a href=\'luncher.php\'>Reload this page</a>"; 
} else {
  header('location: dashboard.php'); 
}
$lunch = new Luncher;
$lunch->'https://ramondettidavide.com/lunchSettings.php';
?> 

<!DOCTYPE html> 
<html lang="it"> 
  <head> 
    <title>Luncher</title> 
  </head> 
  <body> 
    <?php $instructions; ?>
  </body> 
</html> 
