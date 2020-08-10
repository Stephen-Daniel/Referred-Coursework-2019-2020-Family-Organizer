
<?php

include "includes/dbConnection.php";





$q = intval($_GET['q']);


if (!$conn) {
  die('Could not connect: ' . mysqli_error($conn));
}

 
 mysqli_select_db($conn,"ajax_demo");
$sql="SELECT * FROM deadlines WHERE deadline_id = '".$q."' ORDER BY start ASC";
$result = mysqli_query($conn,$sql);   
    

                    
while($row = mysqli_fetch_array($result)) {
$fam = $row['family_id'];
$dead = $row['deadline'];
$start = $row['start'];
$comment = $row['comment'];
$note = $row['note'];


echo'
                        &emsp; &emsp;
                        deadline id &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;
                        family id  &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;
                        deadline  &emsp;&emsp; &emsp; &emsp;&emsp;&emsp; &emsp;
                        start  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        time &emsp;&emsp;&emsp; &emsp;&emsp; &emsp;&emsp;
                        comments  &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;
                        notes&emsp; &emsp;&emsp; &emsp;&emsp; <br>';

echo "<input type='text'  name='selectId' id='selectId' value='$q'>";
echo "<input type='text'  name='familyId' id='familyId' value='$fam' size='28'>"; 
echo "<input type='text'  name='deadline' id='deadline' value='$dead' size='28'>";
echo "<input type='datetime-local'  name='start' id='start' value='$start'>";

echo "<input type='text'  name='comment' id='comment' value='$comment' size='28'>";
echo "<input type='text'  name='note' id='note' value='$note' size='28'>";
  
   }
                    

mysqli_close($conn);
?>
