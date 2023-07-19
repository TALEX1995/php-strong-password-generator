<?php

// Page title
$page_title = 'Password Generator';



if (!empty($_GET['pass-length'])) {

    $pass_length = $_GET['pass-length'];

    // Start session
    session_start();

    $_SESSION['pass-length'] = $pass_length;

    header('Location: response.php');
};


?>


<?php include_once __DIR__ . '/layout/head.php' ?>

<body>
    <div class="container">
        <h1 class="my-5">PASSWORD GENERATOR</h1>
        <form action="" method="GET">
            <div>
                <label for="pass-length">Inserisci il numero di caratteri della password che vuoi generare</label>
                <input id="pass-length" type="number" name="pass-length" min='1' max='30'>
            </div>
            <button class="btn btn-primary mt-3" type="submit">Crea</button>
        </form>
    </div>
</body>

</html>