<?php

include('connect.php');
session_start();
?>

<html>
<head>
<title>AGENTS Page</title>

<link rel="stylesheet" type="text/css" href="css/agent.css" />
<script src="spp.js">
</script>
</head>
<body>

<div id="header">
  <div class="shell">
 
    <div id="top">
      <h1 id="mh">WELCOME TO AGENTS PANEL </h1>
      <div id="umh">
      <h1>Umucyo Restaurent </h1>
      </div>
      <div id="clieh">
      <h1>Registered Clients </h1>
      </div>
      <div id="repohead">
      <h1>Report to Super Admin </h1>
      </div>
     
      <div id="top-navigation">Huye  <strong>Restaurents</strong><span>|</span> <a href="#">Home</a> <span>|</span> <a href="index.html">Log out</a> </div>
    </div>

    <div id="navigation">
      <ul id="unl">

        <li id="li6"><span id="rm" onclick="text(0)"> R.Umucyo</span></li>
        <li id="li4"><span onclick="client(0)">Registered Clients</span></li>
        <li id="li5"><span onclick="report(0)">Report To Super Admin</span></li>
      </ul>
    </div>

  </div>
</div>

<div id="footer">
  <div class="shell"> <span class="left">&copy; 2021 - Wander Designs</span> <span class="right"> Huye Campus </span> </div>
</div>

<div class="umunavs"id="umf">

  <div class="umf">
     

   
    <button onclick="tx(0)" type="button"id="mess"name="messbut">Messages</button>
    <button onclick="tex(0)" type="button"id="delv">Delivery</button>


</div>
<div class="ob">
<button  type="button"id="cl2"name="cle"onclick="tex(1)"><b>X</b><p>CLOSE</p></button>
</div>

<div class="obs2" id="obbs">
<button  type="button"id="umuc"name="hdfs"onclick="text(1)"><b>X</b><p>CLOSE</p></button>
</div>

<div class="obs3" id="rep">
<button  type="button"id="uc"class="hh"onclick="report(1)"><b>X</b><p>CLOSE</p></button>
</div>
<div class="obs4" id="clie">
<button  type="button"id="clied"class="mnr"onclick="client(1)"><b>X</b><p>CLOSE</p></button>
</div>
<div class="ob5">
<button style="display: none;height: 25px;background-color: #a3a2a2;background-origin:
 content-box;border-color: #5dc1fb;	border-style: outset;	border-radius: 6px;width:
  20px;margin-left:120px;position: absolute;color: white;margin-top:-19px;"
   type="button"id="restt"name="reb"onclick="tx(1)"><b>X</b><p>CLOSE</p></button>
</div>



<!-- /////////////////////////////////////////////////////////////////////////////MESSAGES Table///////////////////////////////// -->

<div class="tbs"id="tbs1">
<table  border="1" >
<tr>
<th>Code</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Message</th>
<th colspan="3">Actions </th>
</tr>

<?php

 $sql="select* from message;";
 $result = mysqli_query($db,$sql);
 if (mysqli_num_rows($result) > 0) 
 
 {

  while($row = $result->fetch_assoc()) 
  {
    echo "<tr>
    <td>" . $row["CODE"]. "</td>
    
    <td>" . $row["Firstname"] . "</td>
    
    <td>" 
    . $row["Lastname"]. "</td>

    <td>" . $row["Email"]. "</td>
    
    <td>" . $row["Message"]."</td>"
    
    ?>

    <td><a style="color:blue;text-decoration:none;"href="messageview.php?CODE=<?php echo $row['CODE'];?>"> view </a></td>
		<td><a style="color:blue;text-decoration:none;" href="messagsave.php"<?php echo $row['CODE'];?>"> Save </a></td>
		<td><a style="color:blue;text-decoration:none;" href="messagdelete.php?CODE=<?php echo $row['CODE'];?>"> delete </a></td>
    <?php



"<br/></tr>";
 

  }
 }
 else
 {
 echo "0 results";


 }

 ?>
 </table>
