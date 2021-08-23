<?php

include('connect.php');
session_start();
?>

<html>
<head>
<title>Admin Page</title>

<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="sp.js">
</script>
</head>
<body>

<div id="header">
  <div class="shell">
 
    <div id="top">
      <h1 id="mh">WELCOME TO ADMIN PANEL </h1>
      <div id="umh">
      <h1>Umucyo Restaurent </h1>
      </div>
      <div id="umhmes">
        <h1>Umucyo Restaurent/Messages </h1>
        </div>
        <div id="umhdel">
        <h1>Umucyo Restaurent/Delivery </h1>
        </div>
        <div id="umoffs">
        <h1>Umucyo Restaurent/Off-Site Reservation </h1>
        </div>
        <div id="umhead">
        <h1>Umucyo Restaurent/Headquater Reservation </h1>
        </div>
        <div id="clhead">
        <h1>Registered Agents </h1>
        </div>
        <div id="adhead">
        <h1> Huye Restaurent Panel Agents Register </h1>
        </div>
        <div id="resthead" class="reto" style="display: none;">
        <h1> Panel Based Registered Restaurents </h1>
        </div>
        <div id="repmesshead" class="repto" style="display: none;">
        <h1> Reports From Agents</h1>
        </div>
        <div id="regsclhead">
        <h1>Registered Official Clients </h1>
        </div>


      <div id="top-navigation">Huye  <strong>Restaurents</strong><span>|</span> <a href="#">Home</a> <span>|</span> <a href="index.html">Log out</a> </div>
    </div>

    <div id="navigation">
      <ul id="unl">
        <li id="li1"><span id="torent" onclick="resto(0)">Restaurents</span></li>
        <li id="li2"><span id="clie" onclick="clie(0)">Our Agents</span></li>
        <li id="li3"><span onclick="adm(0)" >Register Agents</span></li>
        <li id="li6"><span id="rm" onclick="text(0)"> R.Umucyo</span></li>
        <li id="li4"><span onclick="reports(0)">Reports from Agents</span></li>
        <li id="li5"><span onclick="register(0)" >Registered Clients</span></li>
      </ul>
    </div>

  </div>
</div>

<div id="footer">
  <div class="shell"> <span class="left">&copy; 2021 - Wander Designs</span> <span class="right"> Huye Campus </span> </div>
</div>

<div class="umunavs"id="umf">

  <div class="umf">
     
  <button  type="button"id="cl1"name="clse"onclick="tx(1)"><b>X</b><p>CLOSE</p></button>
    <button  type="button"id="cl"name="clse"onclick="text(1)"><b>X</b><p>CLOSE</p></button>
    <button onclick="tx(0)" type="button"id="mess"name="messbut">Messages</button>
    <button onclick="tex(0)" type="button"id="delv">Delivery</button>
    <button onclick="num(0)" type="button"id="offs">Off-site</button>
    <button onclick="nm(0)" type="button"id="onh">Headquater</button>

</div>
<div class="ob">
<button  type="button"id="cl2"name="cle"onclick="tex(1)"><b>X</b><p>CLOSE</p></button>
</div>
<div class="ob1">
<button  type="button"id="cloff"name="cff"onclick="num(1)"><b>X</b><p>CLOSE</p></button>
</div>
<div class="ob2">
<button  type="button"id="head"name="hdf"onclick="nm(1)"><b>X</b><p>CLOSE</p></button>
</div>
<div class="ob3">
<button  type="button"id="cle"name="clnt"onclick="clie(1)"><b>X</b><p>CLOSE</p></button>
</div>
<div class="ob4">
<button  type="button"id="adi"name="ads"onclick="adm(1)"><b>X</b><p>CLOSE</p></button>
</div>
<div class="ob5">
<button style="display: none;height: 25px;background-color: #a3a2a2;background-origin:
 content-box;border-color: #5dc1fb;	border-style: outset;	border-radius: 6px;width:
  20px;margin-left:120px;position: absolute;color: white;margin-top:-19px;"
   type="button"id="restt"name="reb"onclick="resto(1)"><b>X</b><p>CLOSE</p></button>
