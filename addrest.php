<?php

include('connect.php');

$name=$_POST['restname'];
preg_match("/^([A-Z' ]+)$/","$name");

if(!isset($_POST['resst']))
{


    header('Location:adminpanel.php?error="click-submit-button"');
    exit();

}

elseif(empty($name))
{

    header('Location:adminpanel.php?error="Fill-The-Field" ');
    exit();
}
elseif(!preg_match("/^([A-Z' ]+)$/",$name))
{
    header('Location:adminpanel.php?error="Name-only-in-Capital-Letters"');
    exit();


}

else
{



 $sl="insert into restolist(Restaurent_Names)
values('$name');";

$conect=  mysqli_query($db,$sl);



}




if($conect==true)
{
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
<h1>New Restaurent successfully Registered<br>
       </h1>
 </div>

  </body>
  </html>";




}
else
{
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
<h1>New Restaurent not Registered! Try Again please<br>
     </h1>
</div>

</body>
</html>";

}
?>






