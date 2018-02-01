<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: /login_try.html/");
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

        <script>
            $(document).ready(function(){
                $("#table1").on('click','#addRowButton', function (){
                    $("#addRowButton").replaceWith('<button type="button" id="deleteRowButton" class="btn btn-danger"><span class="glyphicon glyphicon-minus-sign"></span></button>');
                    //  $("td").css("text-align","center");
                    newRow = $(' <tr><td class="input0"></td>'+
                                    '<td><input type="text" class="form-control" id="name" name="name" placeholder="Product Name" required></td>'+
                                    '<td><input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity" required></td>'+
                                    '<td><input type="text" class="form-control" id="price" name="price" placeholder="Price" required></td>'+
                                    '<td><button type="button" id="addRowButton" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span></button></td></tr>');
                    
                    $('#table1 > tbody:last-child').append(newRow);
                    var count = $('#table1 tbody tr').length;
                    $('#total').html(count);
                });

                $("#table1").on('click','#deleteRowButton', function (){
                    $(this).closest('tr').remove();
                });

            });
        </script>
        <style>
            #header{
                margin-bottom:30px;
            }
            footer{
                background:lightgray;
                position:fixed;
                bottom:0;
                padding:30px;
                width: 100%;
            }

            table{counter-reset:rowNumber;}
            table tbody tr{counter-increment:rowNumber;}
            table tbody tr td:first-child::before{
                content:counter(rowNumber);
            }
            thead,tbody{display:block;}
            tbody{
                width:100%;
                height:330px;
                overflow:scroll;
            }
            th,td{text-align:center;}
            .input0{width:40px;}
            .input1{width:415px;}
            .input2{width:200px;}
            .input3{width:200px;}
            td#button{width:62px;}
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
                            <li><a href="/home1.php/">Home</a></li>
                            <li><a href="/instock.php/">Stock-In</a></li>
                            <li class="active"><a href="/outstock.php/">Stock-Out</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Hello, <?php echo $_SESSION["username"]; ?></a></li>
                            <li><a href="/logout.php/"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav> 
        </div>

        <div class="container-fluid text-center" id="content">
            <div class="row content">
                <div class="col-sm-2 sidenav">
                </div>

                <div class="col-sm-8 text-left well">
                    <h4>Fill following content to update existing or create new stock</h4>
                    <form class="form-horizontal" action="/outstock_confirmation.php" method="post">
                        <table class="table table-bordered" id="table1">
                            <thead>
                                <tr>
                                    <th class="input0">No.</th>
                                    <th class="input1">Product Name</th> 
                                    <th class="input2">Quantity</th>
                                    <th class="input3">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="input0"></td>
                                    <td class="input1"><input type="text" class="form-control" id="name" name="name" placeholder="Product Name" required></td>
                                    <td class="input2"><input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity" required></td>
                                    <td class="input3"><input type="text" class="form-control" id="price" name="price" placeholder="Price" required></td>
                                    <td id="button"><button type="button" id="addRowButton" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span></button></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-default" style="margin-top:20px;">Insert</button>
                    </form>
                </div>

                <div class="col-sm-2 sidenav">
                </div>
            </div>
        </div>

        <footer class="container-fluid text-center">
            <a href="/home1.php/"> Back To Home</a>
        </footer>
    </body>
</html>
