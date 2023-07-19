<?php

// Page title
$page_title = 'Password Generator';



if (!empty($_GET['pass-length'])) {

    $pass_length = $_GET['pass-length'];
    $want_letters = $_GET['letters'];
    $want_numbers = $_GET['numbers'];
    $want_spec_char = $_GET['spec-char'];

    // Start session
    session_start();

    $_SESSION['pass-length'] = $pass_length;

    $_SESSION['letters'] = $want_letters;
    $_SESSION['numbers'] = $want_numbers;
    $_SESSION['spec-char'] = $want_spec_char;

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
            <div class="my-5 d-flex">
                <span>Scegli da cosa vuoi che sia composta la password</span>
                <div class="ms-4">
                    <label for="letters">Lettere</label>
                    <input id="letters" type="checkbox" name="letters">
                    <label class="ms-3" for="numbers">Numeri</label>
                    <input id="numbers" type="checkbox" name="numbers">
                    <label class="ms-3" for="spec-char">Caratteri speciali</label>
                    <input id="spec-char" type="checkbox" name="spec-char">
                </div>
            </div>
            <button class="btn btn-primary mt-3" type="submit">Crea</button>
        </form>
    </div>
</body>

</html>