<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pimote</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<div class="container text-center">

    <form action="./index.php">
        <div class="row">
            <div class="btn-group btn-group-lg" role="group" aria-label="...">
                <button type="submit" formmethod="get" value="l1_on" name="thing" class="btn btn-success"> l1_on </button>
                <button type="submit" formmethod="get" value="l1_off" name="thing" class="btn btn-danger"> l1_off </button>
            </div>
        </div>

        <div class="row">
            <div class="btn-group btn-group-lg" role="group" aria-label="...">
                <button type="submit" formmethod="get" value="l2_on" name="thing" class="btn btn-success"> l2_on </button>
                <button type="submit" formmethod="get" value="l2_off" name="thing" class="btn btn-danger"> l2_off </button>
            </div>
        </div>
        <div class="row">
            <div class="btn-group btn-group-lg" role="group" aria-label="...">
                <button type="submit" formmethod="get" value="l3_on" name="thing" class="btn btn-success"> l3_on </button>
                <button type="submit" formmethod="get" value="l3_off" name="thing" class="btn btn-danger"> l3_off </button>
            </div>
        </div>
        <div class="row">
            <div class="btn-group btn-group-lg" role="group" aria-label="...">
                <button type="submit" formmethod="get" value="l4_on" name="thing" class="btn btn-success"> l4_on </button>
                <button type="submit" formmethod="get" value="l4_off" name="thing" class="btn btn-danger"> l4_off </button>
            </div>
        </div>
        <div class="row">
            <div class="btn-group btn-group-lg" role="group" aria-label="...">
                <button type="submit" formmethod="get" value="all_on" name="thing" class="btn btn-success"> all_on </button>
                <button type="submit" formmethod="get" value="all_off" name="thing" class="btn btn-danger"> all_off </button>
            </div>
        </div>
    </form>
<h1>

<?php

//$command = excapeshellcmd('/Applications/MAMP/htdocs/main.py');
$thing = $_GET["thing"];
//$output = "Hello";
$output = shell_exec('sudo /var/www/main.py ' . $thing);
echo $output;

?>
</h1>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
