<?php include 'includes/autoloader.inc.php'?>
<?php

include "includes/dbConnection.php";

$q = intval($_GET['q']);


if (!$conn) {
  die('Could not connect: ' . mysqli_error($conn));
}


if (isset($_POST["childUser"])){
    
 mysqli_select_db($conn,"ajax_demo");
$sql="SELECT * FROM deadlines WHERE deadline_id = '".$q."'";
$result = mysqli_query($conn,$sql);   
    
    
}else{
mysqli_select_db($conn,"ajax_demo");
$sql="SELECT * FROM appointments WHERE appointment_id = '".$q."'";
$result = mysqli_query($conn,$sql);
}

   
                    
while($row = mysqli_fetch_array($result)) {
$fam = $row['family_id'];
$app = $row['appointment'];


$start = $row['start'];

$comment = $row['comment'];
$note = $row['note'];



echo'&emsp; &emsp;
     appointment id &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;
     family id  &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;
     appointment  &emsp;&emsp; &emsp; &emsp;&emsp;&emsp; &emsp;
     start  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
     time &emsp;&emsp;&emsp; &emsp;&emsp; &emsp;&emsp;
     comments  &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;
     notes&emsp; &emsp;&emsp; &emsp;&emsp; <br>';
$dateNow = date("Y-m-d");
echo "<input type='text'  name='selectId' id='selectId' value='$q' readonly='true'>";
echo "<input type='text'  name='familyId' id='familyId' value='$fam' size='28'>"; 
echo "<input type='text'  name='appointment' id='appointment' value='$app' size='28'>";
echo "<input type='datetime-local'   name='start' id='start' value='$start'>";

echo "<input type='text'  name='comment' id='comment' value='$comment' size='28'>";


                if (strtotime($start) < time()) {
                      echo  "<input type='text'  name='note' id='note' value='$note' size='28'></td>";
                }else{
                      echo  "<input type='text'  name='note' id='note' value='$note' size='28'  readonly='true'>";
                };


//echo "<input type='text'  name='note' id='note' value='$note' size='28'  readonly='true'>";
  
   }
                    

mysqli_close($conn);
?>
