<!DOCTYPE html>
<html lang="en">
<?php 

include("./partials/head.php");
include("./partials/connect.php");
include("./data.php");
?>
<body>

    <form action="login.php" method="post">

    <?php
    if(isset($_GET['error'])){
      ?><p class="error"><?php echo $_GET['error'] ; ?></p>
      <?php ?>
    }
    ?>
        <div class="imgcontainer">
          <img src="./images/profile.png" alt="Avatar" class="avatar">
        </div>
      
        <div class="container">
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Email" name="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Password" name="psw" required>
      
          <button type="submit" name="login">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
      
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    
</body>






</html>