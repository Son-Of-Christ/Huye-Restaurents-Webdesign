 <?php

include('connect.php');
session_start();



if (!isset($_POST['regsubmit']))
{

 return('login.html');   
}
else
{

$name=$_POST['reguser'];
$mail=$_POST['regmail'];
$pass=$_POST['regpwd'];
$tr="select *from accounts where Username='$name'";
$sql=mysqli_query($db,$tr);
}

$nu=mysqli_num_rows($sql);
if($nu==1)
{
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
  <h1>Uername Already Taken <br>
         </h1>
   </div>
  
    </body>
    </html>";
  
  
    }
 

else
{
    $reg="insert into accounts(Username,Email,Password) 
    values('$name','$mail','$pass');";
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
  <h1>Registration Is Successful <br>
         </h1>
   </div>
  
    </body>
    </html>";
  
  
    }


?>









   
