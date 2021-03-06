<?php
    session_start();
    if(isset($_SESSION['username'])){
        header("Location: /home1.php/");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"> 

        <!--To ensure proper rendering and touch zooming for mobile devices -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            #header{
                margin-bottom:30px;
            }
            footer{
                background:lightgray;
                position:absolute;
                bottom:0;   
                padding:30px;
                width: 100%;
            }
        </style>
    </head>

    <body>
        <div id="header">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">Welcome to Store Stock</a>
                    </div>
                    <div class="collapse navbar-collapse" id="homeNavBar">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="home.php">Home</a></li>
                            <li><a href="/register.html">Register</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav> 
        </div>

        <div class="container-fluid text-center">
            <div class="row content">
                <div class="col-sm-2 sidenav">
                </div>

                <div class="col-sm-8 text-left well">
                    <h1>Welcome to HOME</h1>
                    <p>This is content</p>
                </div>

                <div class="col-sm-2 sidenav">
                </div>
            </div>
        </div>

        <footer class="container-fluid text-center">
            <a href="home.php"> Back To Home</a>
        </footer>
    </body>
</html>
