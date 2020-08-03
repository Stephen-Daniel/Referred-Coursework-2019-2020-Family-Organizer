<?php include_once "./includes/navbar.php"; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>New Parent Page</title>
    </head>
    <body style="background-color:turquoise;">
        <center>
            <h1 style="">New Parent Page</h1>
            
            
            <form action="includes/newParent.php" method="POST">
                <input type="text" name="first" placeholder="Firstname">
                <br>
                <input type="text" name="last" placeholder="Lastname">
                <br>
                <input type="text" name="email" placeholder="e-mail">
                <br>
                <input type="text" name="parent" placeholder="Parent" disabled="true">
                <br>
                <input type="text" name="pwd" placeholder="Admin" disabled="true">
                <br>
                <button type="submit" name="submit">Add new parent</button>
                    
            </form>
        </center>
    </body>
</html>
