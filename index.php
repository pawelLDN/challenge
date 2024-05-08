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
                <li><span id="nickname"></span></li>
                <li><a href="login.php" class="button loginBtn" id="loginBtn" aria-label="Click to login">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="modal" id="loginModal">
            <div class="modal-content">
                <span class="close" title="Close Modal">&times;</span>
                <?php
                    include('parts/loginform.php');
                ?>
            </div>
        </div>
        <div id="mainPage">
            Welcome to our page!
        </div>
    </main>
    <footer>
        Copyright &copy; 2024 Badgeworx
    </footer>
</body>
</html>