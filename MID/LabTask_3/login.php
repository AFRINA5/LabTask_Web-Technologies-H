<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
    <?php
     $username =  $password =$usernameErr =$passwordErr= "";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["username"]))
        {
            $usernameErr = "Username Required";
        }

        else 
        {
            $username = $_POST["username"];

            if(!preg_match("/^[a-zA-Z-' ]*$ _/",$username)){
                $usernameErr = "Can contain a-z,A-Z,period,dash only";
            }

            else
            {
                $usernameErr = "";
            }
        }

        if(empty($_POST["password"]))
        {
            $passwordErr = "password required";
        }
        else
        {
            $password = $_POST ["password"];

            if(!preg_match("/^(?=.*?[A-Za-z])(?=.*?[$@#%]).{8,}$/",$_POST["password"]))
            {
            $passwordErr = "Password must contain  special character and  must 8 characters password";
            }
            else
            {
                $passwordErr = "";
            }
        }
    }
    ?>
    
    <br>
    <br>
    <br>
    <br>
    <br><br><br><br><br><br><br><br><br>
     <form method = "POST" align="center" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class = "my form">
     
     <hr class = "line">
       <div class = "username">
         <label for="">Username: </label>
         <input type="text" name = "username">
         <span class = "error">
         <?php echo $usernameErr;?>
        </span>
         <br> <br>
       

    <div class = "password" >
           <label for="">Password:  </label>
           <input type="password" name = "password" >
           <span class = "error">
         <?php echo $passwordErr;?>
           </span>
        <br> <br>
         </div>

<hr class = "line">
    <div class = "remember">
        <input type="checkbox"> Remember Me
        <br> <br>
    </div>

    <input type="submit" class = "submit" value = "Submit">
    <span> <a href="forgot.php">Forgot password?</a> </span>

     </div>
</form>

<?php
    echo $username,$password;
?>


        
    </body>
</html>