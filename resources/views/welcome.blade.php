<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body>
    <div class="container">
        <div class="login-box">
            <h1>Log in</h1>
            <form action="/login" method="POST">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Log in</button>
                <div class="forgot-password">
                    <a href="#">Forgot your password?</a>
                </div>
                <div class="signup">
                    <p>Don't have an account? <a href="#">Sign up</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>