<!doctype html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="delivery.css">
</head>

<body >
    <div class="navs">
        <a href="umucyo.html">HOME</a>
        <a href="umuservice.html">BACK</a>
    </div>


    <div class="fome">
        <fieldset>
            <legend>CONTACTS DETAILS</legend>
            <form action="" method="post">
                <div class="fff">
                    <h1> NOTE THIS:</h1>
                    <p> The information to be provided,<br>
                        Has To be Real, For Services To be Done <br>
                        in honest manner and Efficiently.<br>
                        THANK YOU...
                    </p>

                </div>

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

                <label for="pm">TEL:</label><br>
                <input type="text" id="em" name="Phone" placeholder="Enter Your Phone number" required><br>
                <br>



        </fieldset>

        <fieldset>
            <legend>LOCATION DETAILS</legend>
            <div class="ffff">
                <h1> NOTE THIS:</h1>
                <p> Free delivery Service is only<br>
                    Available in South province of RWANDA <br>
                    Due to short Travel time which is Compatible,<br>
                    With Our Travel Plan, Otherwise U can get our<br>
                    Services Within our HQ.<br>
                    BEST REGARDS...
                </p>
            </div>
            <label>Nationality:</label>
            <select style="width:146px" name="dropbox">
                <option value="rwanda">Rwanda</option>
            </select>
            <br />
            <br />
            <label>Provence:</label>
            <select style="width:146px; margin-left: 15px;" name="slct1" id="slct1" onchange="populate('slct1','slct2')">
                <option value=""></option>

                <option value="southern">Southern</option>

            </select>
            <br />
            <br />
            <label>District:</label>

            <select style="width:146px; margin-left: 29px;" name="slct2" id="slct2" onchange="populate1(this.id,'slct3')"></select>
            <br />
            <br />
            <label>Sectors:</label>
            <select style="width:146px;margin-left: 29px;" name="slct3" id="slct3" onchange="populate2(this.id,'slct4')"></select>
            <br />
            <br />
            <label>Cells:</label>
            <select style="width:146px;margin-left: 45px;" name="slct4" id="slct4" onchange="populate3(this.id,'slct5')">
            </select>
            <br />
            <br />
            <label>Villages:</label>
            <select style="width:146px; margin-left: 25px;" name="slct5" id="slct5"></select>
            <br>
            |<div class="st">
            <label>Place Name:</label>
            <input type="text" name="loca"placeholder=" precise your street or residence name"required>
            </div>
            <script>

                function populate(s1, s2) {
                    var s1 = document.getElementById(s1);
                    var s2 = document.getElementById(s2);
                    s2.innerHTML = "";

                    if (s1.value == "southern") {
                        var optionArray = ["|", "kamonyi|Kamonyi", "muhanga|Muhanga", "ruhango|Ruhango", "nyanza|Nyanza", "gisagara|Gisagara", "nyamagabe|Nyamagabe", "nyaruguru|Nyaruguru"];
                    }

                    for (var option in optionArray) {
                        var pair = optionArray[option].split("|");
                        var newOption = document.createElement("option");
                        newOption.value = pair[0];
                        newOption.innerHTML = pair[1];
                        s2.options.add(newOption);
                    }
                }
                function populate1(s3, s4) {
                    var s3 = document.getElementById(s3);
                    var s4 = document.getElementById(s4);
                    s4.innerHTML = "";

                    if (s3.value == "kamonyi") {
                        var optionArray = ["|", "cyeza|cyeza", "kabacuzi|Kabacuzi", "kabangu|Kabangu", " kiyumba|Kiyumba", "muserero|Muserero", "nyamabuye|Nyamabuye", "muhanga|Muhanga", "nyabinoni|Nyabinoni", "gihango|Gihango", "nyarusange|Nyarusange", "rongi|Rongi", "rugendabari|Rugendabari", "shyogweShyogwe"];
                    }
                    else if (s3.value == "muhanga") {
                        var optionArray = ["|", "nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo", " kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                    }
                    else if (s3.value == "ruhango") {
                        var optionArray = ["|", "nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo", " kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                    }
                    else if (s3.value == "nyanza") {
                        var optionArray = ["|", "nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo", " kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                    }
                    else if (s3.value == "huye") {
                        var optionArray = ["|", "nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo", " kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                    }

                    for (var option in optionArray) {
                        var pair = optionArray[option].split("|");
                        var newOption = document.createElement("option");
                        newOption.value = pair[0];
                        newOption.innerHTML = pair[1];
                        s4.options.add(newOption);
                        console.log(s3.value);
                    }
                }
                function populate2(s5, s6) {
                    var s5 = document.getElementById(s5);
                    var s6 = document.getElementById(s6);
                    s6.innerHTML = "";
                    if (s5.value == "cyeza") {
                        var optionArray = ["|", "shori|Shori", "nyamurima|Nyamurima", "makera|Makera", "biriganga|Biriganga", "kora|Kora", "basumba|Basumba"];
                    }



                    for (var option in optionArray) {
                        var pair = optionArray[option].split("|");
                        var newOption = document.createElement("option");
                        newOption.value = pair[0];
                        newOption.innerHTML = pair[1];
                        s6.options.add(newOption);
                    }
                }
                function populate3(s7, s8) {
                    var s7 = document.getElementById(s7);
                    var s8 = document.getElementById(s8);
                    s8.innerHTML = "";

                    for (var option in optionArray) {
                        var pair = optionArray[option].split("|");
                        var newOption = document.createElement("option");
                        newOption.value = pair[0];
                        newOption.innerHTML = pair[1];
                        s8.options.add(newOption);
                    }
                }
            </script>
        </fieldset>
        <fieldset>
            <legend>PRODUCT DETAILS</legend>
            <div class="det">
                <h1> NOTE THIS:</h1>
                <p> Write Your Inteded Command in<br>
                    The Text box provided also using the same order  <br>
                    In the text box,  After click submit button.<br>
                    you will get notification in ur Email provided<br>
                    confirming registration and products Arrival time <br>
                    Thanks for delivering with us...
                </p>
            </div>
            <label for="Product you wants">Your Command</label><br>

            <textarea id="Product you wants" name="Your Command" placeholder="Enter Product Details..
                                                                                      using the order below
                                                                                      Name:
                                                                                      Quantity:
                                                                                      Condition:"
                style="height:170px;width:602px" required></textarea><br>
            <br>

            <input style="padding-left: 50px;height: 33px;width: 608px;" type="submit" name="Submit">
        </fieldset>


        </form>
    </div>
</body>

</html>




</fieldset>

</form>
</div>
</div>