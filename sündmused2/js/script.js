/*jslint browser: true*/
/*global $, console*/

/*eslint-disable no-console*/

$(function() {
/*
    var inputFields = $(":text, :password, textarea");
    inputFields.focus(function(){
        $(this).css("box-shadow","10px 0 4px #FF5733");
    });    
    
    inputFields.blur(function(){
        $(this).css("box-shadow","none");
    });
*/
    
    
    // ÜLESANNE 1
/*
    var inputFields = $(":text, :password, textarea, #checkbox");
    
    inputFields.focus(function(){
          $(this).css({"box-shadow":"0 0 4px 1px gray", "border":"thin  solid gray"});
    });    
     
    // Input field blur & change
    inputFields.on("blur change", function(){
        var field = $(this);
        var fieldID = $(this).attr("id");
        var conditions;
        var addElement;
        
        switch(fieldID) {
            case "name":
                //name that's 3+ words
                conditions = field.val().length >= 3; 
                break;
            case "checkbox":
                conditions = field.prop("checked");     //or    is(":checked");
                addElement = "label[for='cb']";
                break;
            default:
                return;
        }
        
        if (conditions) {
            $(this).add(addElement).css({"box-shadow":"0 0 4px 1px lawngreen", "border":"thin solid lawngreen"});
        }
        else {
            $(this).add(addElement).css({"box-shadow":"0 0 4px 1px tomato", "border":"thin solid tomato"});    
        }
    });    
    // Input field blur & change    END
*/

    

    // ÜLESANNE 2
    $("#selection").change(function(){
        alert($(this).find(":selected").text());
    });
    


    // Form submit
/*
    $("form").submit(function(event){
        var textarea = $("#message");
        
        if (textarea.val().trim() == "") {
            textarea.css({"box-shadow":"0 0 4px 1px tomato", "border":"thin solid tomato"});
            event.preventDefault();
        } 
        else {  }
        
    });
*/
    
    
    
    // ÜLESANNE 3 ja 4
    // Form submit with dynamic validation and visual feedback
    formElements = {
        name : { 
            condition : "val().length > 2",
            validationMsg : "Palun sisesta vähemalt 3 tähemärki",
            firstFocus : true,
            validity : false
        },   
        password : { 
            condition : "val().length >= 6",
            validationMsg : "Parool peab olema vähemalt 6 sümbolit pikk",
            firstFocus : true,
            validity : false
        },                        
        message : { 
            condition : "val().trim() !== '' ",
            validationMsg : "Palun sisesta sõnum",
            firstFocus : true,
            validity : false
        },
        checkbox : {
            condition : "prop('checked')",
            additionalElement : "label[for='checkbox']",
            validationMsg : "Peab olema valitud",
            firstFocus : true,
            validity : false
        }
    };
    var fieldID;
    var inputFields = $("#name, #password, #message, #checkbox");
    var validForm = true;      //whether all fields are valid

    
    //Focus
    inputFields.on("focus", function(){
        $(this).css({"box-shadow":"0 0 4px 1px gray", "border":"thin  solid gray"});
    });

    //Blur
    inputFields.on("blur change", function(){   //change event for checkbox
        var fieldID = $(this).attr("id");
        formElements[fieldID]["firstFocus"] = false;       //element has been focused already, set firstFocus to false
        validateField(fieldID);
    });

    //Keys
    inputFields.on("keyup keydown keypress change", function(){
        var fieldID = $(this).attr("id");
        if (formElements[fieldID]["firstFocus"] == false) {    //avoid triggering on first focus
            validateField(fieldID);
        }
    });

    //Validation
    function validateField(fieldID) {
        var field = '$("#'+fieldID+'").';
        var conditions = formElements[fieldID]["condition"];
        var validOrNot = eval(field+conditions);       //turn it into js code (so it'll run in if()!!!) 
        var addElement = formElements[fieldID]["additionalElement"];
        var validationMsg = formElements[fieldID]["validationMsg"];

        if (validOrNot)  {
            $("#"+fieldID).add(addElement).css({"box-shadow":"0 0 4px 1px lawngreen", "border":"thin solid lawngreen"});
            $("#"+fieldID+"-feedback").hide();
        }    
        else {
            $("#"+fieldID).add(addElement).css({"box-shadow":"0 0 4px 1px tomato", "border":"thin solid tomato"});    
            $("#"+fieldID+"-feedback").show().text(validationMsg);
            validForm = false;
        }
    }    

    // Validate all elements at once and submit if valid
    $("form").submit(function (event){
        
        // validate elements
        for (var fieldKey in formElements) {
            validateField(fieldKey);    //to show visual feedback    
            var fieldCheck = eval('$("#'+fieldKey+'").'+formElements[fieldKey]["condition"]);       //turn it into js code (so it'll run in if()!!!) 
            
            //stop form submit
            if (fieldCheck !== true ) {
                event.preventDefault();
            }
        }     
    });

    
    //Popups
    var popup1 = '<div class="popup" id="popup1"><span href="">&#10006;</span><p>Esimesel fookusel tagasisidet ei kuvata <br>(muidu tüütab kasutajat)</p></div>';
    var popup2 = '<div class="popup" id="popup2"><span>&#10006;</span><p>Tähti kustutades muutub välja äär vastavalt tingimusele <br>(nt nime puhul alla 3 tähemärgi)</p></div>';
    var popupStyles = `<style>       
        .popup {                                  
            font-size: 13px;                    
            color: dimgray;                    
            line-height: 1.7;                   
            width: 152px;                       
            position: absolute;               
            margin-top: -95px;               
            margin-left: 230px;               
            padding: 2px 7px 2px 17px;
            border-radius: 10px;             
            box-shadow: 0.5px 0.5px 2px gray;
            background: #fff;                  
        }                                                
        .popup span {                        
            float: right;                   
            position: relative;         
            text-decoration: none; 
            margin:2px 6px 0 0;               
            font-size: 18px;                  
            cursor: pointer;
        }                                       
        #popup1:after {    
            content: "";    
            display: block;    
            position: absolute;    
            left: -16.5px;    
            top: 65px;    
            width: 0;    
            border-width: 10px 10px 0;    
            transform: rotate(90deg);    
            border-style: solid;    
            border-color: gray transparent;    
        }    
        #popup2 {
            margin:50px 0 0 350px;
        }
    </style>`;

    $('head').append(popupStyles);          //add styles for popups (avoid littering the main stylesheet)
    $('#name-feedback').after(popup1, popup2);      //add popups to html
    $('.popup span').click(function() {      //add functionality to close popups
        $(this).parent().hide();
    });
    //Popups        END
    // ÜLESANNE 3 ja 4       END
    
    
    
    // ÜLESANNE 3 - juhendi versioon
    // Form submit (without dynamic validation)
//    $('form').submit(function(event){
//        var name = $('#name').val();
//        var password = $('#password').val();
//        var message = $('#message').val();
//        var checked = $('#checkbox').is(":checked");
//        
//        validateNameField(name, event);
//        validatePasswordField(password, event);
//        validateMessageField(message, event);
//        validateCheckboxField(checked, event);
//        
//        //Name validation
//        function validateNameField(name,event) {
//            if (!isValidName(name)) {
//                $('#name-feedback').text("Palun sisesta vähemalt 2 tähemärki");
//                event.preventDefault();
//            } else {
//                $('#name-feedback').text("");
//            }
//        }
//        function isValidName(name) {
//            return name.length >= 2;
//        }  
//        
//        //Password validation
//        function validatePasswordField(password,event) {
//            if (!isValidPassword(password)) {
//                $('#password-feedback').text("Parool peab olema vähemalt 6 sümbolit pikk");
//                event.preventDefault();
//            } else {
//                $('#password-feedback').text("");
//            }
//        }
//        function isValidPassword(password) {
//            return password.length >= 6;
//        }  
//            
//        //Message validation
//        function validateMessageField(message,event) {
//            if (!isValidMessage(message)) {
//                $('#message-feedback').text("Palun sisesta sõnum");
//                event.preventDefault();
//            } else {
//                $('#message-feedback').text("");
//            }
//        }
//        function isValidMessage(message) {
//            return message.trim() != "";
//        }  
//
//        //Checkbox validation
//        function validateCheckboxField(isChecked,event) {
//            if (!isChecked) {
//                $('#checkbox-feedback').text("Palun tingimustega nõustuda");
//                event.preventDefault();
//            } else {
//                $('#checkbox-feedback').text("");
//            }
//        }
//    });
        // ÜLESANNE 3 - juhendi versioon        END
    
    
    
    // ÜLESANNE 4 - uus versioon
/*
    var form = $('form');
    var formElements = {
        name : { 
            condition : ".val().length > 2",
            validationMsg : "Palun sisesta vähemalt 3 tähemärki",
        },   
        password : { 
            condition : ".val().length >= 6",
            validationMsg : "Parool peab olema vähemalt 6 sümbolit pikk"
        },                        
        message : { 
            condition : ".val().trim() !== '' ",
            validationMsg : "Palun sisesta sõnum"
        },
        checkbox : {
            condition : ".prop('checked')",
            additionalElement : "label[for='checkbox']",
            validationMsg : "Peab olema valitud"
        }
    };

    
    //Form submission
    form.submit(function(){
        validateFields(this);
    });

    //Field blur (unfocus)
    $("#name, #password, #message, #checkbox").blur(function(){
        validateFields(this);
    });

    //Validation
    function validateFields(fields) {

    //Form was submitted - check all fields
    if (fields.nodeName == "FORM") {
        //Looks after each key (field) in formElements array
        $.each(formElements, function(field){	
            var field = document.getElementById(field);		//same as  $("#"+field)[0]
            validateField(field);
        });
    }
    //Field was unfocused - check single field 
    else {
        validateField(fields);
    }

    function validateField(fieldElement) {
        var fieldID = fieldElement.id;
        var targetField = '$("#"+fieldID)';
        var condition = formElements[fieldID]["condition"];
        var validationMessage = formElements[fieldID]["validationMsg"];

        if (!eval(targetField+condition)) {
            $("#"+fieldID+"-feedback").text(validationMessage);
            $(fieldElement).css({"box-shadow":"0 0 4px 1px tomato", "border":"thin solid tomato"});
            event.preventDefault();
        } 
        else {
            $("#"+fieldID+"-feedback").text("");
            $(fieldElement).css({"box-shadow":"0 0 4px 1px lawngreen", "border":"thin solid lawngreen"});
        }
    }
}
*/
//Validation	END
// ÜLESANNE 4 - uus versioon        END
    
    
    
    
});    