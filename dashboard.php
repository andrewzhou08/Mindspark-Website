<?php
session_start();

//CHANGE THIS TO WHATEVER CLASS THEY'RE TAKING.
//1 = Introduction to Website Development
//2 = Intermediate Website Development
//3 = Java Fundamentals
//4 = Java Applications
$classNumber = 1;
$class = "";
$classDescription = "";

if($classNumber == 1) {
    $class = "Introduction to Website Development";
    $classDescription = "";
} else if($classNumber == 2) {
    
} else if($classNumber == 3) {
    
} else if($classNumber == 4) {
    
}


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        $uploadOk = 1;
    
    // Check if file already exists
if (file_exists($target_file)) {
    echo "Error: File already exists.";
    $uploadOk = 0;
}
    
     // Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Error: Your file is too large. [Max size: 5MB]";
    $uploadOk = 0;
}
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Error: Your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}




?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Mindspark Summer - Dashboard</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/manifest.json">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">

        <script src="jquery-3.1.0.min.js"></script>

        <link type="text/css" rel="stylesheet" href="stylesheet.css" />
    </head>

    <body style="">
        <div>
            <div class="col-sm-12">
                <nav class="navbar navbar-fixed-top navbar-nav navbar-light bg-faded" style="height:90px;border-top:10px solid #0e4342;">
                    <a class="navbar-brand" href="index.php"><img id="topbar-logo" src="images/logo.png" /></a>
                    <ul class="nav navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link topbar-link" id="topbar-home" href="index.php">home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link topbar-link" id="topbar-about" href="about.html">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link topbar-link" id="topbar-courses" href="courses.html">courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link topbar-link" id="topbar-login" href="login.php">login</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <span><img src="images/menu-icon.png" height="60px";/></span>
                                <div class="dropdown-content" style="background-color:#10595B;">
                                    <a class="nav-link topbar-link-hidden" id="topbar-home" href="index.php" style="float:right;">home</a>
                                    <a class="nav-link topbar-link-hidden" id="topbar-about" href="about.html" style="float:right;">about</a>
                                    <a class="nav-link topbar-link-hidden" id="topbar-courses" href="courses.html" style="float:right;">courses</a>
                                    <a class="nav-link topbar-link-hidden" id="topbar-login" href="login.php" style="float:right;">login</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>



        <!--Sidebar-->

        <div class="dashboard-sidebar shadow" id="cart">
            <h6 id="dashboard-sidebar-title">Menu</h6>
            <div class="dashboard-sidebar-linkdiv" id="linkdiv-0">
                <p id="dashboard-sidebar-link">Home</p>
            </div>
            <div class="dashboard-sidebar-linkdiv" id="linkdiv-1">
                <p id="dashboard-sidebar-link">News</p>
            </div>
            <div class="dashboard-sidebar-linkdiv" id="linkdiv-2">
                <p id="dashboard-sidebar-link">Materials</p>
            </div>
            <div class="dashboard-sidebar-linkdiv" id="linkdiv-3">
                <p id="dashboard-sidebar-link">Upload</p>
            </div>
        </div>

        <h1 class="dark title" id="dashboard-title" style="font-size:72px;text-align:center;margin-top: 130px;">student dashboard</h1>





        <div class="section-nowidth" id="dashboard-section" style="margin-top:25px;padding:100px;padding-bottom:60px;padding-top:10px;margin-left:80px;margin-right:80px;">
            <h4 class="dark" id="dashboard-subtitle" style="text-align:center;position:relative;top:30px;font-size:48px;">Home</h4>







            <div class="content-home">
                <div class="intro-box-special shadow" id="intro-wd">
                    <?php
                        echo '<h3 class="intro-title" id="intro-wd-text">Welcome to '.$class.'!</h3>';
                    ?>
                        <h6 class="intro-info">This is your dashboard. Welcome to the course!&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;Pinned Post</h6>
                        <p class="intro-p-special"></p>
                </div>

                <div class="intro-box-special shadow" id="intro-wd">
                    <h3 class="intro-title" id="intro-wd-text">Class Information</h3>
                    <?php
                    echo '<h6 class="intro-info">Information about '.$class.'&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;Pinned Post</h6>';
                    echo '<p class="intro-p-special">'.$classDescription.'</p>';
                ?>
                </div>
            </div>







            <div class="content-news">
                <div class="intro-box-special shadow" id="intro-java">
                    <h3 class="intro-title" id="intro-java-text">The News Section</h3>
                    <h6 class="intro-info">Thursday, October 6 2016&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;Pinned Post</h6>
                    <p class="intro-p-special">Welcome to the Mindspark dashboard!<br/><br/> This is the "news" section. We will be posting all class news to this section. Make sure you check back regularly so you know exactly what's going on!</p>
                </div>

                <div class="intro-box-special shadow" id="intro-java">
                    <h3 class="intro-title" id="intro-java-text">Code day Thursday!</h3>
                    <h6 class="intro-info">Thursday, July 13 2017</h6>
                    <p class="intro-p-special">Hey everyone,<br/><br/> We will be having our first code day this Thursday at 5:00PM - 7:00PM right after the class ends.<br/><br/> Code Day is a place for everyone to code and compete. We will be holding a competition for prizes, and giving free teaching time for all students who attend! Dinner will be $8.<br/><br/> The code day is open to everyone! If you've already attended a Mindspark course, or even if you haven't had your class yet, you may come code and win free prizes! <br/><br/> Admission is completely free for you and and 50% off for friend. Everybody else must pay $10 to enter.<br/><br/> Hope to see you there!</p>
                </div>

                <div class="intro-box-special shadow" id="intro-java">
                    <h3 class="intro-title" id="intro-java-text">Missing Laptop Charger</h3>
                    <h6 class="intro-info">Tuesday, July 11 2017</h6>
                    <p class="intro-p-special">If anyone has lost their laptop charger, please talk to Andrew. Thanks!</p>
                </div>
            </div>







            <div class="content-materials">
                <div class="row" style="margin-left:80px;margin-right:80px;margin-top:40px;">
                    <div class="col-lg-5" style="border:1px solid lightgray;background-color:#fefefe;height:1000px;border-radius:20px;float:left;">
                        <div class="intro-box-special shadow" id="intro-ios" style="width: 95%;">
                            <h3 class="intro-title" id="intro-ios-text">Curriculum</h3>
                            <h6 class="intro-info">Thursday, October 6 2016&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;Pinned Post</h6>
                            <p class="intro-p-special">This is the "curriculum" section. We will be posting all curriculum materials, by session, onto here. If you've missed something or you want to review (which is always a great idea), read through the curriculum documents provided!<br/><br/> You will be able to access these docs forever, so if you ever forget something in the future, come back here!</p>
                        </div>

                        <div class="intro-box-special shadow" id="intro-ios" style="width: 95%;">
                            <h3 class="intro-title" id="intro-ios-text">Day 1 Session 2</h3>
                            <h6 class="intro-info">Monday, July 1 2017</h6>
                            <p class="intro-p-special">Here is the link to day 1 session 2's curriculum document:<br/><br/>
                                <a class="dark" href="#">Click here!</a></p>
                        </div>

                        <div class="intro-box-special shadow" id="intro-ios" style="width: 95%;">
                            <h3 class="intro-title" id="intro-ios-text">Day 1 Session 1</h3>
                            <h6 class="intro-info">Monday, July 1 2017</h6>
                            <p class="intro-p-special">Hereis the link to day 1 session 1's curriculum document:<br/><br/>
                                <a class="dark" href="#">Click here!</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6" style="border:1px solid lightgray;background-color:#fefefe;height:1000px;border-radius:20px;float:right;">
                        <div class="intro-box-special shadow" id="intro-ios" style="width: 95%;">
                            <h3 class="intro-title" id="intro-ios-text">Class Materials</h3>
                            <h6 class="intro-info">Thursday, October 6 2016&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;Pinned Post</h6>
                            <p class="intro-p-special">This is where we will be posting important class materials.<br/><br/> If the instructor ever asks you to open a document, make sure to come back here to download your files.</p>
                        </div>

                        <div class="intro-box-special shadow" id="intro-ios" style="width: 95%;">
                            <h3 class="intro-title" id="intro-ios-text">sample.html</h3>
                            <h6 class="intro-info">Monday, July 1 2017</h6>
                            <p class="intro-p-special">Download the file sample.html:<br/><br/>
                                <a class="dark" href="#">Click here!</a></p>
                        </div>
                    </div>
                </div>
            </div>







            <div class="content-other">
                
                <div class="intro-box-special shadow" id="intro-wd">
                    <h3 class="intro-title" id="intro-wd-text">The Uploads Section</h3>
                    <h6 class="intro-info">Thursday, October 6 2016&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;Pinned Post</h6>
                    <p class="intro-p-special">Welcome to the Mindspark dashboard!<br/><br/> This is the "uploads" section. Please upload all of your exercises and projects!<br/><br/>You can re-download or view them at mindsparksummer.com/uploads/filename (for example: mindsparksummer.com/uploads/andrewzhouexercise1.html).</p>
                </div>
                
                <div class="intro-box-special shadow" id="intro-wd">
                    <h3 class="intro-title" id="intro-wd-text">Upload Files</h3>
                    <h6 class="intro-info">Thursday, July 13 2017</h6>
                    <p class="intro-p-special">asdf</p>
                    <form action="dashboard.php" method="post" enctype="multipart/form-data">
                        Select file to upload:
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <input type="submit" value="Upload Image" name="submit">
                    </form>
                </div>
            </div>
        </div>


        <div id="footer">
            <img class="footer-logo" id="topbar-logo" src="images/logo.png" style="position:absolute;top:40px;margin-left:30px;" />
            <h3 id="footer-contact" style="float:right;position:relative;top:40px;right:50px;">Questions? hello@mindsparksummer.com<br/><a class="btn btn-emailus" href="#" role="button">email us</a></h3>

            <p style="color:#115655;margin-top:150px;margin-left:30px;">©2015-16 Mindspark Summer Program. All rights reserved.</p>
        </div>






        <script src="dashboard.js"></script>
        <script src="script.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
    </body>

    </html>