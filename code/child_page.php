<?php include_once "./includes/navbar.php";?>
<?php include 'includes/autoloader.inc.php';

?>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

td, th {
  border: 2px solid #dddddd;
  text-align: left;
  padding: 2px;
  
}

tr:nth-child(even) {
  
}
</style>

<html>
    <head>
     <script>
function showUser(str) {
  if (str == "") {
    document.getElementById("data").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("data").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","child.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>   
        <meta charset="UTF-8">
        <title>Child Page</title>
    </head>
    <body onload="setTimeout(window.location.reload,5000)" style="background-color:lightgoldenrodyellow">
        <center>
            
            <?php
            $userId = $_SESSION['uid'];
            $nam = $_SESSION['name'];
            echo "<h1>$nam's page</h1>";
            ?>
            
            
           
           <div>
                
                <h3>Edit, Delete or Add Deadlines</h3>
                
                <form id="cruds" action="includes/actions.php" method="POST">
                    
                    
                    <?php
                     $deadIds = new UsersView();
                     
                     
                     $result = $deadIds->showAllDeadlineIds();
                    
                    ?>
                        
                 
                    <select name="users" id="users" onchange="showUser(this.value)">
                        
                        <option id="select_value">select deadline</option>
                        <?php
                        foreach ($result as $output) {
                        ?>
                        <option><?php echo $output['deadline_id'];?></option>
                        <?php }?>
                    </select>
                    <div id="data" > 
                        
                        <?php echo'
                        &emsp; &emsp;
                        deadline id &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;
                        family id  &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;
                        deadline  &emsp;&emsp; &emsp; &emsp;&emsp;&emsp; &emsp;
                        start  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        time &emsp;&emsp;&emsp; &emsp;&emsp; &emsp;&emsp;
                        comments  &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;
                        notes&emsp; &emsp;&emsp; &emsp;&emsp; <br>';
                        $faId = $_SESSION['uid'];
                        ?>
                        
                        <input type='text'  name='selectId' id='selectId' value=''   readonly='true'>
                        <input type='text'  name='familyId' id='familyId' value='<?php echo $faId?>' size='28'    readonly='true'>
                        <input type='text'  name='deadline' id='deadline' value='' size='28'>
                        <input type='datetime-local' min="<?php echo date("Y-m-d"); ?>" name='start' id='start' value=''>
                        <input type='text'  name='comment' id='comment' value='' size='28'>
                        <input type='text'  name='note' id='note' value='' size='28'>
                           
                    </div>
                    
                    <input type="submit" id="btnEdit" name="btnEdit" type="submit" value="UPDATE"/>
                    <input type="submit" id="btnDelete" name="btnDelete"  type="submit" value="DELETE"/>
                    <input type="submit" id="btnAdd" name="btnAdd"  type="submit" value="ADD NEW"/>
                    
                   
                    
                </form>
            </div> 
    
	<table>
        
     
        <tr>	
                <th>Deadline id</th>
                <th>Family id</th>
                <th>Deadlines</th>
                <th>Start</th>
		<th>Comments</th>		
                <th>Notes</th>
           </tr>
            
            
            <?php $query = "SELECT * FROM deadlines WHERE family_id = $userId  order by start";
             $result1 = mysqli_query($conn, $query);
            while($row1 = mysqli_fetch_array($result1)):;
       ?>
            <tr>
                <td><?php echo $row1[0];?> </td>
                <td><?php echo $row1[1];?> </td>
                <td> <?php echo $row1[2];?> </td>
                <?php 
                if (strtotime($row1[3]) < time()) {
                      echo  "<td style='background-color:red'> $row1[3] </td>";
                }else{
                      echo  "<td style='background-color:lightgoldenrodyellow'> $row1[3] </td>";
                };?>
		<td> <?php echo $row1[4];?> </td>
                <td> <?php echo $row1[5];?> </td>
               
            </tr>
            <td><?php  endwhile; ?></td>
            
               
    <tr>
		<th>Appointment id</th>		
                <th>Family id</th>
                <th>Appointments</th>
                <th>Start</th>
		<th>Comments</th>		
                <th>Notes</th>
                
            </tr>
            <?php 
            
            
            $query = "SELECT * FROM appointments WHERE family_id = $userId  order by start ";
             $result1 = mysqli_query($conn, $query);
            while($row1 = mysqli_fetch_array($result1)):;
       ?>
          
            <tr>
                <td ><?php echo $row1[0];?> </td>
                <td ><?php echo $row1[1];?> </td>
                <td > <?php echo $row1[2];?> </td>
                <?php 
                if (strtotime($row1[3]) < time()) {
                      echo  "<td style='background-color:red'> $row1[3] </td>";
                }else{
                      echo  "<td style='background-color:lightgoldenrodyellow'> $row1[3] </td>";
                };?>
		<td > <?php echo $row1[4];?> </td>
                <td > <?php echo $row1[5];?> </td>
               
            </tr>
            <td><?php  endwhile; ?></td> 
    </table>
            <br>
             
           
           
        </center>
    
    </body>
</html>
<script>


