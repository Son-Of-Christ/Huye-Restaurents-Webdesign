<?php
   include("connect.php");
   
   $r = "DELETE FROM admin WHERE ID =".$_GET['ID'];
   
   $dx = mysqli_query($db, $r);
   if(!$dx){
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
  <h1>Oops!!! Admin Not Removed  <br>
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
  <h1>Yes!!! Admin Removed <br>
       </h1>
  </div>
  
  </body>
  </html>";
  
  
 }
 
   
?>
