$("#linkdiv-0").hover(function () {
    $("#linkdiv-0").css("backgroundColor", "#186768");
}, function () {
    $("#linkdiv-0").css("backgroundColor", "#10595B");
});

$("#linkdiv-1").hover(function () {
    $("#linkdiv-1").css("backgroundColor", "#186768");
}, function () {
    $("#linkdiv-1").css("backgroundColor", "#10595B");
});

$("#linkdiv-2").hover(function () {
    $("#linkdiv-2").css("backgroundColor", "#186768");
}, function () {
    $("#linkdiv-2").css("backgroundColor", "#10595B");
});

$("#linkdiv-3").hover(function () {
    $("#linkdiv-3").css("backgroundColor", "#186768");
}, function () {
    $("#linkdiv-3").css("backgroundColor", "#10595B");
});


var contentUp = "home";
var contentDown1 = "news";
var contentDown2 = "materials";
var contentDown3 = "other";


$(".content-" + contentDown1).css("display", "none");
$(".content-" + contentDown2).css("display", "none");
$(".content-" + contentDown3).css("display", "none");
$(".content-" + contentDown1).css("opacity", "0");
$(".content-" + contentDown2).css("opacity", "0");
$(".content-" + contentDown3).css("opacity", "0");




$("#linkdiv-0").click(function () {
    contentUp = "home";
    contentDown1 = "news";
    contentDown2 = "materials";
    contentDown3 = "other";
    $("#dashboard-subtitle").html("home");
    $(".content-" + contentUp).css("display", "block");
    $(".content-" + contentUp).animate({
        opacity: '1'
    });
    $(".content-" + contentDown1).css("display", "none");
    $(".content-" + contentDown2).css("display", "none");
    $(".content-" + contentDown3).css("display", "none");
    $(".content-" + contentDown1).css("opacity", "0");
    $(".content-" + contentDown2).css("opacity", "0");
    $(".content-" + contentDown3).css("opacity", "0");
});

$("#linkdiv-1").click(function () {
    contentUp = "news";
    contentDown1 = "home";
    contentDown2 = "materials";
    contentDown3 = "other";
    $("#dashboard-subtitle").html("news");
    $(".content-" + contentUp).css("display", "block");
    $(".content-" + contentUp).animate({
        opacity: '1'
    });
    $(".content-" + contentDown1).css("display", "none");
    $(".content-" + contentDown2).css("display", "none");
    $(".content-" + contentDown3).css("display", "none");
    $(".content-" + contentDown1).css("opacity", "0");
    $(".content-" + contentDown2).css("opacity", "0");
    $(".content-" + contentDown3).css("opacity", "0");
});

$("#linkdiv-2").click(function () {
    contentUp = "materials";
    contentDown1 = "news";
    contentDown2 = "home";
    contentDown3 = "other";
    $("#dashboard-subtitle").html("class materials");
    $(".content-" + contentUp).css("display", "block");
    $(".content-" + contentUp).animate({
        opacity: '1'
    });
    $(".content-" + contentDown1).css("display", "none");
    $(".content-" + contentDown2).css("display", "none");
    $(".content-" + contentDown3).css("display", "none");
    $(".content-" + contentDown1).css("opacity", "0");
    $(".content-" + contentDown2).css("opacity", "0");
    $(".content-" + contentDown3).css("opacity", "0");
});

$("#linkdiv-3").click(function () {
    contentUp = "other";
    contentDown1 = "news";
    contentDown2 = "materials";
    contentDown3 = "home";
    $("#dashboard-subtitle").html("upload projects");
    $(".content-" + contentUp).css("display", "block");
    $(".content-" + contentUp).animate({
        opacity: '1'
    });
    $(".content-" + contentDown1).css("display", "none");
    $(".content-" + contentDown2).css("display", "none");
    $(".content-" + contentDown3).css("display", "none");
    $(".content-" + contentDown1).css("opacity", "0");
    $(".content-" + contentDown2).css("opacity", "0");
    $(".content-" + contentDown3).css("opacity", "0");
});









$(window).scroll(function () {

    // distance from top of footer to top of document
    var footertotop = ($('#footer').position().top);
    // distance user has scrolled from top, adjusted to take in height of sidebar (570 pixels inc. padding)
    var scrolltop = $(document).scrollTop() + 650;
    // difference between the two
    var difference = scrolltop - footertotop;

    // if user has scrolled further than footer,
    // pull sidebar up using a negative margin

    if (scrolltop > footertotop) {

        $('#cart').css('margin-top', 0 - difference);
    } else {
        $('#cart').css('margin-top', 0);
    }

});