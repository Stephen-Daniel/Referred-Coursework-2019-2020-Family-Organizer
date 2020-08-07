<?php include_once "./includes/navbar.php";?>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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
            <h1 style="">Parent Page</h1><br><br><br>
      
            
           <div>
                <br>
                <h4>Edit, Delete or Add an appointments</h4>
                
                <form id="crud" action="includes/action.php" method="POST">
                    
                    
                    <?php $query = "SELECT appointment_id from appointments";
                     $result = mysqli_query($conn, $query);
                    
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
                        
                        <input type='text'  name='selectId' id='selectId' value=''>
                        <input type='text'  name='familyId' id='familyId' value='' size='28'>
                        <input type='text'  name='appointment' id='appointment' value='' size='28'>
                        <input type='date'  name='start' id='start' value=''>
                        <input type='time'  name='time' id='time' value=''>
                        <input type='text'  name='comment' id='comment' value='' size='28'>
                        <input type='text'  name='note' id='note' value='' size='28'>
                        
                    </div>
                    <input type="submit" id="btnClear" name="btnClear" type="submit" value="CLEAR" onclick="clear()"/>
                    <input type="submit" id="btnEdit" name="btnEdit" type="submit" value="EDIT"/>
                    <input type="submit" id="btnDelete" name="btnDelete"  type="submit" value="DELETE"/>
                    <input type="submit" id="btnAdd" name="btnAdd"  type="submit" value="ADD"/>
                    
                   
                    
                </form>
            </div> 
               
            
            
         <br><br><br>     
	<table>
        
         
    <tr>
		<th>Appointment id</th>		
                <th>Family id</th>
                <th>Appointments</th>
                <th>Start</th>
                <th>Time</th>
		<th>Comments</th>		
                <th>Notes</th>
                
            </tr>
            <?php $query = "SELECT * FROM appointments";
             $result1 = mysqli_query($conn, $query);
            while($row1 = mysqli_fetch_array($result1)):;
       ?>
          
            <tr>
                <td ><?php echo $row1[0];?> </td>
                <td ><?php echo $row1[1];?> </td>
                <td > <?php echo $row1[2];?> </td>
                <td > <?php echo $row1[3];?> </td>
		<td > <?php echo $row1[4];?> </td>
                <td > <?php echo $row1[5];?> </td>
                <td > <?php echo $row1[6];?></td>
            </tr>
            <td><?php  endwhile; ?></td>
        <tr>	
                <th>Deadline id</th>
                <th>Family id</th>
                <th>Deadlines</th>
                <th>Start</th>
                <th>Time</th>
		<th>Comments</th>		
                <th>Notes</th>
           </tr>
            
            
            <?php $query = "SELECT * FROM deadlines";
             $result1 = mysqli_query($conn, $query);
            while($row1 = mysqli_fetch_array($result1)):;
       ?>
            <tr>
                <td><?php echo $row1[0];?> </td>
                <td><?php echo $row1[1];?> </td>
                <td> <?php echo $row1[2];?> </td>
                <td> <?php echo $row1[3];?> </td>
		<td> <?php echo $row1[4];?> </td>
                <td> <?php echo $row1[5];?> </td>
                <td> <?php echo $row1[6];?></td>
            </tr>
            <td><?php  endwhile; ?></td>
            
            
    </table>
            <br>
             
           
           
        </center>
    
    </body>
</html>
<script>
function clear(){
    document.getElementById("familyId").value = "";
    document.getElementById("appointment").value = "";
    document.getElementById("start").value = "";
    document.getElementById("time").value = "";
    document.getElementById("comment").value = "";
    document.getElementById("note").value = "";
    
}</script>


