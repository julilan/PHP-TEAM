<?php
//header
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apha Team Project</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>   
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="webform.css" media="all">
    <link rel="stylesheet" href="./css/style-mass.css"> 

</head>


<body>
    
</body>
</html>

<header>
        <h1>Alpha Team Project</h1>

        <?php if($_SERVER['PHP_SELF']=='/index.php'){

            
            echo '
            <nav>
            <ul>
            <li><a href="/">Projects</a> </li>
            <li><a href="/mini_project01/project1-landing.php">Metrics</a> </li>

            <li><a href="/todoApp/create.php">Todo</a> </li>
            <li><a href="/contact-form/webform.php">Contact</a> </li>
            
            </ul>
            </nav>
            ';
        }
        else if($_SERVER['PHP_SELF']=='/contact-form/webform.php'){
            echo '
            <nav>
            <ul>
            <li><a href="/">Projects</a> </li>
            <li><a href="/mini_project01/project1-landing.php">Metrics</a> </li>
            <li><a href="/todoApp/create.php">Todo</a> </li>
            <li><a href="/contact-form/webform.php">Contact</a> </li>
            
            </ul>
            </nav>
            ';

        }
       
        else if($_SERVER['PHP_SELF']=='/mini_project01/project1-landing.php'){
            echo '
            <nav>
            <ul>
            <li><a href="/">Projects</a> </li>
            <li><a href="/mini_project01/project1-landing.php">Metrics</a> </li>
            <li><a href="/todoApp/create.php">Todo</a> </li>
            <li><a href="/contact-form/webform.php">Contact</a> </li>
            
            </ul>
            </nav>
            ';

        }
        else if($_SERVER['PHP_SELF']=='/mini_project01/mass.php'){
            echo '
            <nav>
            <ul>
            <li><a href="/">Projects</a> </li>
            <li><a href="/mini_project01/speed.php">Speed</a> </li>
            <li><a href="/mini_project01/temperature.php">Temperature</a> </li>
            
            </ul>
            </nav>
            ';

        }
        else if($_SERVER['PHP_SELF']=='/mini_project01/speed.php'){
            echo '
            <nav>
            <ul>
            <li><a href="/">Projects</a> </li>
            <li><a href="/mini_project01/mass.php">Mass</a> </li>
            <li><a href="/mini_project01/temperature.php">Temperature</a> </li>
            
            </ul>
            </nav>
            ';

        }
        else if($_SERVER['PHP_SELF']=='/mini_project01/temperature.php'){
            echo '
            <nav>
            <ul>
            <li><a href="/">Projects</a> </li>
            <li><a href="/mini_project01/mass.php">Mass</a> </li>
            <li><a href="/mini_project01/speed.php">Speed</a> </li>
            
            </ul>
            </nav>
            ';

        }

        ?>
</header>
