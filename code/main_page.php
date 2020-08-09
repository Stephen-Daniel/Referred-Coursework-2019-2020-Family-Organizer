
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
       
       $testObj = new Test();
       
        $testObj->getAppointmentIds();
        
        if (!isset($_SESSION['id'])) {
          echo '<form action="includes/login.php" method="POST">
                <input type="text" name="login_name" placeholder="login name">
                <input type="text" name="login_password" placeholder="login password">
                <button type="submit" name="login_submit">Login</button>
            </form>';
          
        }
        else if (isset($_SESSION['id'])) {
          echo '<form action="includes/logout.php" method="post">
            <button type="submit" name="login-submit">Logout</button>
          </form>';
         $results = $_SESSION['parentOrChild'];
         echo $results;

        }
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
