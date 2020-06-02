<!DOCTYPE html>
<html>
    <head>
    <title>Connection</title>
    <link rel="stylesheet" href="../CSS/connect.css">
    </head>
    <body>
      <div class="box">
      <h1>Connection</h1>

    <form action="/action_page.php" method="post">
     

    <div class="container">
    <label for="uname"><b>Pseudo</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Mots de passe</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Ne pas oublié ?
    </label>
     </div>

     <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onclick="window.location.href = '../index.php'">annulé</button>
    <span class="psw">oublié <a href="#">password?</a></span>
     </div>
    </div>
       
    </body>
</html>