$(function(){
    
//  css() 
/*
    $("p").css("background-color","yellow");
    $(".red-box").css("background-color","crimson");
    $("#list").css("background-color","lightblue");
    $("input[type=text]").css("background-color","pink");
    $("h2,p,input").css("background-color","dodgerblue");
    $("li:first").css("background-color","coral");
    $("li:last").css("background-color","rgba(180,49,33,0.5)");
    $(":text").css("background-color","darkorchid");
*/
    
    
//  jQ methods:  find  children  parents   parent    siblings  next  prev
/*
    $("#list").find("li").css("background-color","forestgreen");
    $("#list").children("li").css("background-color","yellowgreen");
    $("#list").parents().css("background-color","lightgreen");
    $("#list").parents("div").css("background-color","limegreen");
    $("li:first li:first").parent().css("background-color","lightpink");
    $("#list").siblings().css("background-color","orange")
    $("#list").siblings(":header").css("background-color","yellow")
    $("li:first li").next().css("background-color","red");
    $("li:first li").prev().css("border-left","solid red");
    
    TODO: vt kõik need siin: https://www.w3schools.com/jquery/jquery_traversing_ancestors.asp
*/
    
    
//  jQ methods:  filter    first    last    eq    filter    not 
    //filter - filter element
/* nested lists index 
*/
    
//find - descendants - BUT ACTUALLY DOESN't WORK LIKE THAT!! it selects the element itself too not JUST its descendants!! (eg find("#elem") also selects #elem, not just its children
/* NB! find(":first") 
$("#list").find(":first-child").css("color","red");
behaviour
- color 1) first level element - 2) second level first element - 3) etc  
-that's actually a bug 
*/
    
/*
    $("#list").find("> li:even").css("background-color","orange");
    //is the same as
    $("#list").find("> li").filter(":even").css("background-color","orange");
*/
    
/* 
    $("li").filter(function(index){z
        return index % 3 === 0;
    }).css("background","crimson");

    $("li").filter(function(index){
        return index % 3 === 1;
    }).css("background","blue");
*/
    
/*TEST - come back later
    $("li").filter(function(index){
    return index === 5;}).css("background-color","orange");

    $("li").filter(function(index){
        return $(this).index+;}).prepend("&emsp;<small>i/small>&emsp;&emsp;&emsp;"");
*/


// ÜLESANNE
//        $("#list").children("li").filter(":even").css("background-color","orange");
    
    
/*
// ÜLESANNE
$("li").filter(function(index){
    return index % 3 === 2;
}).css("background-color","orange");
*/

/*$("li").first().css("background-color","orange");    
$("li").last().css("background-color","orange");    
$("li").eq(4).css("background-color","orange");    
$("li").not(":first").css("background-color","gold");  */  

    
// ÜLESANNE
$("li").filter(function(index){
    return index % 3 === 1;
}).css("background-color","blue");

$("#list").not(function(index){
    return index % 3 === 1;
}).css("background-color","lightblue");
    
});