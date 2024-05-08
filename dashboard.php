<?php
session_start();
if(!$_SESSION['login']) {
    header('Location: index.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Badgeworx</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="img/favicon.svg">
    <script src="js/scripts.js" defer></script>
</head>
<body>
    <header>
        <div class="logo">
            <a href="/"><img src="img/logo.png" alt="Badgeworx"></a>
        </div>
        <nav>
            <ul>
                <li><span id="nickname">Hello, <?=$_SESSION['login'];?></span></li>
                <li><a href="loginaction.php?action=logout" class="button" id="loginBtn" aria-label="Click to logout">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="mainPage">
            Welcome to restricted area
        </div>
    </main>
    <footer>
        Copyright &copy; 2024 Badgeworx
    </footer>
</body>
</html>