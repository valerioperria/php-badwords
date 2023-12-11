<?php 
$text = $_GET['text'];
$censored = $_GET['censored'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <h2>TESTO</h2>
    <p> 
        <?php echo $text; ?> 
    </p>

    <?php 
    $lenght = strlen($text);
    ?>

    <h4>
    Lunghezza: <?php echo $lenght; ?>
    </h4>

    <h2>TESTO con CENSURA</h2>
    <?php
    $text_and_censored = str_replace($censored, '***', $text);
    $lenght_text_and_censored = strlen($text_and_censored);
    ?>
    <p>
        <?php echo $text_and_censored; ?>
    </p>

    <h4>
        Lunghezza: <?php echo $lenght_text_and_censored; ?>
    </h4>
        
    
</body>
</html>