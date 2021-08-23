<?php 
include('connect.php');
session_start();

$name=$_POST['loguser'];
$pwd=$_POST['logpwd'];
?>
<?php
if(!isset($_POST['logsubmit']))
{
  header("Location:logregister.html ?error=Press-submit-button");
  exit();
}
else if(empty($name) || empty($pwd))
{
    header("Location:logregister.html ?error=empty-fields");
}
else
{
    $sql="SELECT* FROM accounts WHERE Username='$name'&& Password='$pwd';";
    $result=mysqli_query($db,$sql);


  
        while ($row=mysqli_fetch_assoc($result)) 
        {
            if($pwd==$row['Password'])
            {
                $_SESSION['name']=$row['name'];
                header("Location:agentpage.php");
                exit();
            }
   

            else
            {
               header("Location:login.html?error=Username-or-Password-Incorrect");
               exit(); 
            }
        }
         }
         ?> 
            


    