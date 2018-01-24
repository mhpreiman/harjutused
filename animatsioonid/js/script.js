$(function(){
/*
//    $(".red-box").fadeOut(2000);
//    $(".green-box").fadeOut(4000);
//    $(".blue-box").fadeOut(slow);

//    $(".blue-box").show();
//    $(".blue-box").hide();
//    $(".blue-box").toggle();
*/        
/*
      $(".blue-box").slideUp(2000);    
//    $(".blue-box").slideDown(2000);    
//    $(".blue-box").hide(2000);    
//    $("p").hide();    
//    $("p").slideDown(1000);
*/

    $(".blue-box").
    animate({
        "margin-left":"+=200px"
    }, 1000, "linear").
    toggleClass("color-fade").
    animate({"margin-left":"+=0px"},"fast",function(){
    $(this).toggleClass("color-fade");}).
    animate({
        "margin-left":"-=200px"
    }, 1000, "swing");
    
/*
    $(".blue-box").
    animate({
        "margin-left":"+=200px"
    }, 1000, "linear").
    toggleClass("color-fade").
    animate({
        "margin-left":"-=200px"
    }, 1000, "swing", function(){
    $(this).toggleClass("color-fade");});
*/
    
    
//    $(".red-box").fadeTo(2000,0.2);
//    $(".green-box").delay(1500).fadeTo(1000,0.5);
    
//    $(".red-box").fadeTo(2000,0.2, function(){
//        $(".green-box").fadeTo(2000.0), function(){//siia veel sinine box panna
    //};
//    });

//$(".blue-box").toggleClass("color-fade");
});