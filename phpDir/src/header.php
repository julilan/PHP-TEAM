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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="webform.css" media="all">
    <link rel="stylesheet" href="./css/style-mass.css">
    <link rel="stylesheet" href="./css/style-temperature.css">
    <link rel="stylesheet" href="./css/style-speed.css">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"> -->



   
    <?php if($_SERVER['PHP_SELF']=='/project3-todo/home.php' or $_SERVER['PHP_SELF']== 'project3-todo/create.php'){
        echo '
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">';
    } 
    ?> 
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
            <li><a href="/project1-metrics/project1-landing.php">Metrics</a> </li>

            <li><a href="/project2-form/webform.php">Contact</a> </li>
            <li><a href="/project3-todo/home.php">Todo</a> </li>
            
            </ul>
            </nav>
            ';
        }
        else if($_SERVER['PHP_SELF']=='/project2-form/webform.php'){
            echo '
            <nav>
            <ul>
            <li><a href="/">Projects</a> </li>
            <li><a href="/project1-metrics/project1-landing.php">Metrics</a> </li>
            <li><a href="/project2-form/webform.php">Contact</a> </li>
            <li><a href="/project3-todo/home.php">Todo</a> </li>
            
            </ul>
            </nav>
            ';

        }
       
        else if($_SERVER['PHP_SELF']=='/project1-metrics/project1-landing.php'){
            echo '
            <nav>
            <ul>
            <li><a href="/">Projects</a> </li>
            <li><a href="/project1-metrics/project1-landing.php">Metrics</a> </li>
            <li><a href="/project2-form/webform.php">Contact</a> </li>
            <li><a href="/project3-todo/home.php">Todo</a> </li>
            
            </ul>
            </nav>
            ';

        }
        else if($_SERVER['PHP_SELF']=='/project1-metrics/mass.php'){
            echo '
            <nav>
            <ul>
            <li><a href="/">Projects</a> </li>
            <li><a href="/project1-metrics/speed.php">Speed</a> </li>
            <li><a href="/project1-metrics/temperature.php">Temperature</a> </li>
            
            </ul>
            </nav>
            ';

        }
        else if($_SERVER['PHP_SELF']=='/project1-metrics/speed.php'){
            echo '
            <nav>
            <ul>
            <li><a href="/">Projects</a> </li>
            <li><a href="/project1-metrics/mass.php">Mass</a> </li>
            <li><a href="/project1-metrics/temperature.php">Temperature</a> </li>
            
            </ul>
            </nav>
            ';

        }
        else if($_SERVER['PHP_SELF']=='/project1-metrics/temperature.php'){
            echo '
            <nav>
            <ul>
            <li><a href="/">Projects</a> </li>
            <li><a href="/project1-metrics/mass.php">Mass</a> </li>
            <li><a href="/project1-metrics/speed.php">Speed</a> </li>
            
            </ul>
            </nav>
            ';

        }
        else if($_SERVER['PHP_SELF']=='/project3-todo/home.php' || 'project3-todo/create.php'){
            echo '
            <nav>
            <ul>
            <li><a href="/">Projects</a> </li>
            <li><a href="/project3-todo/home.php">Todos</a> </li>
            <li><a href="/project3-todo/create.php">Add Todo</a> </li>
            
            </ul>
            </nav>
            ';
        }
        else {
            echo '
            <nav>
            <ul>
            <li><a href="/">Projects</a> </li>
            <li><a href="/project1-metrics/project1-landing.php">Metrics</a> </li>
            <li><a href="/project2-form/webform.php">Contact</a> </li>
            <li><a href="/project3-todo/home.php">Todo</a> </li>
            
            </ul>
            </nav>
            ';

        }
        

        ?>
</header>
