<?php
require_once __DIR__ . '/data/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Php Dischi</title>
</head>
<body>
    <header>
        <section>
            <div class="img-box">
                <img src="./img/logo.png" alt="Spotify Logo">
            </div>
        </section>
    </header>

    <main>
        <section class="card-container">
            <?php foreach($database as $disc) : ?>
            <div class="card-box">
                <div class="card">
                    <ul>
                        <li class="img">
                            <div class="img-box-2">
                                <img src="<?php echo $disc['poster']; ?>" alt="">
                            </div>
                        </li>
                        <li class="title"><?php echo $disc['title']; ?></li>
                        <li class="author"><?php echo $disc['author']; ?></li>
                        <li class="year"><?php echo $disc['year']; ?></li>
                        <li class="genre"><?php echo $disc['genre']; ?></li>
                    </ul>
                </div>  
            </div>
            <?php endforeach; ?>
        </section>
    </main>
</body>
</html>