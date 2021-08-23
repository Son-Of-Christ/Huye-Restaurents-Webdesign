

<?php

include('connect.php');


if(!isset($_POST['delsubmit']))
{


return('delivery.html');

}
else
{
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$mail=$_POST['Email'];
$tel=$_POST['phone'];
$pro=$_POST['slct1'];
$dis=$_POST['slct2'];
$sec=$_POST['slct3'];
$cell=$_POST['slct4'];
$vill=$_POST['slct5'];
$pna=$_POST['loca'];
$comm=$_POST['comd'];
$nat=$_POST['dropbox'];


$sql="insert into delivery (Firstname,Lastname,Email,Telephone,Province,District,Sector,Cell,Village,Precised_location,Command,Nationality)
values('$fname','$lname','$mail','$tel','$pro','$dis','$sec','$cell','$vill','$pna','$comm','$nat');";
$conect=  mysqli_query($db,$sql);
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
<h1>Your Information submitted  Successfully<br>
       . Thanks for Contacting...</h1>
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
<h1>Your Information not submitted <br>
     </h1>
</div>

</body>
</html>";

}
?>






