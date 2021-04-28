<?php
  require_once('../Model/usermodel.php');
  
  $users =   getissues();

      

     
      $data = '<table border="1">
      <tr>
          <td align = center><b>Car Name</b></td>
          <td align = center><b>Car Type</b></td>
          <td align = center><b>Quantity</b></td>
          <td align = center><b>Price</b></td>
            <td align = center><b>Progress</b></td>
      </tr>';

      for($i=0; $i < count($users); $i++) {
          $data .= "<tr>
                    <td align = center>{$users[$i]['Username']}</td>
                    <td align = center>{$users[$i]['User Type']}</td>
                    <td align = center>{$users[$i]['Priority']}</td>
                    <td align = center>{$users[$i]['Comments']}</td>
                    <td align = center>{$users[$i]['Progress']}</td>
                </tr>";
                

  
      }
      $data .= "</table>";
      echo $data;
?>