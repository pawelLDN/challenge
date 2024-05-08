<div class="loginForm" id="login-form-container">
    <form action="loginaction.php" method="post" id="login-form">
        <div class="container">
            <label for="username">Username:</label>
            <input type="text" placeholder="Enter Username" name="username" aria-label="Enter Username" required>

            <label for="pass">Password:</label>
            <input type="password" placeholder="Enter Password" name="pass" aria-label="Enter Password" required>

            <button type="submit" aria-label="Click to login">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember" aria-label="Click to remember"> Remember me
            </label>
        </div>
        <div class="container" aria-label="Click if you forgot your password">
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>