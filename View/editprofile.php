<?php
  session_start();
  require_once('../Model/db.php');
  require_once('../Model/usermodel.php');
  $id = $_GET['id'];
  $connection = getConnection();
  $userr = getuserbyid($id);
  $_SESSION['id'] = $id;
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>
    index
  </title>
</head>
<body background="../Asset/bg.jpg" >
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
                <legend>EDIT PROFILE</legend>
            <form class="" action="../Controller/editprofilevalidation.php" method="post">
               <table>
               <tr>
                <td>Name</td> 
                <td>:<input type="text" name="name" value="<?php echo $userr['name'] ?>" required="required"></td>
               </tr>
               <tr><td><hr></td></tr>
               <tr>
                <td>Email</td> 
                <td>:<input type="email" name="email" value="<?php echo $userr['email'] ?>" required="required"></td>
               </tr>
               <tr><td><hr></td></tr>
               <tr>
                <td>User Name</td> 
                <td>:<input type="text" name="username" value="<?php echo $userr['username'] ?>" required="required"></td>
               </tr>
               </table>
                <hr>
                <input type="submit" name="submit" value="Submit">
            </form>
            </fieldset>
        </td>
      </tr>
    </table>

  </body>
</html>