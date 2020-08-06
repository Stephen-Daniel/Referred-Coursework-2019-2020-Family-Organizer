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
        
        <meta charset="UTF-8">
        <title>Parent Page</title>
    </head>
    <body onload="setTimeout(window.location.reload,5000)" style="background-color:burlywood">
        <center>
            <h1 style="">Parent Page</h1>
      
              
	<table>
        
         
    <tr>
				
                <th>Family id</th>
                <th>Event</th>
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
                <h4>Add new appointments</h4>
                <br>
                <form id="add" action="includes/add.php" method="POST">
                    <input type="text"  name="familyId" placeholder="family id" size="28"> 
                    <br><input type="text"  name="event" placeholder="event" size="28">
                    <br><input type="date"  name="start" placeholder="start"> 
                    <input type="time"  name="time" placeholder="time">
                    <br><input type="text"  name="comment" placeholder="comment" size="28"> 
                    <br><input type="text"  name="note" placeholder="note" size="28">
                    <br>
                    <br><button type="submit">submit</button>
                </form>
            </div>    
            <div>
                <h4>Edit appointments or deadlines</h4>
                <br>
                <form id="edit" action="includes/edit.php" method="POST">
                    
                    <label for="cars">Choose a car:</label>
                    <select id="cars" name="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="fiat">Fiat</option>
                    <option value="audi">Audi</option>
                    </select>
                    <input type="submit">

                    <input type="text"  name="familyId" placeholder="family id" size="28"> 
                    <br><input type="text"  name="event" placeholder="event" size="28">
                    <br><input type="date"  name="start" placeholder="start"> 
                    <input type="time"  name="time" placeholder="time">
                    <br><input type="text"  name="comment" placeholder="comment" size="28"> 
                    <br><input type="text"  name="note" placeholder="note" size="28">
                    <br>
                    <br><button type="submit">submit</button>
                </form>
            </div> 
            <div>
                <h4>Add new appointments</h4>
                <br>
                <form id="delete" action="includes/add.php" method="POST">
                    <input type="text"  name="familyId" placeholder="family id" size="28"> 
                    <br><input type="text"  name="event" placeholder="event" size="28">
                    <br><input type="date"  name="start" placeholder="start"> 
                    <input type="time"  name="time" placeholder="time">
                    <br><input type="text"  name="comment" placeholder="comment" size="28"> 
                    <br><input type="text"  name="note" placeholder="note" size="28">
                    <br>
                    <br><button type="submit">submit</button>
                </form>
            </div> 
        </center>
     
        
    </body>
</html>

