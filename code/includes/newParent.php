<?php

   include_once 'dbConnection.php';
    
    $parent_first = mysqli_real_escape_string($conn, $_POST['first']);
    $parent_last = mysqli_real_escape_string($conn, $_POST['last']);
    $parent_email = mysqli_real_escape_string($conn, $_POST['email']);
    
    
    
    $new_parent_sql = "insert into family (family_first, family_last, family_email, family_fid, family_pwd) values
    ('$parent_first', '$parent_last', '$parent_email', 'parent', 'parent');";
    
    mysqli_query($conn, $new_parent_sql);    

    
    header("Location: ../index.php?added=success");
?>