<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


   <?php
   
   $badWord = $_GET['badword'];

    ?>

    <?php

    $paragraph = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';

    $paragraph = str_replace('adipisicing',$badWord,$paragraph);
    var_dump($_GET);

    $paragraph = str_replace($badWord,'***',$paragraph);


    ?>
    <br>
    <br>

    <p><?php echo $paragraph ?></p>

      <div class="lorem-length">
      <h1>La lunghezza della stringa è : <?php echo strlen($paragraph);?> caratteri</h1>
      </div>



  </body>
</html>
