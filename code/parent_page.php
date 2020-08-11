<?php include_once "includes/navbar.php";?>
<?php include 'includes/autoloader.inc.php'?>
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
    xmlhttp.open("GET","getuser.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>   
        <meta charset="UTF-8">
        <title>Parent Page</title>
    </head>
    <body onload="setTimeout(window.location.reload,5000)" style="background-color:burlywood">
        <center>
            
            <?php
            $nam = $_SESSION['name'];
            echo "<h1>$nam's page</h1>";
            ?>
            
            
           <div>
                <h3>Edit, Delete, Add new or Add notes. appointments</h3>
                
                <form id="crud" action="includes/action.php" method="POST">
                    
                    
                      <?php
                      $appIds = new UsersView();
                      $result = $appIds->showAllAppointmentIds();
                      ?>
                 
                    <select name="users" id="users" onchange="showUser(this.value)">
                        
                        <option id="select_value">select appointment</option>
                        <?php
                        foreach ($result as $output) {
                        ?>
                        <option><?php echo $output['appointment_id'];?></option>
                        <?php }?>
                    </select>
                    <div id="data" >
                        <?php echo'
                        &emsp; &emsp;
                        appointment id &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;
                        family id  &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;
                        appointment  &emsp;&emsp; &emsp; &emsp;&emsp;&emsp; &emsp; 
                        start  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        time &emsp;&emsp;&emsp; &emsp;&emsp; &emsp;&emsp;
                        comments  &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;
                        notes&emsp; &emsp;&emsp; &emsp;&emsp; <br>'
                        ?>
                        
                        <input type='text'  name='selectId' id='selectId' value=''  readonly='true'>
                        <input type='text'  name='familyId' id='familyId' value='' size='28'>
                        <input type='text'  name='appointment' id='appointment' value='' size='28'>
                        <input type='datetime-local' min='<?php echo date("Y-m-d"); ?>T00:00' name='start' id='start' value=''>
                        <input type='text'  name='comment' id='comment' value='' size='28'>
                        <!--disable note has to be in the past.-->
                        <input type='text'  name='note' id='note' value='' size='28'  readonly='true'>
                        
                    </div>
                    <input type="submit" id="btnClear" name="btnClear" type="submit" value="CLEAR" onclick="clear()"/>
                    <input type="submit" id="btnEdit" name="btnEdit" type="submit" value="UPDATE"/>
                    <input type="submit" id="btnDelete" name="btnDelete"  type="submit" value="DELETE"/>
                    <input type="submit" id="btnAdd" name="btnAdd"  type="submit" value="ADD NEW"/>
                    
                   
                    
                </form>
            </div> 
   
	<table>
        
         
    <tr>
		<th>Appointment id</th>		
                <th>Family id</th>
                <th>Appointments</th>
                <th>Start</th>
                
		<th>Comments</th>		
                <th>Notes</th>
                
            </tr>
            <?php 
            // hard to workout the code
            $query = "SELECT * FROM appointments order by start";
             $result1 = mysqli_query($conn, $query);

            while($row1 = mysqli_fetch_array($result1)):;
       ?>
          
            <tr>
                <td ><?php echo $row1[0];?> </td>
                <td ><?php echo $row1[1];?> </td>
                <td > <?php echo $row1[2];?> </td>
                <!--is the date in the past-->
                
                <?php 
                if (strtotime($row1[3]) < time()) {
                      echo  "<td id='appPast' name='appPast' style='background-color:red'> $row1[3] </td>";
                }else{
                      echo  "<td  id='appPast' name='appPast' style='background-color:burlywood'> $row1[3] </td>";
                };?>
		<td > <?php echo $row1[4];?> </td>
                <td > <?php echo $row1[5];?> </td>
                
            </tr>
            <td><?php  endwhile; ?></td>
        <tr>	
                <th>Deadline id</th>
                <th>Family id</th>
                <th>Deadlines</th>
                <th>Start</th>
                
		<th>Comments</th>		
                <th>Notes</th>
           </tr>
            
            
            <?php $query = "SELECT * FROM deadlines order by start";
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
                      echo  "<td style='background-color:burlywood'> $row1[3] </td>";
                };?>
		<td> <?php echo $row1[4];?> </td>
                <td> <?php echo $row1[5];?> </td>
                
            </tr>
            <td><?php  endwhile; ?></td>
            
            
    </table>
            <br>
             
           
           
        </center>
    
    </body>
</html>

