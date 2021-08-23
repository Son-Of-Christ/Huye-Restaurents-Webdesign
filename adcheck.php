<?php
include("connect.php");
session_start();



else
{


$sql="select* from message ";
$result=mysqli_query($db,$sql);
?>

   <table border="1">
      <tr>
         <th>Code </th>
         <th>Firstname </th>
         <th>Lastname </th>
         <th>Email </th>
         <th>Message </th>
     </tr> 

<?php
  while($row=mysqli_fetch_array($result))
  {
    echo "<tr><td>".$row['Code']."</td><td>".$row['Firstname']."</td><td>".$row['Lastname']."</td><tr>"
    .$row['Email']."</td><tr>".$row['Message']."</td><tr>";
  }
  echo("</table>");
}
?>