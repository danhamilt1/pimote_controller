<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

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
    <h1>Hello, world!</h1>

<form action="./index.php">
    <div class="btn-group" role="group" aria-label="...">
    <button type="submit" formmethod="get" value="l1_on" name="thing" class="btn btn-default"> l1_on </button>
    <button type="submit" formmethod="get" value="l1_off" name="thing" class="btn btn-default"> l1_off </button>
    </div>
    <button type="submit" formmethod="get" value="l2_on" name="thing"> l2_on </button>
    <button type="submit" formmethod="get" value="l2_off" name="thing"> l2_off </button>
    <button type="submit" formmethod="get" value="l3_on" name="thing"> l3_on </button>
    <button type="submit" formmethod="get" value="l3_off" name="thing"> l3_off </button>
</form>
<?php

//$command = excapeshellcmd('/Applications/MAMP/htdocs/main.py');
$thing = $_GET["thing"];
//$output = "Hello";
$output = shell_exec('sudo /var/www/main.py ' . $thing);
echo $output;

?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
