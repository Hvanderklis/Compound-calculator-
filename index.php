<!DOCTYPE html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Gemeente Bordeaux">
        <meta name="keywords" content="Gemeente, Bordeaux, Frankrijk">
        <meta name="author" content="Henk,Patrick,Azhar">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <link rel="icon" href="photos/logo.png">
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <script type="text/javascript" src="engine1/jquery.js"></script>
	    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <title>Compound Calculator</title>
      
    </head>
    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>s
        <header id="hgroup">
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
                            <a class="navbar-brand" href="index.php">Compount Calculator</a>
                        </div>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="contact.php">Contact</a></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="Body">
	<form action="resultaten.php" method="post">
            <table>
                <tr>
                    <td>
                        Startbedrag:
                    </td>
                    <td>
                        <input required type="number" name="geld" placeholder="1"> Euro
                    </td>
                </tr>
                <tr>
                    <td>
                        Jaarlijkse rente:
                    </td>
                    <td>
                         <input required type="number" name="rente" placeholder="1">%
                    </td>
                </tr>
                <tr>
                    <td>
                        Aantal jaren te sparen:
                    </td>
                    <td>
                         <input required type="number" name="jaar" placeholder="1"> jaar
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="bereken" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
        </div>
    <?php

    ?>
  </body>
</html>


