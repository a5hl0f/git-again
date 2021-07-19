
<?php include "comnnection.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
</head>
<body>
<table>
       <thead>
         <tr>
           <th>username</th>
           <th>password</th>
           <th>topic</th>
           <th>comment</th>
           
         </tr>
      
       </thead>
      <tbody>
    


<?php

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];


$view_topic="SELECT * FROM user ";
global $connection;
$view_query=mysqli_query($connection,$view_topic);
     while($row=mysqli_fetch_assoc($view_query)){
         $view_username=$row['username'];
         $view_password=$row['password'];
         $view_topic=$row['topic'];
         $view_comment=$row['comment'];
         if($username==$view_username && $password==$view_password){
            
                     echo "<tr>";
                     echo "<td>$view_username</td>";
                     echo "<td>$view_password</td>";
                     echo "<td>$view_topic</td>";
                     echo "<td>$view_comment</td>";
                     echo "</tr>";



    
           }else{
               echo "not found the username and password correct";
           }
     }   
}


?>
</table>
</body>
</html>