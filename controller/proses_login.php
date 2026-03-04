
<?php
session_start();

// password dan username yang dipakai
$valid_username = "admin";
$valid_password = "12345";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: ../index.php");
        exit();
    } else {
        header("Location: ../login.php?error=1");
        exit();
    }
}
?>