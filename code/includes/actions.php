<?php

include_once 'dbConnection.php';
   
    
    $deadlineId = mysqli_real_escape_string($conn, $_POST['selectId']);
    $familyId = mysqli_real_escape_string($conn, $_POST['familyId']);
    $deadline = mysqli_real_escape_string($conn, $_POST['deadline']);
    $start = mysqli_real_escape_string($conn, $_POST['start']);
    
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);
    $note = mysqli_real_escape_string($conn, $_POST['note']);
    
   
    
    if (isset($_POST["btnAdd"])){
        
    
        
        
        // "Save Changes" clicked
        $sql = "INSERT INTO deadlines (family_id, deadline, start, time, comment, note) values
          ('$familyId', '$deadline', '$start', '$comment','$note');";
        
        
        } else if (isset($_POST["btnEdit"])){
         // "edit" clicked
            
            
       $sql = "UPDATE deadlines SET family_id='$familyId', deadline='$deadline', start='$start', comment='$comment', note='$note' WHERE deadline_id='$deadlineId'";
          
            
            
            }else if (isset($_POST["btnDelete"])){
         // "Delete" clicked
                
            
            
        $sql = "DELETE FROM deadlines WHERE deadline_id='$deadlineId'";
                
                
            }else{
                
                
        header("Location: ../child_page.php?added=error1");
    }
    
    
    if (mysqli_query($conn, $sql)){
        
      header("Location: ../child_page.php?added=success");  
    }else{
        header("Location: ../child_page.php?added=error2");
    }
    