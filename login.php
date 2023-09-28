<!DOCTYPE html>
<html>
<head>
    <title>Rian's | Login Page</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/emp_info_save.js?v.3"></script>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    </br>
    <div class="login-container">
        <img src="sde images/luffy.jpg" width="200" height="200">
        <h2>Login Page</h2>
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <div class="action-links">
                Not yet a member? <a href="#">Sign Up</a> |
                <a href="#">Forgot Password</a>
            </div>

            <button type="submit" class="login_btn">Log In</button>
        </form>
    </div>
    <script>
    // Get a reference to the form
    const form = document.querySelector('form');

    // Add an event listener for the form submission
    form.addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission behavior

        // Login success
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        // Check user and password
        if (username === 'user' && password === 'user') {
            // Redirect to the desired URL after a successful login
            window.location.href ="admin.php"; // Replace with your desired URL
        } else {
            // Log in error
            alert('Login failed. Please check your username and password.');
        }
    });
    </script>
</body>
</html>