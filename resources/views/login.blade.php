<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Sign Up</title>
    <link rel="stylesheet" href="login.css">
    <style>
body {
    font-family: 'Arial', sans-serif;
    background: linear-gradient(120deg, #3498db, #8e44ad);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    width: 350px;
    max-width: 100%;
}

.form-container {
    padding: 30px;
}

.form-toggle {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}

.form-toggle button {
    background: transparent;
    border: none;
    outline: none;
    padding: 10px 20px;
    cursor: pointer;
    color: #333;
    font-size: 18px;
    transition: color 0.3s ease;
}

.form-toggle button.active {
    color: #3498db;
    border-bottom: 2px solid #3498db;
}

.form {
    display: none;
    flex-direction: column;
}

.form.active {
    display: flex;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

input {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
    width: 100%;
}

.btn {
    background: #3498db;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.btn:hover {
    background: #2980b9;
}

.switch-form {
    text-align: center;
    margin-top: 10px;
}

.switch-form span {
    color: #3498db;
    cursor: pointer;
    font-weight: bold;
}


</style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="form-toggle">
                <button id="login-toggle" class="active">Login</button>
                <button id="signup-toggle">Sign Up</button>
            </div>
            <form id="login-form" class="form active">
                <h2>Login</h2>
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Password" required>
                <button type="submit" class="btn">Login</button>
                <p class="switch-form">Don't have an account? <span id="switch-to-signup">Sign Up</span></p>
            </form>
            <form id="signup-form" class="form">
                <h2>Sign Up</h2>
                <input type="text" placeholder="Username" required>
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Password" required>
                <input type="password" placeholder="Confirm Password" required>
                <button type="submit" class="btn">Sign Up</button>
                <p class="switch-form">Already have an account? <span id="switch-to-login">Login</span></p>
            </form>
        </div>
    </div>

    <script>
        const loginToggle = document.getElementById('login-toggle');
        const signupToggle = document.getElementById('signup-toggle');
        const loginForm = document.getElementById('login-form');
        const signupForm = document.getElementById('signup-form');
        const switchToSignup = document.getElementById('switch-to-signup');
        const switchToLogin = document.getElementById('switch-to-login');

        loginToggle.addEventListener('click', () => {
            loginToggle.classList.add('active');
            signupToggle.classList.remove('active');
            loginForm.classList.add('active');
            signupForm.classList.remove('active');
        });

        signupToggle.addEventListener('click', () => {
            signupToggle.classList.add('active');
            loginToggle.classList.remove('active');
            signupForm.classList.add('active');
            loginForm.classList.remove('active');
        });

        switchToSignup.addEventListener('click', () => {
            signupToggle.click();
        });

        switchToLogin.addEventListener('click', () => {
            loginToggle.click();
        });
    </script>
</body>
</html>
