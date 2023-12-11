<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>Scrivi un tetso e una frase da censurare</h1>

    <form action="greeting.php" method="GET">
        <label for="text"></label>
        <textarea name="text" id="text" cols="30" rows="10" placeholder="Scrivi il testo"></textarea>

        <label for="censored"></label>
        <input type="text" name="censored" id="censored" placeholder="Parola da censurare">

        <button type="submit">Invia</button>
    </form>
</body>
</html>