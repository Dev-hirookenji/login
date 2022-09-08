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
    <title>Rec.Games</title>
</head>
<body>
    <div class="top-nav">
        <nav>
            <ul>
                <li><a href="signup.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    <div class="start-container">
        <div class="header">
            <h1>Games that I recommend everyone to play</h1>
        </div>
    </div>
    <div class="content-container">
        <div class="content">
            
        </div>
    </div>
</body>
</html>