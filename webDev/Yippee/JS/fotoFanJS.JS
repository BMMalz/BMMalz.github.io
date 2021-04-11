
        var Obj;
        var notNeeded;
        var urlResults = location.search.replace('?', '').split('=');
        var User = urlResults[1];
        
        $(document).ready(function(){
            $.get("PHP/photos.php?User=" + User, notNeeded, function (response) {
                Obj = JSON.parse(response);
                if (!Obj.success)
                {
                    alert("You're not supposed to be here...");
                }
        });
        });
        var optionName = "";
        var lastPhoto = "";
        $(".option").click(function() {
           optionName = $(this).attr("id");
        });
        $("#logout").click(function(){
            location.href = "index.html"; 
        });
        $("#theButton").click(function() {
            $("#slideshow").attr('style', 'display');
            var searchName = document.getElementById("inputSearch");
            searchName = searchName.value;
            if (searchName === "") {
                searchName = optionName;
            } 
            var found = false;
            var overallFound = false;
            var i = 0;

            for(k = 0; k < Obj.photos.length; k++){
                found = false;
                //alert(Obj.photos[k].filename);
                if (Obj.photos[k].Continent === searchName){
                    found = true;
                    overallFound = true;
                }
                else if (Obj.photos[k].Country === searchName){
                    found = true;
                    overallFound = true;
                }
                else if (Obj.photos[k].Date === searchName){
                    found = true;
                    overallFound = true;
                }
                else if (Obj.photos[k].Location === searchName){
                    found = true;
                    overallFound = true;
                }
                else
                {
                    for (j = 0; j < Obj.photos[k].Tags.length; j++)
                    {
                        if (Obj.photos[k].Tags[j] === searchName)
                        {
                            found = true;
                            overallFound = true;
                        }
                    }
                }
                if (found)
                {
                    $("#incorrect").html("");
                    if (i === 0)
                    {
                        for (x=1;x<25;x++) {
                            $("#photo" + x).removeAttr('src');
                        }
                        //$("#mainDiv").attr('style', 'display: show');
                        $("#metaBox").attr('style', 'display: block');
                        $("#rightArrow").attr('style', 'display');
                        $("#leftArrow").attr('style', 'display');
                        $("#leftArrow").attr('src', 'images/left.png');
                        $("#rightArrow").attr('src', 'images/right.png');
                        $("#mainPhoto").attr('src',Obj.photos[k].filename);
                        $("#photo" + (i + 1)).attr('src',Obj.photos[k].filename);
                        if (i < 24)
                            lastPhoto = "photo" + (i+1);
                        var metaDate = Obj.photos[k].Date;
                        var metaLocat = Obj.photos[k].Location + ", " + Obj.photos[k].Country;
                        var metaDesc = Obj.photos[k].Description;
                        $("#yearData").html("Year: " + metaDate);
                        $("#locationData").html("Location: " + metaLocat);
                        $("#descData").html("Description: " + metaDesc);
                        i++;
                    }
                    else
                    {
                        $("#photo" + (i + 1)).attr('src',Obj.photos[k].filename);
                        if (i < 24)
                            lastPhoto = "photo" + (i+1);
                        i++;
                    }
                }
            }
            
            if (!overallFound){
                $("#incorrect").html("Search returned no results... Please try again.");
                $("#metaBox").attr('style', 'display: none');
                $("#slideshow").attr('style', 'display: none');
                for (x=1;x<25;x++) {
                    $("#photo" + x).removeAttr('src');
                }
                $("#mainPhoto").removeAttr('src');
                $("#leftArrow").attr('style', 'display: none');
                $("#rightArrow").attr('style', 'display: none');
            }
            found=false;
        });
        
        $("#leftArrow").click(function() {
            var num = parseInt(photoName.substring(5));
            var lastNum = 0;
            var source = "";
            if (num === 1) {
                lastNum = parseInt(lastPhoto.substring(5));
                source = ($("#photo" + lastNum).attr('src'));
                $( "#mainPhoto" ).fadeTo( "fast" , 0, function() {
                    $("#mainPhoto").attr('src',source);
                    var curFile = $("#mainPhoto").attr('src');
                    for (i = 0; i < Obj.photos.length; i++)
                    {
                        //alert(i);
                        if (curFile === Obj.photos[i].filename)
                        {
                            objPosition = i;
                        }
                    }
                    var metaDate = Obj.photos[objPosition].Date;
                    var metaLocat = Obj.photos[objPosition].Location + ", " + Obj.photos[objPosition].Country;
                    var metaDesc = Obj.photos[objPosition].Description;
                    $("#yearData").html("Year: " + metaDate);
                    $("#locationData").html("Location: " + metaLocat);
                    $("#descData").html("Description: " + metaDesc);
                });
                $("#mainPhoto").fadeTo( "fast" , 1);
                photoName = "photo" + (lastNum);
            } else {
                source = ($("#photo" + (num-1)).attr('src'));
                $( "#mainPhoto" ).fadeTo( "fast" , 0, function() {
                    $("#mainPhoto").attr('src',source);
                    var curFile = $("#mainPhoto").attr('src');
                    for (i = 0; i < Obj.photos.length; i++)
                    {
                        //alert(i);
                        if (curFile === Obj.photos[i].filename)
                        {
                            objPosition = i;
                        }
                    }
                    var metaDate = Obj.photos[objPosition].Date;
                    var metaLocat = Obj.photos[objPosition].Location + ", " + Obj.photos[objPosition].Country;
                    var metaDesc = Obj.photos[objPosition].Description;
                    $("#yearData").html("Year: " + metaDate);
                    $("#locationData").html("Location: " + metaLocat);
                    $("#descData").html("Description: " + metaDesc);
                });
                $("#mainPhoto").fadeTo( "fast" , 1);
                photoName = "photo" + (num-1);
            }
            var curFile = $("#mainPhoto").attr('src');
                for (i = 0; i < Obj.photos.length; i++)
                {
                    //alert(i);
                    if (curFile === Obj.photos[i].filename)
                    {
                        objPosition = i;
                    }
                }
                var metaDate = Obj.photos[objPosition].Date;
                var metaLocat = Obj.photos[objPosition].Location + ", " + Obj.photos[objPosition].Country;
                var metaDesc = Obj.photos[objPosition].Description;
                $("#yearData").html("Year: " + metaDate);
                $("#locationData").html("Location: " + metaLocat);
                $("#descData").html("Description: " + metaDesc);
        });
        
        $("#rightArrow").click(function() {
            var num = parseInt(photoName.substring(5));
            var lastNum = 0;
            lastNum = parseInt(lastPhoto.substring(5));
            var source = "";
            if (num === lastNum) {
                source = ($("#photo" + 1).attr('src'));
                $( "#mainPhoto" ).fadeTo( "fast" , 0, function() {
                    $("#mainPhoto").attr('src',source);
                    var curFile = $("#mainPhoto").attr('src');
                    for (i = 0; i < Obj.photos.length; i++)
                    {
                        //alert(i);
                        if (curFile === Obj.photos[i].filename)
                        {
                            objPosition = i;
                        }
                    }
                    var metaDate = Obj.photos[objPosition].Date;
                    var metaLocat = Obj.photos[objPosition].Location + ", " + Obj.photos[objPosition].Country;
                    var metaDesc = Obj.photos[objPosition].Description;
                    $("#yearData").html("Year: " + metaDate);
                    $("#locationData").html("Location: " + metaLocat);
                    $("#descData").html("Description: " + metaDesc);
                });
                $("#mainPhoto").fadeTo( "fast" , 1);
                photoName = "photo" + 1;
            } else {
                source = ($("#photo" + (num+1)).attr('src'));
                $( "#mainPhoto" ).fadeTo( "fast" , 0, function() {
                    $("#mainPhoto").attr('src',source);
                    var curFile = $("#mainPhoto").attr('src');
                    for (i = 0; i < Obj.photos.length; i++)
                    {
                        //alert(i);
                        if (curFile === Obj.photos[i].filename)
                        {
                            objPosition = i;
                        }
                    }
                    var metaDate = Obj.photos[objPosition].Date;
                    var metaLocat = Obj.photos[objPosition].Location + ", " + Obj.photos[objPosition].Country;
                    var metaDesc = Obj.photos[objPosition].Description;
                    $("#yearData").html("Year: " + metaDate);
                    $("#locationData").html("Location: " + metaLocat);
                    $("#descData").html("Description: " + metaDesc);
                });
                $("#mainPhoto").fadeTo( "fast" , 1);
                photoName = "photo" + (num+1);
            }

        });
        
        $(".bar").click(function() {
            $(".hideBar").attr('style', 'display:none');
            var barName = $(this).attr("id");
            $("#inputSearch").attr('style', 'display: none');
            $("#" + barName + "Bar").attr('style', 'display: show');
            if (barName == "Search") {
                $("#inputSearch").attr('style', 'display: show');
                $(".hideBar").attr('style', 'display:none');
            }
        });
        var myVar;
        $("#slideshow").click(function() {
            $("#metaBox").attr('style', 'display: none');
            $("#slideShowDiv").attr('style', 'display: block');
            var source = ($("#" + photoName).attr('src'));
            $("#mainPhotoSlide").attr('src', source);
            $("#x").attr('style', 'display: block');
            setInterval(displayPhoto, 3000);
        });
        
        function displayPhoto() {
            var num = parseInt(photoName.substring(5));
            var lastNum = 0;
            lastNum = parseInt(lastPhoto.substring(5));
            var source = "";
            if (num === lastNum) {
                source = ($("#photo" + 1).attr('src'));
                $( "#mainPhotoSlide" ).fadeTo( "fast" , 0, function() {
                    $("#mainPhotoSlide").attr('src',source);
                });
                $("#mainPhotoSlide").fadeTo( "fast" , 1);
                photoName = "photo" + 1;
            } else {
                source = ($("#photo" + (num+1)).attr('src'));
                $( "#mainPhotoSlide" ).fadeTo( "fast" , 0, function() {
                    $("#mainPhotoSlide").attr('src',source);
                });
                $("#mainPhotoSlide").fadeTo( "fast" , 1);
                photoName = "photo" + (num+1);
            }
        }
        
        $("#x").click(function() {
            clearInterval(myVar);
            $("#metaBox").attr('style', 'display: block');
            $("#mainPhotoSlide").removeAttr('src');
            $("#slideShowDiv").attr('style', 'display: none');
            $("#x").attr('style', 'display: none');
            
        });
        
        var photoName = "photo1";
        var objPosition;
        
        
        $(".small").click(function() {
            var photoName = $(this).attr("id");
            var source = ($("#" + photoName).attr('src'));
            $( "#mainPhoto" ).fadeTo( "fast" , 0, function() {
                $("#mainPhoto").attr('src',source);
                var curFile = $("#mainPhoto").attr('src');
                for (i = 0; i < Obj.photos.length; i++)
                {
                    //alert(i);
                    if (curFile === Obj.photos[i].filename)
                    {
                        objPosition = i;
                    }
                }
                var metaDate = Obj.photos[objPosition].Date;
                var metaLocat = Obj.photos[objPosition].Location + ", " + Obj.photos[objPosition].Country;
                var metaDesc = Obj.photos[objPosition].Description;
                $("#yearData").html("Year: " + metaDate);
                $("#locationData").html("Location: " + metaLocat);
                $("#descData").html("Description: " + metaDesc);
                });
            $("#mainPhoto").fadeTo("fast", 1);
           
        });
        