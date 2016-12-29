<?php
session_start();

$_SESSION['isAuth'] = false; //Logout close session
$_SESSION['hasEntered'] = false;

if($_POST) {
    $_SESSION['hasEntered'] = true;
}

if($_POST['username'] && $_POST['password']) {
    //SEARCH THROUGH DATABASE
    
    
    
    $_SESSION['isAuth'] = true;
}

echo $_SESSION['isAuth'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mindspark Summer - Login</title>

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

    <div class="section" style="margin-top:125px;padding-bottom:30px;height:100%;width:70%;">

        <h1 class="dark title" style="font-size:72px;text-align:center;position:relative;top:30px;">login</h1>
        <h4 class="darker" style="text-align:center;position:relative;top:30px;">log in to your student dashboard</h4>

        <form method="post" style="margin-top:50px;">
            <input type="text" name="username" id="login-field" placeholder="Username" />
            <input type="password" name="password" id="login-field" placeholder="Password" style="margin-top:20px;" />
            <input type="submit" id="login-submit" style="" />

            <?php
                if($_SESSION['isAuth'] == false && $_SESSION['hasEntered'] == true) {
                    echo '<div class="alert alert-danger" role="alert" style="width:70%;display:block;margin:auto;margin-top:20px;">
                <strong>Oh snap!</strong> Your username and/or password is incorrect.</div>';
                } else if($_SESSION['isAuth'] && $_SESSION['hasEntered'] == true) {
                    //Success!
                    header('Location: dashboard.php');
                }
            ?>
        </form>
        

    </div>







    <script src="script.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
</body>

</html>