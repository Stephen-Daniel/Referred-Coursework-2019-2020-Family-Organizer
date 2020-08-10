<?php

include_once 'dbConnection.php';
   
    
    $appointmentId = mysqli_real_escape_string($conn, $_POST['selectId']);
    $familyId = mysqli_real_escape_string($conn, $_POST['familyId']);
    $appointment = mysqli_real_escape_string($conn, $_POST['appointment']);
    $start = mysqli_real_escape_string($conn, $_POST['start']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);
    $note = mysqli_real_escape_string($conn, $_POST['note']);
    
   
    
    if (isset($_POST["btnAdd"])){
        
    
        
        
        // "Save Changes" clicked
        $sql = "INSERT INTO appointments (family_id, appointment, start, time, comment, note) values
          ('$familyId', '$appointment', '$start', '$time', '$comment','$note');";
        
        
        } else if (isset($_POST["btnEdit"])){
         // "edit" clicked
            
            
       $sql = "UPDATE appointments SET family_id='$familyId', appointment='$appointment', start='$start', time='$time', comment='$comment', note='$note' WHERE appointment_id='$appointmentId'";
          
            
            
            }else if (isset($_POST["btnDelete"])){
         // "Delete" clicked
                
            
            
        $sql = "DELETE FROM appointments WHERE appointment_id='$appointmentId'";
                
                
            }else{
                
                
      header("Location: ../parent_page.php?added=error");
    }
    
    
    if (mysqli_query($conn, $sql)){
        
      header("Location: ../parent_page.php?added=success");  
    }else{
        header("Location: ../parent_page.php?added=error");
    }
    