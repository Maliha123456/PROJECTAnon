<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>
    index
  </title>
</head>
<body background="../Asset/bg.jpg">
    <div>
      <br />
      <h3 align="center">
        <font face="sans" size="4">
          <a href="profile.php">BACK</a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="../index.html">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="../Controller/logout.php">LOGOUT</a>&nbsp;&nbsp;&nbsp;&nbsp;
        </font>
      </h3>
    </div>

    <td>
      <fieldset>
        <legend>CHANGE PASSWORD</legend>
        <form class="" action="../Controller/passcheck.php" method="post">
            <table>
            <tr>
            <td>New Password</td>
            <td>:<input type="password" name="password" value="" required="required"></td>
            </tr>
            <tr>
            <td>Retype New Password</td>
            <td>:<input type="password" name="renewpassword" value="" required="required"></td>
            </tr>
            </table>
            <hr>
            <input type="submit" name="submit" value="Submit"><br>
        </form>
        <ul>
                    <li><a href="showpass.php">Show Pass</a></li>
                  </ul>
            </fieldset>
        </td>
      </tr>
  </body>
</html>


<?php

  }else{
    header('location:Login.html');
  }

?>