</div>

</div>

<!-- ////////////////////DELIVERY TABLE ///////////////////////////////////////////// -->

<div class="deliver" id="dels">

<table  border="1" >
<tr>
<th>CODE</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Telephone</th>
<th>Province</th>
<th>District</th>
<th>Sector</th>
<th>Cell</th>
<th>Village</th>
<th>Precised_location</th>
<th>Command</th>
<th>Nationality</th>
<th colspan="3">Actions </th>
</tr>
<?php

 $sq="select* from delivery;";
 $res = mysqli_query($db,$sq);
 if (mysqli_num_rows($res) > 0) 
 
 {

  while($row = $res->fetch_assoc()) 
  {
    echo "<tr>
    <td>" . $row["CODE"]. "</td>
    
    <td>" . $row["Firstname"] . "</td>
    
    <td>" 
    . $row["Lastname"]. "</td>

    <td>" . $row["Email"]. "</td>
    
    <td>" . $row["Telephone"]."</td>
    
    
    <td>" . $row["Province"]. "</td>
    <td>" . $row["District"]. "</td>
    <td>" . $row["Sector"]. "</td>
    <td>" . $row["Cell"]. "</td>
    <td>" . $row["Village"]. "</td>
    <td>" . $row["Precised_location"]. "</td>
    <td>" . $row["Command"]. "</td>
    <td>" . $row["Nationality"]. "</td>"
    
    ?>

    <td><a style="color:blue;text-decoration:none;"href="deliverview.php?CODE=<?php echo $row['CODE'];?>"> view </a></td>
		<td><a style="color:blue;text-decoration:none;" href="deliverupdate.php?CODE=<?php echo $row['CODE'];?>"> update </a></td>
		<td><a style="color:blue;text-decoration:none;" href="deliverdelete.php?CODE=<?php echo $row['CODE'];?>"> delete </a></td>
    <?php



"<br/></tr>";
 

  }
 }
 else
 {
 echo "0 results";


 }

 ?>
 </table>
</div>



<div class="reps"id="repss">
    <form action="repots.php"method="POST">
<label style="font-size: large;">Make Report</label><br>
<textarea name="txarea" placeholder="write your report" style="width: 400px;height:300px;padding-top:100px;font-size:large;padding-left:30px;" >
</textarea>
<br>
<input style="width: 100px;height: 35px;background-color:#5dc1fb;  " type="submit"  name="report"value="REPORT NOW">
    </form>
</div>
<!-- ///////////////////////////////////////////////////Registered-Clients///////////////////////////////////////////// -->








<div class="client" id="clients"style="margin-top:-500px;margin-left:300px;position:absolute;display:none">

<table  border="1" >
<tr>
<th>CODE</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Sex</th>
<th>Password</th>
<th colspan="3">Actions </th>
</tr>
<?php

 $sq="select* from clients;";
 $res = mysqli_query($db,$sq);
 if (mysqli_num_rows($res) > 0) 
 
 {

  while($row = $res->fetch_assoc()) 
  {
    echo "<tr>
    <td>" . $row["CODE"]. "</td>
    
    <td>" . $row["Firstname"] . "</td>
    
    <td>" 
    . $row["Lastname"]. "</td>

    <td>" . $row["Email"]. "</td>
    
    <td>" . $row["Sex"]."</td>
    
    
    <td>" . $row["Password"]. "</td>
"
    
    ?>

    <td><a style="color:blue;text-decoration:none;"href="clientview.php?CODE=<?php echo $row['CODE'];?>"> view </a></td>
		<td><a style="color:blue;text-decoration:none;" href="clientupdate.php?CODE=<?php echo $row['CODE'];?>"> update </a></td>
		<td><a style="color:blue;text-decoration:none;" href="clientdelete.php?CODE=<?php echo $row['CODE'];?>"> delete </a></td>
    <?php



"<br/></tr>";
 

  }
 }
 else
 {
 echo "0 results";


 }

 ?>
 </table>
</div>




</body>
</html>
    


