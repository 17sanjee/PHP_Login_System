<?php
session_start();
?>
<!DOCTYPE html >
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="This an Example for Meta Description.This will shown up in search Results.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
     
        <header>
            <nav class="nav-header-main">
                <a class="header-logo" href="index.php">
                    <img src="./img/logo.png" alt="mmtuts logo">
                </a>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Contact Me</a></li>
                </ul>
            </nav>
            <div class="header-login">
                <?php
                       if (isset($_SESSION['userId'])) {
                        echo '<form action="includes/logout.inc.php" method="post">
                        
                              <button type="submit" name="logout-submit">Logout</button>

                              </form>';
      
                       }
                       else{
                        echo '<form action="includes/login.inc.php" method="post">
                             <input type="text" name="mailuid" placeholder="Username">
                            <input type="password" name="pwd" placeholder="password">
                            <button type="submit" name="login-submit">Login</button>

                            </form>
                            <a href="signup.php" class="header-signup">Signup</a>';
                       }
                ?>
                    
                    
            </div>
            


        </header> 
</html>