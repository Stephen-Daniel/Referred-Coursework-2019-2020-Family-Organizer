<?php include_once "./includes/navbar.php"; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>New Child Page</title>
    </head>
    <body style="background-color:turquoise;">
        <center>
            <h1 style="">New Child Page</h1>
            
            
            <form action="includes/newChild.php" method="POST">
                <input type="text" name="child_first" placeholder="Firstname">
                <br>
                <input type="text" name="child_last" placeholder="Lastname">
                <br>
                <input type="text" name="child_email" placeholder="e-mail">
                <br>
                <input type="text" name="child" placeholder="child" disabled="true">
                <br>
                <input type="text" name="pwd" placeholder="child" disabled="true">
                <br>
                <button type="submit" name="submit">Add new child</button>
                    
            </form>
        </center>
    </body>
</html>
