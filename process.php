<?php
session_start();
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if ($username == 'Abdullah' && $password == '106194323') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit();
} else {
    header('Location: login.html?error=1');
    exit();
}
?>