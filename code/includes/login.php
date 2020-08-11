

<?php

if (isset($_POST['login_submit'])) {

  require 'dbConnection.php';

  $name = $_POST['login_name'];
  $password = $_POST['login_password'];

 
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
          $_SESSION['uid'] = $row['family_id'];
          $_SESSION['name'] = $row['family_first'];
          $page = $row['family_fid'];
          header("Location: ../{$page}_page.php?login=success $name");
          
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