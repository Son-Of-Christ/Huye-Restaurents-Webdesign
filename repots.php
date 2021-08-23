<?php

include('connect.php');

$mess=$_POST['txarea'];

if(isset($_POST['report']))
{
    $sql="INSERT INTO reports(Reported) VALUES ('$mess');";
    mysqli_query($db,$sql);
}
elseif(empty($mess))
{
  header('location:agentpage.php?error=Write-a-Message-Please');
}
else
{
    header('location:agentpage.php?error=Click-submit-button');

}


if(mysqli_query($db,$sql)){
    echo "<html>
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
  <h1> Message Reported to Super Admin<br>
         </h1>
   </div>
  
    </body>
    </html>";
  
  
    }
  

else{
    
    echo "<html>
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
  <h1> Message Not Reported to Super Admin<br>
         </h1>
   </div>
  
    </body>
    </html>";
  
  
}



?>
