<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        #login-form,
        #registration-form,
        #company-details {
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        #welcome-message,
        #remember-me,
        #registration-success,
        #registration-agreement {
            display: none;
        }

        #company-detail-label {
            font-weight: bold;
            text-align: left;
            margin-left: 20px;
            display: block;
        }

        #provide-detail-label {
            font-size: smaller;
            text-align: left;
            margin-left: 20px;
            display: block;
        }
    </style>
</head>
<body>

    <div id="login-form">
        <h2>Login</h2>
        <form id="form-login">
            <label for="login-username">Username:</label>
            <input type="text" id="login-username" name="login-username" required><br><br>

            <label for="login-password">Password:</label>
            <input type="password" id="login-password" name="login-password" required><br><br>

            <label for="login-remember">Remember Me:</label>
            <input type="checkbox" id="login-remember" name="login-remember"><br><br>

            <button type="button" onclick="login()">Login</button>
        </form>

        <p id="welcome-message"></p>
        <p id="remember-me">Your credentials will be remembered.</p>
    </div>

    <div id="registration-form">
        <h2>Register New Account</h2>
        <form id="form-registration">
            <label for="register-username">Username:</label>
            <input type="text" id="register-username" name="register-username" required><br><br>

            <label for="register-email">Email:</label>
            <input type="email" id="register-email" name="register-email" required><br><br>

            <label for="register-title">Title:</label>
            <select id="register-title" name="register-title" required>
                <option value="mr">Mr.</option>
                <option value="ms">Ms.</option>
                <option value="mrs">Mrs.</option>
                <option value="dr">Dr.</option>
            </select><br><br>

            <label for="register-full-name">Full Name:</label>
            <input type="text" id="register-full-name" name="register-full-name" required><br><br>

            <label id="company-detail-label" for="register-company-detail">Company Detail:</label>
            <label id="provide-detail-label" for="register-company-detail">Provide detail about your company</label>
            <input type="text" id="register-company-detail" name="register-company-detail" required><br><br>

            <label for="registration-agreement">
                I agree with registration
                <input type="checkbox" id="registration-agreement" name="registration-agreement" required>
            </label><br><br>

            <button type="button" onclick="register()">Register</button>
        </form>

        <p id="registration-success"></p>
    </div>

    <script>
        function login() {
            var username = document.getElementById("login-username").value;
            var password = document.getElementById("login-password").value;
            var remember = document.getElementById("login-remember").checked;

            // Check login credentials
            if (username === "admin" && password === "123123") {
                displayWelcomeMessage(username);
                if (remember) {
                    rememberCredentials(username, password);
                }
            } else if (username === "user" && password === "123456") {
                displayWelcomeMessage(username);
                if (remember) {
                    rememberCredentials(username, password);
                }
            } else {
                alert("Invalid username or password. Please try again.");
            }
        }

        function displayWelcomeMessage(username) {
            var welcomeMessage = "Welcome, " + username + "!";
            document.getElementById("welcome-message").innerText = welcomeMessage;
            document.getElementById("welcome-message").style.display = "block";
            document.getElementById("remember-me").style.display = "block";
            document.getElementById("login-form").style.display = "none";
            document.getElementById("registration-form").style.display = "none";
        }

        function rememberCredentials(username, password) {
            // Handle remembering credentials (e.g., set cookies)
            alert("Credentials remembered: " + username + "/" + password);
        }

        function register() {
            var newUsername = document.getElementById("register-username").value;
            var newEmail = document.getElementById("register-email").value;
            var title = document.getElementById("register-title").value;
            var fullName = document.getElementById("register-full-name").value;
            var agreement = document.getElementById("registration-agreement").checked;

            if (!agreement) {
                alert("Please agree with registration terms.");
                return;
            }

            // Handle registration logic here
            var registrationSuccessMessage = "Registration successful for " + newUsername + "!";
            document.getElementById("registration-success").innerText = registrationSuccessMessage;
            document.getElementById("registration-success").style.display = "block";
            document.getElementById("form-registration").style.display = "none";
        }
    </script>

</body>
</html>
