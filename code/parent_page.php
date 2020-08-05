<?php include_once "./includes/navbar.php";?>
<style>
table,th, td {
  border: 1px solid black;
}


</style>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Parent Page</title>
    </head>
    <body style="background-color:burlywood;">
        <center>
            <h1 style="">Parent Page</h1>
      
              
	<table>
        
       <?php $query = "SELECT * FROM appointments";
             $result1 = mysqli_query($conn, $query);
            while($row1 = mysqli_fetch_array($result1)):;
       ?>
            
    <tr>
				
                <th>Family id</th>
                <th>Event</th>
                <th>Start</th>
                <th>Time</th>
		<th>Comments</th>		
                <th>Notes</th>
                
            </tr>
            <tr>
                <td align="middle"><?php echo $row1[1];?> </td>
                <td align="middle"> <?php echo $row1[2];?> </td>
                <td align="middle"> <?php echo $row1[3];?> </td>
		<td align="middle"> <?php echo $row1[4];?> </td>
                <td align="middle"> <?php echo $row1[5];?> </td>
                <td align="middle"> <?php echo $row1[6];?></td>
            </tr>
            <td><?php  endwhile; ?></td>
       
            <?php $query = "SELECT * FROM deadlines";
             $result1 = mysqli_query($conn, $query);
            while($row1 = mysqli_fetch_array($result1)):;
       ?>
            <tr>
                <td align="middle"><?php echo $row1[1];?> </td>
                <td align="middle"> <?php echo $row1[2];?> </td>
                <td align="middle"> <?php echo $row1[3];?> </td>
		<td align="middle"> <?php echo $row1[4];?> </td>
                <td align="middle"> <?php echo $row1[5];?> </td>
                <td align="middle"> <?php echo $row1[6];?></td>
            </tr>
            <td><?php  endwhile; ?></td>
            
            
    </table>
            <br>
            
            <div>
  
                <form id="crud" action="includes/add.php" method="POST">
                    <input type="text"  name="familyId" placeholder="family id"> 
                    <br><input type="text"  name="event" placeholder="event">
                    <br><input type="date"  name="start" placeholder="start"> 
                    <input type="time"  name="time" placeholder="time">
                    <br><input type="text"  name="comment" placeholder="comment"> 
                    <br><input type="text"  name="note" placeholder="note">
                    <br><button type="submit">add</button>
                </form>
            
            
            
 
 
            </div>    
            
        </center>
     
        
    </body>
</html>

