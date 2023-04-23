<?php
    include_once "functions/mysql.php";
    $project = getProject($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title><?=$project['title']?></title>
</head>

<body id = 'body'>
    <script src="js/bg.js"></script>
    <header>
        <h1><?=$project['title']?></h1>
        <h2>Дмитрий Наумов</h2>
        <h2>Python 🐍| WEB 🌐</h2>
        <hr>
    </header>
<section id="included">
    <div id = "project_info">
        <img class = "project_img" src = "<?=$project['image']?>">
        <p id="project_description"><?=$project['description']?></p>
        <?php
        if (isset($project['github'])) {
            ?>
            <p><b>GitHub: </b><a id="project_github" href="<?=$project['github']?>"><?=$project['github']?></a></p>
            <?php
        }
        ?>
        <?php
        if (isset($project['link'])) {
            ?>
            <a id="project_link" href="<?=$project['link']?>"><?=$project['link']?></a>
            <?php
        }
        ?>
        <?php
        if (isset($project['zip'])) {
            ?>
            <a id="project_zip" href="<?=$project['zip']?>">Скачать .zip</a>
            <?php
        }
        ?>
        <p id="project_data"><?=date("d.m.Y", strtotime($project['date']));  ?></p>
    </div>

    

    
</section>
</body>

</html>