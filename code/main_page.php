
<?php include_once "includes/navbar.php"; ?>

<?php include "includes/autoloader.inc.php"?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Main Page</title>
    </head>
    <body style="background-color:aquamarine;">
        <center>
            <h1>Family Organiser</h1>
            <br>
       
       <?php
      // $test = new UsersView();
      // $test->showUser("Stephen");
      // $test2 = new UsersContr();
      // $test2->createUser("Louise","Daniel", "louise@gmail.com", "parent", "parent");
      // $test->showUser("Louise");
        ?>    
            
            
      
          <?php
          if (!isset($_SESSION['id'])) {
            echo '<p class="login-status">You are logged out!</p>';
          }
          else if (isset($_SESSION['id'])) {
            echo '<p class="login-status">You are logged in!</p>';
          }
          ?>
           
        </center>
   
    </body>
</html>
