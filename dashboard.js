$("#linkdiv-0").hover(function() {
    $("#linkdiv-0").css("backgroundColor", "#186768");
}, function() {
    $("#linkdiv-0").css("backgroundColor", "#10595B");
});

$("#linkdiv-1").hover(function() {
    $("#linkdiv-1").css("backgroundColor", "#186768");
}, function() {
    $("#linkdiv-1").css("backgroundColor", "#10595B");
});

$("#linkdiv-2").hover(function() {
    $("#linkdiv-2").css("backgroundColor", "#186768");
}, function() {
    $("#linkdiv-2").css("backgroundColor", "#10595B");
});

$("#linkdiv-3").hover(function() {
    $("#linkdiv-3").css("backgroundColor", "#186768");
}, function() {
    $("#linkdiv-3").css("backgroundColor", "#10595B");
});





$("#linkdiv-0").click(function() {
    $("#dashboard-subtitle").html("student dashboard");
    //Dashboard
});

$("#linkdiv-1").click(function() {
    $("#dashboard-subtitle").html("news");
    //News
});

$("#linkdiv-2").click(function() {
    $("#dashboard-subtitle").html("resources");
    //Resources
});

$("#linkdiv-3").click(function() {
    $("#dashboard-subtitle").html("other");
    //Other
});




















$(window).scroll(function () { 

// distance from top of footer to top of document
var footertotop = ($('#footer').position().top);
// distance user has scrolled from top, adjusted to take in height of sidebar (570 pixels inc. padding)
var scrolltop = $(document).scrollTop()+650;
// difference between the two
var difference = scrolltop-footertotop;

// if user has scrolled further than footer,
// pull sidebar up using a negative margin

if (scrolltop > footertotop) {

$('#cart').css('margin-top',  0-difference);
}

else  {
$('#cart').css('margin-top', 0);
}


});