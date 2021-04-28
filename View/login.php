<?php 
    $title= "Login Page";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Public Log in</title>
</head>

<body background="../Asset/bg.jpg" width="100%" height="100%">
        <div>
            <br/>
            <h3 align="center">
                <font face="sans" size="4">
                    <a href="../index.html">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="login.php">LOGIN</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="registration.html">REGISTRATION</a>&nbsp;&nbsp;&nbsp;&nbsp;
                </font>
            </h3>
                </div>
                <tr>
                    <td>

                <fieldset>
                    <legend><b>Login</b></legend>
                    <table>
                        <form method="post" action="../Controller/logincheck.php">
                            <tr>
                                <td>User Name:</td>
                                <td><input type="text" name="username" placeholder="username" value="<?php if(isset($_COOKIE['username'])){ echo $_COOKIE['username'];}?>" id="userName" onkeyup="userNameValidation()"> </td>
                            </tr>
                                                     <tr>
                <td></td>
                <td id="userNameErorr">
                </td>
            </tr>
                            <tr>
                                            <td>Password</td>
                                            <td><input type="password" name="password" placeholder="password" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password'];} ?>" id="password" onkeyup="passwordValidation()"> </td>
                                        </tr>
                                                                             <tr>
                <td></td>
                <td id="passwordErorr">
                </td>
            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                            <td>
                                <input type="checkbox" name="remember" <?php if (isset($_COOKIE['username'])){ echo "checked";} ?>> Remember Me
                            </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Submit">
                                    <a href="fpass.html">Forgot Poassword?</a>
                                </td>

                            </tr>
                        </form>
                    </table>
                </fieldset>
            </td>
        </tr>
        <br><br><br><br><br>
     <script>
   function userNameValidation() {
  var username,msg ;
  username = document.getElementById("userName").value;
  if (username=="") {
          msg = "null submission";
        } 
        
          else {
           
          if (username.length<3 ) {
          msg = "must be more than 3 character";
        } 
        
          else {
            msg = " "
          } 
        }
        

        document.getElementById("userNameErorr").innerHTML = msg;
      }

      function passwordValidation() {
  var password,msg ;
  password = document.getElementById("password").value;
  if (password=="") {
          msg = "password can not be empty";
        } 
        
          else {
         
        if (password.length<8 ) {
          msg = "at least 8 character";
        } 
        
          else {
            msg = ""
          }
        }
        

        document.getElementById("passwordErorr").innerHTML = msg;
      }



</script>
        
</body>

</html>