<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
    <title>Compound Interest Calculator</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
    <script src="js/bootstrap.min.js"></script>
  	<nav>
        <div class="nav navbar-default">
        <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Compound Interest Calculator</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        </div>
        </div>
            </nav>
	<form action="resultaten.php" method="post">
        <table>
            <fielset>
                <legend>Vul de gegevens in</legend>
                  	<table>
                        <tr>
                            <td><label for="start">startbedrag</label></td>
                            <td><input type="number" name="start" placeholder="Startbedrag" required></td>
                        </tr>
                        <tr>
                            <td><label for="jaar">Aantal jaar</label></td>
                            <td><input type="number" name="jaar" placeholder="Aantal jaar" required></td>
                        </tr>
                        <tr>
                            <td><label for="rente">Rente per jaar</label></td>
                            <td><input type="number" name="rente" placeholder="Rente" required></td>
                        </tr>
                    </table>
            		<input type="submit" value="Bereken">
            </fieldset>
        </table>
    </form>
    <?php

    ?>
  </body>
</html>


