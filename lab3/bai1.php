<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        #login-form {
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        #welcome-message {
            display: none;
        }
    </style>
</head>
<body>

    <div id="login-form">
        <h2>Login</h2>
        <form id="form">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <button type="button" onclick="login()">Login</button>
        </form>

        <p id="welcome-message"></p>
    </div>

    <script>
        function login() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username === "admin" && password === "123123") {
                displayWelcomeMessage(username);
            } else if (username === "user" && password === "123456") {
                displayWelcomeMessage(username);
            } else {
                alert("Invalid username or password. Please try again.");
            }
        }

        function displayWelcomeMessage(username) {
            var welcomeMessage = "Welcome, " + username + "!";
            document.getElementById("welcome-message").innerText = welcomeMessage;
            document.getElementById("welcome-message").style.display = "block";
            document.getElementById("form").style.display = "none";
        }
    </script>

    </body>
</html>
