            $(document).ready(updateSize);
            $(window).resize(updateSize);



            // Get the modal
            var modal = document.getElementById('myModal');
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
            // When the user clicks on the button, open the modal 
            modal.style.display = "block";
            // When the user clicks on <span> (x), close the modal
            span.onclick = function () {
                    modal.style.display = "none";
                }
                // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }



            //Email verification
            $("#success-message").hide();
            $("#error-message").hide();

            $("#submit-button").click(function () {
                if (!isEmail($("#email").val())) {
                    $("#error-message").show();
                    $("#success-message").hide();
                    $("#email").css("border", "3px solid red");
                } else {
                    $("#success-message").show();
                    $("#error-message").hide();
                    $("#email").css("border", "3px solid green");
                    setTimeout(function () {
                        modal.style.display = "none";
                    }, 1000);
                }
            });

            //Email verification bottom
            $("#success-message-bottom").hide();
            $("#error-message-bottom").hide();

            $("#submit-button-bottom").click(function () {
                if (!isEmail($("#email-bottom").val())) {
                    $("#error-message-bottom").show();
                    $("#success-message-bottom").hide();
                    $("#email-bottom").css("border", "3px solid red");
                } else {
                    $("#success-message-bottom").show();
                    $("#error-message-bottom").hide();
                    $("#email-bottom").css("border", "3px solid green");
                }
            });

            function isEmail(email) {
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(email);
            }

            function updateSize() {
                var width = $(window).width();
                var height = $(window).height();

                console.log(width + " " + height);

                if (width < 992) {
                    $(".intro-box").css("width", "85%");
                    $(".intro-box").css("margin", "30px");
                } else {
                    $(".intro-box").css("width", "30%");
                    $(".intro-box").css("margin", "1.66667%");
                }

                if (width < 610) {
                    $(".title").css("font-size", "40px");
                } else if (width < 790) {
                    $(".title").css("font-size", "48px");
                } else if (width < 880) {
                    $(".title").css("font-size", "64px");
                } else {
                    $(".title").css("font-size", "72px");
                }

                if (width < 610) {
                    $(".subtitle").css("font-size", "24px");
                } else if (width < 790) {
                    $(".subtitle").css("font-size", "32px");
                } else if (width < 880) {
                    $(".subtitle").css("font-size", "40px");
                } else {
                    $(".subtitle").css("font-size", "48px");
                }

                if (width < 980) {
                    $(".contact-text").css("font-size", "32px");
                } else {
                    $(".contact-text").css("font-size", "40px");
                }

                if (width < 750) {
                    $(".topbar-link").hide();
                    $(".dropdown").show();
                    //TODO: Menu bar
                } else {
                    $(".topbar-link").show();
                    $(".dropdown").hide();
                }

                if (width <= 850) {
                    $(".footer-logo").hide();
                } else {
                    $(".footer-logo").show();
                }

                if (width < 500) {
                    $("#topbar-logo").css("width", "200");
                    $("#topbar-logo").css("margin-top", "12px");
                } else {
                    $("#topbar-logo").css("width", "300");
                    $("#topbar-logo").css("margin-top", "0px");
                }

                if (width < 750) {
                    $("#myModal").css("display", "none");
                }

                $(".jumbotron").css("height", width / 2);
                $("#footer-contact").css("font-size", 12 + width / 64);
            }