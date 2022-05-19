<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Project Website</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navigation.css">

</head>

<body>

<?php 
    include("navigation.php")
    ?> 

    <section class="section3" id="1">
        <div class="container3">
            <div class="main">
                <ul>
                    <li>
                        <d href="#">Team of professional experts</d>
                    </li>
                    <li>
                        <e href="#">Trust the experience</e>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <?php include('plans.php'); ?>
<br>
<br><br>

    <?php include("reviews.php"); ?>

    <?php include("about.php"); ?>

</body>

</html>