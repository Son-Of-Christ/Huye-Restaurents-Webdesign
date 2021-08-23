<?php
   include("connect.php");
   $id = $_GET['ID'];
   $query = "SELECT * FROM admin WHERE ID =".$id;
   
   $result = mysqli_query ($db, $query);
   if(!$result){
	   echo "Error ".mysqli_error($db);
   }else{
	   while($row=mysqli_fetch_array($result)){
		    echo "<br/><hr/>";
   
        
		   echo "ID: ".$row['ID']; echo "<br/>";
		   echo "CODE: ".$row['Code']; echo "<br/>";
           echo "Password: ".$row['Password']; echo "<br/>";
 
	   }
   }
?>