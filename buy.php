<html>
    <head>
        <link rel="stylesheet" href="jquery-ui.min.css">
        <script src="external/jquery/jquery.js"></script>
        <script src="jquery-ui.min.js"></script>

        <style>
            h1{
                text-align: center;
                margin-top:25px;
            }
            #tabs{
                margin-left: 25px;
                margin-right: 25px;
            }
            input[type=text]{
                width: 50%;
            }
        </style>

        <script>
            $(function() {
                $( "#tabs" ).tabs({
                    active: 1
                });
            });
        </script>

        <h1> Welcome to Store Stock </h1>
    </head>

    <div id="tabs">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#buy">Buy</a></li>
            <li><a href="#sell">Sell</a></li>
            <li><a href="#history">History</a></li>
        </ul>

        <div id="home">
            <p>Welcome to our page</p>
        </div>

        <div id="buy">
            <p>Lalalaa</p>
        </div>

        <div id="sell">
    <pre>
    <form action="/sell.php">
        Name     : <input type="text" name="name"><br>
        Quantity : <input type="text" name="quantity"><br>
        Price    : <input type="text" name="price"><br>
        <input type="submit" value="Submit">
    </form>
    </pre>
        </div>

        <div id="history">
            <p>3 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        </div>
    </div>
</html>