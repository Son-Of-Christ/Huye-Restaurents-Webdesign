<?php

include('connect.php');
session_start();


$fname=$_POST['clfuser'];
$lname=$_POST['clluser'];
$mail=$_POST['clmail'];
$pass=$_POST['clpwd'];
$sex=$_POST['sexes'];

if (!isset($_POST['clsubmit']))
{
header('Location:login.html?error=Press-Submit');
}
elseif(empty($fname) && empty($pwd)&& empty($lname) && empty($mail) && empty($sex))
{
    header('Location:login.html?error=Please-Fill-All-Fields');


}
else
{

    $reg="insert into clients(Firstname,Lastname,Email,Sex,Password) 
    values('$fname','$lname','$mail','$sex','$pass');";
    mysqli_query($db,$reg);
    echo"<html>
    <head>
    <style type=\"text/css\">
  h1 {color: red;
  text-align:center;
  margin-left:50px;
  margin-top:200px;
  
  }
    body {background-color: white; 
  
    
    }
    @keyframes hey {
        0%   {background-color: red;
            animation-duration: 5s;}
        25%  {background-color: yellow;}
        50%  {background-color: blue;}
        100% {background-color: green;}
      }
      .hey{
       
        animation-name: hey;
        animation-duration: 20s;
      }
  
    </style>
    </head>
    <body>
   <div class='hey'>
  <h1>You have been Registered<br>
         </h1>
   </div>
  
    </body>
    </html>";
  
  
    }


?>









   
