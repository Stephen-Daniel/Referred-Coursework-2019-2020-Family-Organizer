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
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery.min.js"></script>
  <script src="jquery.tabledit.min.js"></script>
  <script src="jquery.tabledit.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
 
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
      <a id="calendar" class="nav-link" href="api_page.php" style="color:pink">API</a>
    </li>
	
  </ul>
</nav>

</body>
<?php include_once "footer.php"; ?>
</html>

