/*jslint browser: true*/
/*global $, console*/

/*eslint-disable no-console*/

$(function() {

/*    var redBox = $(".red-box");
    console.log(redBox.css("width"));   //80px
    console.log(redBox.width());        //80
    
    redBox.css("background-color","orange");
    $("p").css("font-size","18px");*/
    
    
    
    // ÜLESANNE 1
//  $('.red-box').css({'width': '50%'});
   
/*for some reason this:
        $(".red-box, .blue-box, .green-box").css("width",$(this).width()*1.5);    
does not have the same effect as this: */
/*    $('.red-box, .blue-box, .green-box').css('width', function() { 
        return $(this).width()*1.5;
    });


    
    var properties = $("p").css(["font-size","line-height","color"]);
    console.log(properties);
    console.log(properties["font-size"]);
    
    
    var redBox = $('.red-box');
    redBox.css("user-select","none");

    
    $('a').addClass("fancy-link");
    $('p:first').addClass("large emphasize");
    //add indexed classes eg 'item-3'  
    $('li li').addClass(function(index) {
        return "item"+index;
    });
    //add 'red-box' class to 'dummy' class
    $('div').addClass(function(index, currentClass) {
        if (currentClass === "dummy") {
            return "red-box";   
        }
    });
//    $('.red-box').removeClass('red-box');
    $('.red-box').removeClass('red-box').addClass('blue-box');
    */
    
    
    
    // ÜLESANNE 2
    $('.red-box').removeClass('red-box').addClass('blue-box');
    $('.dummy').removeClass('dummy').addClass('green-box');
    
    
    
    //Galerii
        var gallery = $(".gallery") ;
        var images = [
            "images/laptop-mobile_small.jpg",
            "images/laptop-on-table_small.jpg",
            "images/people-office-group-team_small.jpg"
        ];
    
    gallery.data("availableImages",images);
    gallery.data("name","mingi galerii");
    
    console.log(gallery.data("availableImages"));
    console.log(gallery.data());
    
    //append images by looping the data array
    $('.gallery').append(function(index){
        var imgData = gallery.data("availableImages");
        var imgTags;
        for (i = 0; i < imgData.length; i++) {
            imgTags += '<img src="'+imgData[index]+'">'; 
            index++;
        }
        return imgTags;
    });
    
    gallery.removeData('availableImages');
    console.log(gallery.data());
    
    
    
    var firstPar = $('p:first');
    console.log(firstPar.data("mydata"));
    console.log(firstPar.text());
    console.log(firstPar.html());

    
    gallery.remove();
    


    // ÜLESANNE 3
//    firstPar.text("<strong>Tere</strong> Maailm!");
//    firstPar.html("<strong>Tere</strong> Maailm!");



    // ÜLESANNE 4
    firstPar.append("<br>appendiga lisatud tekst");

});