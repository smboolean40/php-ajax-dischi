<?php 
    require __DIR__ . "/database.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>Dischi</title>
</head>

<body>
    <div class="container">

        <header>
            <div class="container">
                <img src="images/download.png" alt="logo" />
            </div>
        </header>

        <div class="cds-container container">

            <?php foreach($database as $album) { ?>
            <div class="cd">
                <img src="<?= $album["poster"]; ?>">
                <h3><?= $album["title"]; ?></h3>
                <span class="author"><?= $album["author"]; ?></span>
                <span class="year"><?= $album["year"]; ?></span>
            </div>
            <?php } ?>

            <?php 
                // foreach($database as $album) { 
                //     echo "
                //     <div class=\"cd\">
                //         <img src=\"{$album["poster"]}\">
                //         <h3>{$album["title"]}</h3>
                //         <span class=\"author\">{$album["author"]}</span>
                //         <span class=\"year\">{$album["year"]}</span>
                //     </div>";
                // }
            ?>
        </div>
    </div>
</body>

</html>