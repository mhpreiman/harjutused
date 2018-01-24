/*jslint browser: true*/
/*global $, console*/

/*eslint-disable no-console*/

$(function() {
    
    $('#btn-click').click(function(event){
        alert("Vajutasid nupule!");
        console.log(event);
    });
    
    
    
    // ÜLESANNE 1
    $('.red-box,.blue-box,.green-box').click(function(event){
        var box = $(this).attr("class");
        var fadeSpeed = "500"; 
        
        switch(box) {
            case "red-box":
                op = "0.2";
                break;
            case "blue-box":
                op = "0.8";
                break;
            case "green-box":
                op = "0.5";
                break;
            default:
                return;
            }
        $('.'+box).fadeTo(fadeSpeed,op);
        
    });
//    $("[class*='-box']").click();
    
    
    
    $('#btn-hover').hover(function(){
        alert("Lohistasid nupust üle!");
    });
        
    
    
    // ÜLESANNE 2
    $('.green-box').hover(function(){
        $(this).text("Hiir lohises siit üle");
    });
    
    
    
    $('.blue-box').mouseenter(function(){
        $(this).fadeTo(500,0.7);
    }).mouseleave(function(){
        $(this).fadeTo(500,1);
    });
    
    
    
    // ÜLESANNE 3
    $('.blue-box').hover(function(){
        $(this).fadeTo(500,0.7);
    }, function(){
        $(this).fadeTo(500,1);
    });
    
    
    
    $('html').on("click mouse keydown", function(){
        console.log("toimus click/hover/keydown sündmus");
    });
    
    
    
    // ÜLESANNE 4   
    var images = [
        "images/laptop-mobile_small.jpg",
        "images/laptop-on-table_small.jpg",
        "images/people-office-group-team_small.jpg"
    ];
    
    var i = 0;
/*
    $('.gallery').find("img").on("click",function(){
        //loo järgm pildi indeks
        i = (i + 1) % images.length;
        $(this).fadeOut(function(){
            $(this).attr("src",images[i]).fadeIn();
        });
    });*/
    
    
    
    function logEvent() {
        console.log("Toimus hiireklõps või klahvivajutus");
    }
    $("html").on("click keydown", logEvent());
    
    
    
    // ÜLESANNE 5   
    //muutujad 'images' ja 'i' ülesande 4 all 
    
    var galleryImage = $(".gallery").find("img");
    
//    $('.gallery').on("click", switchToNextImage);
//    
//    function switchToNextImage() {
//        //loo järgm pildi indeks
//        i = (i + 1) % images.length;
//        galleryImage.fadeOut(function() {
//            galleryImage.attr("src",images[i]).fadeIn();
//        });
//    }
    
    
    //Delegeerimine
    $("p").click(function(){
        $(this).slideUp();
    });
    $("#content").append("<p>Dünaamiliselt lisatud paragrahv</p>");
    
    //Delegeeritud
    $("#content").on("click","p", function(){
        $(this).slideUp();
    });
    
    
    
    // ÜLESANNE 6 ja 7
    $("#list").on("mouseenter mouseleave","li", function(){
        $(this).css("color","gray");
    });
    
    
    
    //Userdata
    $("#btn-click").click(
        {
        user: "Helena",
        domain:window.location.hostname
        },
        function(event){
            greetUser(event.data);
        }
    );
    
    function greetUser(userdata){
        console.log(userdata);
        username = userdata.user || "Anonüüm";
        domain = userdata.domain || "example.com";
        alert("Tere tulemast " + username + " - " + domain + "!");
    }
    
      
    //Galerii
    var galleryItmes = $(".gallery").find("img");
    galleryItmes.css({"width":"33%","opacity":"0.7"});

    galleryItmes.mouseenter(function(){
        $(this).stop().fadeTo(500,"0");
    });    
    galleryItmes.mouseleave(function(){
        $(this).stop().fadeTo(500,"0.7");
    });

    
    
    //KOONDÜLESANNE
    //Lightbox
    galleryItmes.click(function(){
        var source = $(this).attr("src");
        var image = $("<img>").attr("src",source).css("width","100%");
        $(".lightbox").empty().append(image).fadeIn(2000);
    });
    
    $("#content").on("click",".lightbox",function(){
        $(this).stop().fadeOut();
    });
    
    
    
    //Key events
    $("html").keydown(function(event){
        
        if(event.which == 39) {
            var blueBox = $(".blue-box");
            blueBox.animate({
                "margin-left":"+=10px"
            }, 500);
            
        console.log(event.which);
        console.log(blueBox.css("margin-left"));
        }
    });
    
    
});