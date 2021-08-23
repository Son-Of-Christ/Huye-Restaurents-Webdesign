<?php

include('connect.php');
session_start();

$code=$_POST['adcode'];
$pass=$_POST['adpwd'];
if(empty($code) || empty($pass))
{
    header('Location:logregister.html ?error=empty');
    exit();
}
else
{
    $sql="select* from admin where Code='$code' and Password='$pass';";
    $result=mysqli_query($db,$sql);

if(mysqli_num_rows($result)<1)
{

header('Location:logregister.html?error= Password-Or-Code-is Incorrect');
exit();

}

else 
{
    while($row=mysqli_fetch_assoc($result))
    {
if($pass==$row['Password'])
{
$_SESSION['code']=$row['Code'];
header("Location:adminpanel.php");
exit();
} 

  else
        {
       header("Location:login.html?error= Password-Or-Code-is Incorrect");
       exit(); 
    
}
    }

}


}




?>