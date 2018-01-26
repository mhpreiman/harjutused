
//Responsive screen width shower
var show_width = 1;

if(show_width == 1) {
    $(document).ready(function() {
        $(window).resize(function(){
            var screen_width = $(window).width();
            document.getElementById("screen_width").innerHTML = "Window width: "+screen_width.toString();
        });
    });
}