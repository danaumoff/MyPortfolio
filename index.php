<?php
    include_once "functions/mysql.php";
    $projects = getProjects();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Моё портфолио</title>
</head>

<body id = 'body'>
    <script src="js/bg.js"></script>
    <header>
        <h1>Моё портфолио</h1>
        <h2>Дмитрий Наумов</h2>
        <h2>Python 🐍| WEB 🌐</h2>
        <hr>
    </header>
    <section id="blog-cards">
        <?php 
        foreach ($projects as $project) {
        ?>
        <section>
            <div class="blog-card">
                <h1><?=$project['title']?></h1>
                <hr id="blog-card-hr">
                <div class="blog-card-content">
                    <h5>📅 <?=date("d.m.Y", strtotime($project['date']))?></h5>
                    <h4><a href = "project.php?id=<?=$project['id']?>">Подробнее >></a></h4>
                </div>
            </div>
        </section>
        <?php
        }
        ?>
    </section>
</body>

</html>