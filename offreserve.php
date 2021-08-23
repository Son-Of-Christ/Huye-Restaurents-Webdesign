

<?php

include('connect.php');


if(!isset($_POST['offsubmit']))
{


return('umureserv.html');

}
else
{

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$mail=$_POST['email'];
$pn=$_POST['phone'];
$dt=$_POST['date'];
$city=$_POST['am'];
$street=$_POST['name'];
$ptel=$_POST['namee'];
$hn=$_POST['ame'];
$pdf=$_POST['filename'];
 $sql="insert into off_site(Firstname,Lastname,Email,Phone_number,Intended_Date,City,Street_Address,Place_Tel,House_number,Scanned_pdf)
values('$fname','$lname','$mail','$pn','$dt','$city','$street','$ptel','$hn','$pdf');";
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
       . Thanks for Reserving...</h1>
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






