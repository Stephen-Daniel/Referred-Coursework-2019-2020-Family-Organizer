

<?php

if (isset($_POST['login_submit'])) {

  require 'dbConnection.php';

  $name = $_POST['login_name'];
  $password = $_POST['login_password'];

  // Then we perform a bit of error handling to make sure we catch any errors made by the user. Here you can add ANY error checks you might think of! I'm just checking for a few common errors in this tutorial so feel free to add more. If we do run into an error we need to stop the rest of the script from running, and take the user back to the login form with an error message.

  // We check for any empty inputs. (PS: This is where most people get errors because of typos! Check that your code is identical to mine. Including missing parenthesis!)
  if (empty($name) || empty($password)) {
    header("Location: ../index.php?error=emptyfields&mailuid=".$name);
    exit();
  }
  else {

    $sql = "SELECT * FROM family WHERE family_fid=? OR family_pwd=?;";
    
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      
      header("Location: ../index.php?error=sqlerror");
      exit();
    }
    else {

      mysqli_stmt_bind_param($stmt, "ss", $name, $password);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $row = mysqli_fetch_assoc($result);
       
       
      if (($row['family_pwd'] == $password) && ($row['family_fid'] == $name)) {
        
          session_start();
          
          $_SESSION['id'] = $row['family_fid'];
          $_SESSION['parentOrChild'] = $row['family_fid'];
          header("Location: ../main_page.php?login=success $name");
          
          exit();
          
        }else{
       
          header("Location: ../index.php?error=wrongpwd");
          exit();
        
      }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
  }
  
} else {
  // If the user tries to access this page an inproper way, we send them back to the signup page.
  header("Location: ../index.php");
  exit();
}