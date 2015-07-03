<?php
require_once('phpcheck.php');
CheckPHPVersion();
?>

<!DOCTYPE html>
<html lang="it"> 
  <head>
        <style type="text/css">
    body {
        background-color: yellow;
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
    <title>FilesCode Configuration</title>
  </head>
  <body>
    <div style="font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif; width: 600px; margin: 5em auto;padding: 50px;background-color: #fff;border-radius: 1em;">
      <h1>Step 1 of FilesCode Configuration</h1>
      <form method="post" action="step2.php?id=<?php print md5(uniqid(rand)); ?>">
        <p>Insert here the password you would do like to use to access at the FilesCode Dashboard: </p>
        <input type="password" name="access_password" id="access_password">
        <input type="submit" value="Next Step >" id="new" action="new" name="new" setup.form()="https://ramondettidavide.com" onClick="alert('Press OK To Continue'); "> 
      </form>
      <p>Powered by <a href="https://ramondettidavide.com" target="_blank">RamondettiDavide Spa</a> di Davide Ramondetti</p>
    </div>
  </body>
</html>
