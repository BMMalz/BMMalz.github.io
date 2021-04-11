var loggedIn = false;
    var currentUser;
    var notNeeded;
    $("#fotoLink").click(displayWarning);
    
    function displayWarning(){
        if (loggedIn === false){
            $("#warningMessage").css("visibility", "visible");
        }
    }
    //alert("hey");
    
    $("#logButton").click(loggingIn);
    
    function loggingIn(){
        //alert("hey");
        //var userBaseObj = JSON.parse(userBase);
        var userInput = $("#userBox").val();
        var passInput = $("#passBox").val();
        var phpStr = userInput + "," + passInput;
        //var i = 0;
        $.get("PHP/user.php?Input=" + phpStr, notNeeded, function (response) {
            userBaseObj = JSON.parse(response);
            if (userBaseObj.success === true)
            {
                loggedIn = true;
                currentUser = userInput;
            }
            if (loggedIn === true)
            {
            $("#loginBox").html("");
            $("#loginBox").prepend('<img width=200 src="images/check.png"><br>');
            $("#loginBox").append("Welcome back, " + currentUser + ".<br>");
            $("#loginBox").append('<input type="submit" value="Log Out" id="outButton" style="margin-top: 5px; margin-bottom: 5px;"></input>');
            $("#outButton").click(loggingOut);
            $("#fotoLink").html('<a href="" id="fotoA">FotoFan</a>');
            $("#fotoA").attr("href", "FotoFan.html?User=" + currentUser);
            $("#warningMessage").css("visibility", "hidden");
            }
            else if (loggedIn === false)
            {
                $("#loginFailed").html("Username or password not recognized.");
                return false;
            }
            });
        //alert(loggedIn);
        /*while (i < userBaseObj.userbase.length)
        {
            if (userBaseObj.userbase[i].username == userInput)
            {
                if (userBaseObj.userbase[i].password == passInput)
                {
                    loggedIn = true;
                    currentUser = userBaseObj.userbase[i].username;
                }
            }
            i++;
        }*/
        /*if (loggedIn === true)
        {
            $("#loginBox").html("");
            $("#loginBox").prepend('<img width=200 src="images/check.png"><br>');
            $("#loginBox").append("Welcome back, " + currentUser + ".<br>");
            $("#loginBox").append('<input type="submit" value="Log Out" id="outButton" style="margin-top: 5px; margin-bottom: 5px;"></input>');
            $("#outButton").click(loggingOut);
            $("#fotoLink").html('<a href="FotoFan.html">FotoFan</a>');
            $("#warningMessage").css("visibility", "hidden");
        }
        else if (loggedIn === false)
        {
            $("#loginFailed").html("Username or password not recognized.");
            return false;
        }*/
    }
    
    
    
    function loggingOut(){
        loggedIn = false;
        $("#fotoLink").html("FotoFan");
        $("#loginBox").html("");
        $("#loginBox").append('<span id="loginCSS">');
        $("#loginBox").append('<form id="loginForm">');
        $("#loginBox").append('<span class="loginWords">Username</span><br>');
        $("#loginBox").append('<input type="text" id="userBox" style="margin: 5px;"><br>');
        $("#loginBox").append('<span class="loginWords">Password</span> <br>');
        $("#loginBox").append('<input type="password" id="passBox" style="margin: 5px;"><br>');
        $("#loginBox").append('<input type="button" value="Log In" id="logButton" style="margin-top: 5px; margin-bottom: 5px;"></input><br>');
        $("#loginBox").append('<span id="loginFailed"></span>');
        $("#loginBox").append('</form>');
        $("#loginBox").append('</span>');
        $("#logButton").click(loggingIn);
    }
