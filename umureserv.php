<!doctype html>
<html  lang="en">
<head>

  <link rel="stylesheet"type="text/css"href="ureservation.css">
</head>
<body style="background-color:#D7DADA" >
  <div class="rnavs">
    <a href="umucyo.html">HOME</a>
    <a href="menu.pdf#toolbar=0">CHECK MENU</a>
    <a href="price.html">CHECK PRICING</a>
    </div>
    <div class="hedr">
      <h1> RESTAURENT RESERVATION PANEL</h1>
     
      </div>
  <div class="fom">
    <fieldset>
      <legend>CONTACTS DETAILS</legend>
  <form action=""method="post">
    
    <label for="fname">First Name</label><br>
    <input type="text" id="fname" name="firstname" placeholder="Enter Your First name.. " required><br>
    <br>
    <label for="lname">Last Name</label><br>
    <input type="text" id="lname" name="lastname" placeholder="Enter Your Last name.." required>
    <br>
    <br>
    <label for="em">E-mail</label><br>
    <input type="text" id="em" name="E-mail" placeholder="Enter Your E-mail" required><br>
    <br>
  
    <label for="pm">Phone Number</label><br>
    <input type="tel" id="em" name="Phone" placeholder="Enter Your Phone number" required><br>
    <br>
  </form>
</div>

<fieldset>
  <legend>TYPE OF YOUR PARTY</legend>
  <form action=""method="post">
    <label for="Date">Desired Reservation Date & Time</label><br>
    <input style="margin-left:50px;height: 25px;width: 230px;" type="datetime-local" id="Date" name="Date" required><br>
    <br>
    <label>Choose your Intended party type :</label><br>
   <br>
   <div class="checkr">
    <input type="radio" id="r" name="off" value="nma"onclick="tx(0)"uncheked>
    <label for="cms">OFF-SITE</label><br> 
    <input type="radio" id="r1" name="off" value="heqa" onclick="text(0)"uncheked> 
<label for="r1">ON OUR HQ</label>

<span class="checkmark"></span>

<span class="checkmark"></span>
</form>
     </div>
 <script src="reserv.js">
   </script>
   <div class="ptr"id=pnm>
    <input style="margin-left: 120px ;margin-top :-100px;" type="checkbox" id="rr1" name="hw" value="site" onclick="text(1)"uncheked>
    <label style="margin-left: 2px;" for="crs">Check here to Close This Form</label><br> 
     <h4>On Our HQ Reservation Selected</h4>
     <p>Enter The number/Size of Your Party</p>
     <label for="part">PARTICIPANTS</label><br>
     <input type="text" id="p1" name="participants" placeholder="How many participants" required><br>
     <br>
    <button style="height: 30px;" onclick="calc()">Your will be given</button>
    <input style="margin-left:2px;"type="text"id="number">
    <br>
    <br>
<input style="margin-left: 80px;height: 40px;width: 230px;font-size: large;" type="submit" value="ACCEPT" name="submit"/>
<div class="fil">
  <aside>After Filling In Participants Informatin<br>
     Press "YOU WILL BE GIVEN"Button To Check<br>
      Where You Will be Assigned And After Click Accept<BR>
      To SUBMIT </aside>
  </div>
    </div>
    <div class="ptr1"id=pnm1>
      <input style="margin-left: 180px;margin-top: -50px;"type="checkbox" id="rs" name="hw" value="nma1"onclick="tx(1)"uncheked>
      <label style="margin-left: 2px;" for="cms">Check here to close this form</label><br> 
        <fieldset>
      <h4>OFF-SITE RESERVATION SELECTED</h4>
      <p>Please fill This Fields And Download the Form</p>
      <form action=""method="post">
        <label for="loname">ADDRESS OF EVENT</label><br>
    <input style="margin-left: 50px;height: 20px;width:176px;" type="text" id="loname" name="name" placeholder="Enter the City.. " required><br>
    <input style="margin-left: 50px;height: 20px;width:176px;"type="text" id="looname" name="nname" placeholder="Street Address" required><br>
    <input style="margin-left: 50px;height: 20px;width:176px;" type="tel" id="loooname" name="nnname" placeholder="Event place Telephone" required><br>
    <input style="margin-left: 50px;height: 20px;width:176px;"type="text" id="oname" name="ame" placeholder="House Number" required>
        </form>
        
        <div class="download">
         <h4> Click Below to download The Form</h4> 
         <a href="off.pdf" download>
            <img src="download.gif" alt="W3Schools" width="104" height="152">
          </a>
          </div>
          <div class="upload">
            <h2>NOTE THIS:</h2>
            <aside>All This Fields Has to be Filled Correctly<br>
              And After filling the fields you have to download<br>
             The Form Provided For Additional Information and Fill it.<br>
            After Filling the form Re-Upload Scanned Version.Further Info <br>
            Will be Found On the Form.   Thanks </aside>
            <h4>Click Below To Upload Scanned Form</h4>
           
            <form action="#.php"method="post">
              <input type="file" id="myFile" name="filename">
            </form>
            
            </div>
            <br>
            <input style="font-size: large;"type="submit"Name="submit"value="SUBMIT">
          </fieldset>
          </div>
  </div>
    
   </fieldset>
    
        
 
   
 </body>
 </html>