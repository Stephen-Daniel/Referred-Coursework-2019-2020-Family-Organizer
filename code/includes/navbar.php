<?php
  
  session_start();
  
  require "includes/dbConnection.php";
  
  
  
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      
    </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </head>
  <body>
   
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  
  <a class="navbar-brand" href="index.php" style="color:aquamarine">Family Organiser</a>
  
  <!-- Links -->
  <ul class="navbar-nav"> 
  
	<li class="nav-item">
      <a id="home" class="nav-link" href="index.php" style="color:aquamarine">Home</a>
    </li>
    <li class="nav-item">
      <a id="parent" class="nav-link" href="parent_page.php" style="color:burlywood">Parent</a>
    </li>
   
    <li class="nav-item">
      <a id="child" class="nav-link" href="child_page.php" style="color:lightgoldenrodyellow">Child</a>
    </li>
	<li class="nav-item">
      <a id="newParent" class="nav-link" href="new_parent_page.php" style="color:turquoise">new Parent</a>
    </li>
	<li class="nav-item">
      <a id="newChild" class="nav-link" href="new_child_page.php" style="color:pink">new Child</a>
    </li>
	<li class="nav-item">
      <a id="calendar" class="nav-link" href="datepicker.php" style="color:pink">Calendar</a>
    </li>
	
  </ul>
</nav>

</body>
<?php include_once "footer.php"; ?>
</html>

