<?php
    require_once('../Model/usermodel.php');
  
  $users =   getfeedback();

        $data = '<table border="1">
            <tr>
                <td>Name</td>
                <td>Username</td>
                <td>Email</td>
                <td>Subject</td>
            </tr>';

        for($i = 0; $i < count($users); $i++)
        {
            $data .="<tr>
                     <td>{$users[$i]['name']}</td>
                     <td>{$users[$i]['username']}</td>
                     <td>{$users[$i]['email']}</td>
                     <td>{$users[$i]['subject']}</td>
                </tr>";
        }
        
$data .= "</table>";
        echo $data;

    ?>