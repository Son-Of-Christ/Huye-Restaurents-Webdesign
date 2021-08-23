
<?php

include('connect.php');

$adcode=$_POST['agecode'];
$adpass=$_POST['agepwd'];
$adm=$_POST['agemail'];

if(!isset($_POST['addds']))
{


    header('Location:adminpanel.php?error="click-submit-button"');
    exit();

}

elseif( isset($_POST['addds'])&& empty($adcode) && empty($adpass) && empty($adm))
{

    header('Location:adminpanel.php?error="Empty-Fields" ');
    exit();
}

else
{



 $pul="insert into accounts(Username,Email,Password)
values('$adcode','$adm','$adpass');";
$conect=  mysqli_query($db,$pul);



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
<h1>New Agent successfully Added<br>
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
<h1>New Agent Not Added! Try Again please<br>
     </h1>
</div>

</body>
</html>";

}
?>






