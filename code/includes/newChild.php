<?php

   include_once 'dbConnection.php';
    
    $child_first = mysqli_real_escape_string($conn, $_POST['child_first']);
    $child_last = mysqli_real_escape_string($conn, $_POST['child_last']);
    $child_email = mysqli_real_escape_string($conn, $_POST['child_email']);
    
   
    
    $new_child_sql = "insert into family (family_first, family_last, family_email, family_fid, family_pwd) values
    ('$child_first', '$child_last', '$child_email', 'child', 'child');";
    mysqli_query($conn, $new_child_sql);    

    
    header("Location: ../index.php?added=success");
    
?>