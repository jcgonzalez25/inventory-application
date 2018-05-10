<?php 
include 'log.php'; ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="foundation-6/css/foundation.css">
    <link rel="stylesheet" href="foundation-6/css/app.css">
    <link rel="stylesheet" type="text/css" href="/fl.css"/>
   </head>

   <body>




<form class="callout text-center" method="post" action="">
  <h2> Nijo System Login</h2>
  <div class="floated-label-wrapper">
    <label for="full-name">Username  
    <?php if($userstatus == 2){
      echo "Invalid Username";
    }
    ?>
      
    </label>
    <input type="text" id="Username" name="usrin" placeholder="Username" required>
  </div>
  <div class="floated-label-wrapper">
    <label for="pass">Password</label>
    <input type="password" id="pass" name="usrpwd" placeholder="Password" required>
  </div>
  <input class="button expanded" type="submit" value="Login">
</form> 



  </body>
</html>