</div>
<div class="6">
<button  type="button"id="repo" onclick="reports(1)"><b>X</b><p>CLOSE</p></button>
</div>
<div class="7">
<button  type="button"id="clgt" onclick="register(1)"><b>X</b><p>CLOSE</p></button>
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
		<td><a style="color:blue;text-decoration:none;" href="deliverdelete.php?<?php echo $row['CODE'];?>"> delete </a></td>
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
<!-- ///////////////////////////////////////OFF-SITE TABLE//////////////////////////////////////////////////////////// -->









<div class="offsite" id="ofsi">

<table  border="1" >
<tr>
<th>CODE</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Phone_number</th>
<th>Intended_Date</th>
<th>City</th>
<th>Street_Address</th>
<th>Place_Tel</th>
<th>House_number</th>
<th>Scanned_pdf</th>

<th colspan="3">Actions </th>
</tr>
<?php

 $qsl="select* from off_site;";
 $resu = mysqli_query($db,$qsl);
 if (mysqli_num_rows($resu) > 0) 
 
 {

  while($row = $resu->fetch_assoc()) 
  {
    echo "<tr>
    <td>" . $row["CODE"]. "</td>
    
    <td>" . $row["Firstname"] . "</td>
    
    <td>" 
    . $row["Lastname"]. "</td>

    <td>" . $row["Email"]. "</td>
    
    <td>" . $row["Phone_number"]."</td>

    <td>" . $row["Intended_Date"]."</td>
    
    <td>" . $row["City"]. "</td>
    <td>" . $row["Street_Address"]. "</td>
    <td>" . $row["Place_Tel"]. "</td>
    <td>" . $row["House_number"]. "</td>

    <td>" . $row["Scanned_pdf"]. "</td>"
  
    
    ?>

    <td><a style="color:blue;text-decoration:none;"href="offsitview.php?CODE=<?php echo $row['CODE'];?>"> view </a></td>
		<td><a style="color:blue;text-decoration:none;" href="offsitupdate.php?CODE=<?php echo $row['CODE'];?>"> update </a></td>
		<td><a style="color:blue;text-decoration:none;" href="offsitdelete.php?CODE=<?php echo $row['CODE'];?>"> delete </a></td>
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
<!-- /////////////////////////////////////////Headquater Table////////////////////////////////////////////////// -->


<div class="hedq" id="hqter">

<table  border="1" >
<tr>
<th>CODE</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Phone_number</th>
<th>Intended_Date</th>
<th>Participants</th>
<th>Assigned_place</th>

<th colspan="3">Actions </th>
</tr>
<?php

 $lsq="select* from headquater;";
 $resp = mysqli_query($db,$lsq);
 if (mysqli_num_rows($resp) > 0) 
 
 {

  while($row = $resp->fetch_assoc()) 
  {
    echo "<tr>
    <td>" . $row["CODE"]. "</td>
    
    <td>" . $row["Firstname"] . "</td>
    
    <td>" 
    . $row["Lastname"]. "</td>

    <td>" . $row["Email"]. "</td>
    
    <td>" . $row["Phone_number"]."</td>

    <td>" . $row["Intended_date"]."</td>
    
    <td>" . $row["Participants"]. "</td>
    <td>" . $row["Assigned_place"]. "</td>"
    
  
    
    ?>

    <td><a style="color:blue;text-decoration:none;"href="hedquaterview.php?CODE=<?php echo $row['CODE'];?>"> view </a></td>
		<td><a style="color:blue;text-decoration:none;" href="hedquaterupdate.php?CODE=<?php echo $row['CODE'];?>"> update </a></td>
		<td><a style="color:blue;text-decoration:none;" href="hedquaterdelete.php?CODE=<?php echo $row['CODE'];?>"> delete </a></td>
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
<!-- /////////////////////////////////////////////////CLIENTS TABLE///////////////////////////////////////////////////////////// -->


<div class="clent"id="ents">
<table  border="1" >
<tr>
<th>CODE</th>
<th>Username</th>
<th>Email</th>
<th>Password</th>
<th colspan="3">Actions </th>
</tr>

<?php

 $sql="select* from accounts ;";
 $result = mysqli_query($db,$sql);
 if (mysqli_num_rows($result) > 0) 
 
 {

  while($row = $result->fetch_assoc()) 
  {
    echo "<tr>
    <td>" . $row["Username"]. "</td>
    
    <td>" . $row["Email"] . "</td>
    
    <td>" 
    . $row["Password"]. "</td>"
    
    ?>
  <td><a style="color:blue;text-decoration:none;"href="clientview.php?CODE=<?php echo $row['CODE'];?>"> view </a></td>
		<td><a style="color:blue;text-decoration:none;" href="clientupdate.php?CODE=<?php echo $row['CODE'];?>"> update </a></td>
		<td><a style="color:blue;text-decoration:none;" href="usdelete.php ?CODE=<?php echo $row['CODE'];?>"> delete </a></td>




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


<!-- ///////////////////////////////////AGENT ADDING////////////////////////////////////////////////////////////// -->
<div class="add"id="minadd"style="margin-left:450px;">
  <fieldset>
    <legend>Add New   Agent</legend>
<form action="addim.php"method="POST">

<input type="text"placeholder="New Agent Username"name="agecode"/><br>
<input style=" margin-top:2px;"type="text"placeholder="New Agent Email"name="agemail"/><br>

<input type="password"placeholder="New Agent Password"name="agepwd"/><br>                     
<input type="submit" id="adn"type="submit"name="addds"value="Add Agent "/>
</form>
  </fieldset>

</div>








<!-- //////////////////////////////////////////////RESTAURENTS-TABLE/////////////////////////////////////////////////////// -->






<div id="rests"style="display:none;">
<table  border="1" >
<tr>

<th>CODE</th>
<th>Restaurent_Names</th>
<th colspan="3">Actions </th>
</tr>

<?php

 $bdr="select* from restolist ;";
 $result = mysqli_query($db,$bdr);
 if (mysqli_num_rows($result) > 0) 
 
 {

  while($row = $result->fetch_assoc()) 
  {
    echo "<tr>
    <td>" . $row["CODE"]. "</td>
    
    <td>" . $row["Restaurent_Names"] . "</td>"
    
  
    ?>

    <td><a  style="color:blue;text-decoration:none;"href="restoview.php?CODE=<?php echo $row['CODE'];?>"> view </a></td>
		<td><a style="color:blue;text-decoration:none;" href="restoupdate.php?CODE=<?php echo $row['CODE'];?>"> update </a></td>
		<td><a style="color:blue;text-decoration:none;" href="restodelete.php?CODE=<?php echo $row['CODE'];?>"> delete </a></td>
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
<!-- ///////////////////////////////////////////////////RESTAURENT-ADDITION////////////////////////////////////////////////////////////// -->
   
<div id="adds" style="margin-left: 800px;margin-top:-100px">
  <fieldset>
    <legend>Register New Restaurent</legend>
<form action="addrest.php"method="POST">
<input type="text"placeholder=" Enter New Restaurent Name"name="restname"/><br>   


               
<input type="submit" id="adre"type="submit"name="resst"value="Add Restaurent "/>
</form>
  </fieldset>

</div>
<div id="det">
<?php



?>
  <!-- <h2>Logged in as:<br><br><p><?php echo  $_SESSION['code']; ?></p></h2>  -->
</div>
<!-- /////////////////////////////////////////REPORTS/////////////////////////////////////////////// -->

<div class="reported"id="orted">
<table  border="1" >
<tr>
<th>CODE</th>
<th>Reported</th>
</tr>

<?php

 $sql="select*from reports ;";
 $result = mysqli_query($db,$sql);

 if (mysqli_num_rows($result) > 0) 
 
 {

  while($row = $result->fetch_assoc()) 
  {
    echo "<tr>
    <td>" . $row["CODE"]. "</td>

    <td>"  . $row["Reported"]. "</td>
    <td>"
    
   
    
    
    
    ?>

    
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
<!-- 
//////////////////////////////////////////////Registered-Clients////////////////////////////// -->


<div class="regist" id="clregist">

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

    <td><a style="color:blue;text-decoration:none;"href="clview.php?CODE=<?php echo $row['CODE'];?>"> view </a></td>
		<td><a style="color:blue;text-decoration:none;" href="clupdate.php?CODE=<?php echo $row['CODE'];?>"> update </a></td>
		<td><a style="color:blue;text-decoration:none;" href="cldelete.php?CODE=<?php echo $row['CODE'];?>"> delete </a></td>
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



</table> 
</div>




</body>
</html>
    


