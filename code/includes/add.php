<?php

include_once 'dbConnection.php';
    
    $add_familyId = mysqli_real_escape_string($conn, $_POST['familyId']);
    $add_event = mysqli_real_escape_string($conn, $_POST['event']);
    $add_start = mysqli_real_escape_string($conn, $_POST['start']);
    $add_time = mysqli_real_escape_string($conn, $_POST['time']);
    $add_comment = mysqli_real_escape_string($conn, $_POST['comment']);
    $add_note = mysqli_real_escape_string($conn, $_POST['note']);
    
    
    $add_sql = "insert into appointmets (family_id, appointment, start, time, comment, note) values
    ('$add_familyId', '$add_event', '$add_start', '$add_time', '$add_comment','$add_note');";
    
    mysqli_query($conn, $add_sql);    

    
    header("Location: ../index.php?added=success");