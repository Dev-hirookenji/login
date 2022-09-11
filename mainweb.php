<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="mainweb.css" />
    <style>
      <?php include "mainweb.css" ?>
    </style>
    <title>Rec.Games</title>
</head>
<body>
    <header>
        <div class="top-nav">
            <nav>
                <ul>
                    <li><a href="mainweb.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Games</a></li>
                    <li><a href="#">Why</a></li>
                    <li><a href="signup.php">Logout</a></li>
                </ul>
            </nav>  
        </div>  
    </header>  
    <div class="start-container">
        <div class="header">
                <h1>Hi! I'm Mark.</h1>
            <div class="me-container">
             <p class="me">I'm an aspiring Web Developer</p>
             <p class="me">I play games during my free time when I'm done studying.</p>
            </div>        
        </div>
    </div>
    <div class="games-container">
        
    </div>
</body>
</html>