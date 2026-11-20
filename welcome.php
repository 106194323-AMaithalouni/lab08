<?php
session_start();
if (isset($_SESSION['user'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php include('header.inc'); ?>

    <main>
        <h2><?php echo "Welcome, " . htmlspecialchars($_SESSION['user']) . "!"; ?></h2>
        <p>You have successfully logged in.</p>
    </main>

    <?php include('footer.inc'); ?>
</body>
</html>
<?php
} else {
    header('Location: login.html');
    exit();
}
?>