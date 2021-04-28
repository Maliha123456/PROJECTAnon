<?php
session_start();
require_once('../Model/usermodel.php');
  $connection = getConnection();
  $userlist = getAllUser();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>
    index
  </title>
</head>
<body background="images/bg.jpg">
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

<?php

    echo "<table align=center width = 50% border=1 cellspacing=15% cellpadding=15%>
    <tr>
      <td align = center><b>Name</b></td>
      <td align = center><b>Username</b></td>
      <td align = center><b>Email</b></td>
      <td align = center><b>Actions</b></td>
    </tr>";

    for($i = 0; $i<count($userlist); $i++)
    {
      echo
      "<tr>
      <td>{$userlist[$i]['name']}</td>
      <td>{$userlist[$i]['username']}</td>
      <td>{$userlist[$i]['email']}</td>
      <td> <a href='editprofile.php?id={$userlist[$i]['id']}'> Edit</a> | <a href='deleteprofile.php?id={$userlist[$i]['id']}'> Delete </a> </td>
      </tr>";
    }
    echo "</table>";

?>   
        </td>
      </tr>
    </table>

  </body>
</html>