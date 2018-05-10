<?php 
  $username = 0;
  $myfile = fopen("uspwds.txt","r") or die("unable to open file");
  while( ($user = fgets($myfile)) !== false ){
      
      $userinfo = explode(":",$user);
      //   0 - username
      //   1 - password 
      //   2 - type of account

      if ($_POST["usrin"] == $userinfo[0] && $_POST["usrpwd"] == $userinfo[1]){      // validating user account
        if( $userinfo[2] == "admin\n"){
          $user_status = 1;
          //fclose($myfile);
          //header("Location: boss.php"); //validating the type of user         
        }
      }
  }
  if($user_status == 1){
    header("Location: boss.php");
  }else{
    $user_status = 2;
  }

?>
