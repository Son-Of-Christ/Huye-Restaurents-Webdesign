<?php 
include('connect.php');
?>
<style>
	.main-block
{
height:50%;
padding-top:10px;
padding-bottom:10px;
margin:auto;
}
.formcontainer {
      max-width: 300px; 
      border:1px solid black;
      background-color:white;
      margin-left: 400px;
      margin-top: 150px;
      box-shadow: 2px 2px 2px skyblue;
      border-radius: 6px;
    border-color: skyblue;
    border-style: dotted;
      }
      input{
      width: 90%;
      padding: 10px 5px;
      border: none;
      border-bottom: 2px solid black;
      outline:none;
      margin: 10px 10px 10px 10px;
      }
      input[type=file]{
      width: 90%;
      padding: 10px 5px;
      margin: 10px 10px 10px 10px;
      }
      .formcontainer button {
      background-color:blue;
      color: white;
      padding: 10px 0;
      margin: 10px 0;
      border: none;
      cursor:pointer;
      width: 40%;
      padding:auto;
    width: 250px;
    margin-left: 20px;
      }
      button:hover {
      background-color: darkgoldenrod;
      }
      span{
          margin-left: 10px;
          font-size: 18px;
          color: #CD5C5C;
      }
      body
      {
          background-color: grey;
      }
	</style>
    <?php
   $id =isset($_GET['ID'])? $_GET['ID']:"";
   $r="SELECT * FROM  admin WHERE ID='".$id."';";
   $dx = mysqli_query($db,$r);
   if(!$dx){
	   echo "Failed";
   }
   while($d = mysqli_fetch_array($dx))
   {
       ?>
<div class="flex-container">
<div class="formcontainer">
<form action="#" method="POST" enctype="multipart/form-data">
<span>CODE</span>
<input type="text" class="input" name="adid" value="<?php echo $d['ID'];?>" readonly >
<span>Username</span>
<input type="text" class="input" name="adcode" value="<?php echo $d['Code'];?>"  >
<span>Password</span>
<input type="text" class="input" name="adpwd" value="<?php echo $d['Password'];?>"  >






<button type="submit" name="clupdates"> UPDATE</button>

</form>
</div>
</div>
<?php
if(isset($_POST['clupdates']))     
{	
    
    header('Location:adminpanel.php');
    
    $code=$_POST['adcode']; 
$pawd=$_POST['adpwd'];
    $sql="UPDATE accounts SET Code='$code', Password='$pawd' WHERE  ID='".$id."'";

       mysqli_query($db,$sql);
       mysqli_query($db,$save);
       if(mysqli_query($db,$save)){
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
         <h1> Restaurent Updated <br>
                </h1>
          </div>
         
           </body>
           </html>";
         
         
           }
         
       }
       else{
           echo "".mysqli_error($db);
       }
    
   }


?>