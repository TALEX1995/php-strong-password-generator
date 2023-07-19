<?php


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Password Generator</title>
</head>

<body>
    <div class="container">
        <h1 class="my-5">PASSWORD GENERATOR</h1>
        <form action="" method="GET">
            <div>
                <label for="pass-length">Inserisci il numero di caratteri della password che vuoi generare</label>
                <input id="pass-length" type="number" name="pass-length">
            </div>
            <button class="btn btn-primary mt-3" type="submit">Crea</button>
        </form>

    </div>
</body>

</html>