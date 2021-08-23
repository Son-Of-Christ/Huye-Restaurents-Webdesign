
<html>
    <head>
        <style>

p{
    font-size: xx-large;
}
body{
    background-color: skyblue;
}
button
{
    height: 35px;
    width: 120px;
    font-size: large;
    background-color: orangered;
    border-style: solid;
    transition: 0.9s;
}
a
{
    font-size: large;

}

button:hover
{
    background-color: palegoldenrod;
    margin-left:10px ;
}



        </style>
</head>
<body>
   <a href="adminpanel.php"> <button type="button"><b>BACK</b></button></a>
</body>
</html>




<?php 
include('connect.php');
?>
<style>
	.main-block
{
height:50%;
padding-top:10px;
padding-bottom:10px;


 margin-top: 150px;

margin-left: 500px;
}
body{
    background-color: skyblue;
}
.formcontainer {
      max-width: 300px; 
      border:1px solid black;
      background-color:white;

      box-shadow: 2px 2px 2px skyblue;
      border-radius: 6px;
    border-color: skyblue;
    border-style: dotted;
    margin-left: 200px;
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
      background-color: #034e94;
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
	</style>
    <?php
   $id =isset($_GET['CODE'])? $_GET['CODE']:"";
   $r="SELECT * FROM headquater WHERE CODE='".$id."';";
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
<input type="text" class="input" name="id" value="<?php echo $d['CODE'];?>"  readonly>
<span class="details">FirstName</span>
<input type="text" class="input" name="firstname" value="<?php echo $d['Firstname'];?>"  >
<span class="details">Last Name</span>
<input type="text" class="input" name="lastname" value="<?php echo $d['Lastname'];?>" >
<span class="details">Email</span>
<input type="email" class="input" name="email" value="<?php echo $d['Email'];?>" >
<span class="details">Phone_number</span>
<input type="number" class="input"  name='pnumber' value="<?php echo $d['Phone_number'];?>" >


<span class="details">Date of Party</span>
<input type="text" class="input" name="dates" value="<?php echo $d['Intended_date'];?>" >

<span>Participants</span>
<input type="text" class="input" name="participated"value="<?php echo $d['Participants'];?>" >
<span>Assigned_place</span>
<input type="text" class="input" name="place"value="<?php echo $d['Assigned_place'];?>"readonly>
<button type="submit" name="edit"> UPDATE</button>

</form>
</div>

<?php
if(isset($_POST['edit']))
{	
    header('Location:adminpanel.php?Updated');
    
    $date=$_POST['dates']; 
    $id=$_POST['id'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $mail=$_POST['email'];
    $phone=$_POST['pnumber'];

     $part=$_POST['participated'];
     $assign=$_POST['place'];
     $Place_Tel=$_POST['Place_Tel'];
   $house=$_POST['house'];
   $pdf=$_POST['pdf'];

   $sql="UPDATE headquater SET  Firstname='$firstname',Lastname='$lastname',Email='$mail',Phone_number='$phone',

Intended_date='$date',Participants='$part',Assigned_place='$assign' WHERE CODE='$id';";


  $result= mysqli_query($db,$sql);


       if($result==true){
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
         <h1> Updated <br>
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