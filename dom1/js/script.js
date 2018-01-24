/*jslint browser: true*/
/*global $, console*/

/*eslint-disable no-console*/

$(function() {
    
//    $("ul ul:first").append("<li>lisaelement (append)</li>");
//    $("<li>olen viimane alamelement (appendTo)</li>").appendTo("ul ul:first");
//    $("ul ul:first").prepend("<li>olen esimene alamelement (prepend)</li>");
//    $("<li>olen esimene alamelement (prependTo)</li>").prependTo("ul ul:first");
    
    
    // ÜLESANNE 1
//    $("#content").prepend("<p>Maria Helena Preiman</p>");
    
    
    //append vs after:
    //append puts data ~inside~ an element at last index
    //after puts the element after the element
//    $(".red-box").after("<div class='red-box'>Punane 2</div>");
//    $(".blue-box").before("<div class='blue-box'>Sinine 0</div>");
     
//    $(function(){ 
//        $(".blue-box").before(function(){   
//            return "<div class='blue-box'>Sinine 0</div>";
//        });
//    });
    
    
  // ÜLESANNE 2
    $(".blue-box").after($(".red-box"));
    
    
//    $(".red-box, .blue-box").replaceWith("<div class='green-box'>Veel rohelist</div>");
//    $("<div class='green-box'>Veel rohelist</div>").replaceAll(".red-box, .blue-box");
        
    
  // ÜLESANNE 3
    $("<li>Asendatud alamelement 1</li>").replaceAll($("li li:first-of-type"));
    
    
//    $("li").remove();
    
  // ÜLESANNE 4
//    $("form").children().not(":text, textarea, br").remove();
    
    
    var detachedListItem = $("li").detach();
    $("#content").append(detachedListItem);
    
    $('p:first').empty();
    
    
  // ÜLESANNE 5
    $(".red-box, .green-box, .blue-box").empty();
    
    
    var specialLink = $("#special-link");
    console.log(specialLink.attr("href"));
    
    var checkbox = $("input:checkbox");
    console.log(checkbox.prop("checked"));
    console.log(checkbox.attr("checked"));
    
    var textInput = $("input:text");
    console.log(textInput.val());
    
    var rangeInput = $("input[type='range']");
    console.log(rangeInput.val());
    
    
  // ÜLESANNE 6 galerii
    var galleryImage = $(".gallery").find("img").first();
    var images = [
        "images/laptop-mobile_small.jpg",
        "images/laptop-on-table_small.jpg",
        "images/people-office-group-team_small.jpg"
    ];
    
    var i = 0;
    setInterval(function(){
        //loo järgm pildi indeks
        i = (i + 1) % images.length;
        galleryImage.fadeOut(function(){
            $(this).attr("src", images[i]);
            $(this).fadeIn();
        });
        console.log(galleryImage.attr("src"));
    }, 2000);
    
});