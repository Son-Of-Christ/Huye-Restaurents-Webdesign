

<?php
include('connect.php');
$sql="select* from restolist";
$result = mysqli_query($db,$sql);
$row = $result->fetch_assoc();
session_start();

?>


<!doctype html>
<html>
<head>
<link rel="stylesheet"type="text/css"href="homp.css">
</head>
<body bgcolor="black">

<div class="big">
    <div class="navbar">
        <a href="index.php">
         HOME
        </a>
         <a href="logregister.html">ACCOUNTS</a>
           <a href="login.html">Be Our Client</a>
           <a href="#news">SERVICES</a>
           <div class="dropdown" >
           <button class="dropbtn"id="restbut" >RESTAURENTS
                 </button>
                 <div class="dropdownfiles" >    

    <?php do{


?>
  <a href="umucyo.html"?CODE=<?php echo $row['CODE'];  ?>>    <?php echo  $row['Restaurent_Names']; ?></a> 
 


<?php

}


  while($row = $result->fetch_assoc()) 




?> 




    
       </div>
            
           </div>
         </div>
         <div class="text">
        <h2>WELCOME TO HUYE RESTAURENTS.</h2>
        <span></span>
            <P>ON This panel you can access<br>
               all RESTAURENTS services at NGOMA Sector near HUYE campus<br>
               and you will be equiped overally with deep INFO concerning There. <br>
                        </p>
                
</div>
 </div>
 </div>

 
</body>
</html>
