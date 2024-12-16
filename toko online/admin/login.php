<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="css/login.css"> <!-- CSS Login -->
</head>
<body>
    <div class="login-container">
        <h2>Login Admin</h2>
        <p class="error" id="error-message"></p>
        <form id="login-form">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>
        </form>
    </div>
    <script src="js/script.js"></script> <!-- JavaScript -->
</body>
</html>