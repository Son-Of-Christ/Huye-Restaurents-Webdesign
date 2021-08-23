
<html>
    <head>
        <style>

p{
    font-size: xx-large;
}
body{
    background-color: skyblue;
}
button
{
    height: 35px;
    width: 120px;
    font-size: large;
    background-color: orangered;
    border-style: solid;
    transition: 0.9s;
}
a
{
    font-size: large;

}

button:hover
{
    background-color: palegoldenrod;
    margin-left:10px ;
}



        </style>
</head>
<body>
   <a href="adminpanel.php"> <button type="button"><b>BACK</b></button></a>
</body>
</html>


<?php
   include("connect.php");
   $id = $_GET['CODE'];
   $query = "SELECT * FROM clients WHERE CODE =".$id;
   
   $result = mysqli_query ($db, $query);
   if(!$result){
	   echo "Error ".mysqli_error($db);
   }else{
	   while($row=mysqli_fetch_array($result)){
		    echo "<br/><hr/>";
   
        echo"<p>";
		   echo "CODE: ".$row['CODE']; echo "<br/>";
		   echo "Firstname: ".$row['Firstname']; echo "<br/>";
           echo "Lastname: ".$row['Lastname']; echo "<br/>";
           echo "Email:".$row['Email']; echo "<br/>";
           echo "Sex:".$row['Sex']; echo "<br/>";
           echo "Password:".$row['Password']; echo "<br/>";
echo "</p>";
	   }
   }
?>