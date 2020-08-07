
<?php

include "includes/dbConnection.php";





$q = intval($_GET['q']);


if (!$conn) {
  die('Could not connect: ' . mysqli_error($conn));
}

 
 mysqli_select_db($conn,"ajax_demo");
$sql="SELECT * FROM deadlines WHERE deadline_id = '".$q."'";
$result = mysqli_query($conn,$sql);   
    

                    
while($row = mysqli_fetch_array($result)) {
$fam = $row['family_id'];
$dead = $row['deadline'];
$start = $row['start'];
$time = $row['time'];
$comment = $row['comment'];
$note = $row['note'];

echo "<input type='text'  name='selectId' id='selectId' value='$q'>";
echo "<input type='text'  name='familyId' id='familyId' value='$fam' size='28'>"; 
echo "<input type='text'  name='deadline' id='deadline' value='$dead' size='28'>";
echo "<input type='date'  name='start' id='start' value='$start'>";
echo "<input type='time'  name='time' id='time' value='$time'>";
echo "<input type='text'  name='comment' id='comment' value='$comment' size='28'>";
echo "<input type='text'  name='note' id='note' value='$note' size='28'>";
  
   }
                    

mysqli_close($conn);
?>
