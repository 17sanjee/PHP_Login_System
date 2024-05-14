<?php
   require "header.php";
?>
<html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS file -->
   </head>
      <main>
         <div class="wrapper-main">
            <section class="section-default">
                <h1 style="text-align: center;">Signup</h1>
                <?php
                   if (isset($_GET['error'])){
                      if($_GET['error']=="emptyfields"){
                         echo '<p class="signuperror">Fill in all fields!</p>';
                      }
                      else if($_GET['error']== "invaliduidmail"){
                         echo '<p class="signuperror"> Invalid username and e-mail</p>';
                      }
                      else if($_GET['error']== "invaliduid"){
                        echo '<p class="signuperror"> Invalid username!</p>';
                     }
                     else if($_GET['error']== "invalidmail"){
                        echo '<p class="signuperror"> Invalid e-mail!</p>';
                     }
                     else if($_GET['error']== "passwordcheck"){
                        echo '<p class="signuperror"> your passwords Do noy match!</p>';
                     }
                     else if($_GET['error']== "usertaken"){
                        echo '<p class="signuperror"> User Name is already Taken!</p>';
                     }
                   }
                  //  else if ($_GET[""]== "success"){
                  //       echo '<p class="signupsuccess">Signup successful!</p>';
                  //  }
                ?>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="text" name="mail" placeholder="E-mail">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwd-repeat" placeholder="Repeat Password">
                    <button type="submit" name="signup-submit">Signup</button>
                </form>
            </section>
         </div>
      </main>

<?php
   require "footer.php";
?>
