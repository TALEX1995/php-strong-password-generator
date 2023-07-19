<?php
// Function
include_once __DIR__ . '/function/get_random_password.php';

// Page title
$page_title = 'Password';

// Start session
session_start();

// Take user value input
$pass_length = $_SESSION['pass-length'];
$want_letters = $_SESSION['letters'];
$want_numbers = $_SESSION['numbers'];
$want_spec_char = $_SESSION['spec-char'];

// Fuction to create random password
$random_word = get_random_word($pass_length);

?>

<?php include_once __DIR__ . '/layout/head.php' ?>

<body>
    <div class="container">
        <div class="alert alert-primary mt-5" role="alert">
            La password generata è <strong><?= $random_word ?></strong>
        </div>
        <a href="index.php">Torna indietro per generare un altra password</a>
    </div>

</body>

</html>