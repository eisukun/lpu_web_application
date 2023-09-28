<!DOCTYPE html>
<html>
<head>
    <title>User Account Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>   
    <link rel="stylesheet" type="text/css" href="css/user_page.css">
</head>
<body>
<div class="d-flex">
        <div class="vh-100 sticky-top bg-dark" style="width: 280px;">
            <h1 class="text-white fs-5 text-center my-5">Rian's Choice Enterprise</h1>
            <ul class="nav flex-column mb-auto">
                <li class="">
                    <a href="admin.php" class="nav-link text-white mb-4">
                        Home
                    </a>
                </li>
                <li>
                    <a href="employee_registration_save.php" class="nav-link text-white mb-4">
                        Employee Registration
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white mb-4">
                        Employee Report
                    </a>
                </li>
                <li>
                    <a href="payroll.php" class="nav-link text-white mb-4">
                        Payroll
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white  mb-4">
                        Payroll Report
                    </a>
                </li>
                <li>
                    <a href="store1.php" class="nav-link text-white mb-4">
                        POS
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white mb-4">
                        POS Sales Report
                    </a>
                </li>
                <li>
                    <a href="user_page.php" class="nav-link mb-4">
                        User Account
                    </a>
                </li>
                <li>
                    <a href="login.php" class="nav-link text-white  mb-4">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    <div class="container">
        <div class="picture-box">
            <img src="sde images/person.jpg" alt="User Image" width="120" height="100">
        </div>
        <h1>User Account Page</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="first_name" class="required">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="middle_name" class="optional">Middle Name:</label>
                <input type="text" id="middle_name" name="middle_name">
            </div>
            <div class="form-group">
                <label for="last_name" class="required">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <!-- Other form fields (suffix, department, designation, etc.) go here -->

            <div class="form-group">
                <label for="username" class="required">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password" class="required">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password" class="required">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>

            <div class="form-group">
                <label for="user_type" class="required">User Type:</label>
                <input type="text" id="user_type" name="user_type" required>
            </div>
            <div class="form-group">
                <label for="user_status" class="required">User Status:</label>
                <input type="text" id="user_status" name="user_status" required>
            </div>
            <div class="form-group">
                <label for="employee_number" class="required">Employee Number:</label>
                <input type="text" id="employee_number" name="employee_number" required>
            </div>

            <div class="form-group">
                <button type="submit" class="blue-button" name="update">Update</button>
                <button type="reset" class="yellow-button" name="delete">Clear</button>
                <button class = "white-button" > <a href = "firstpage.php"> Cancel </button>
            </div>
        </form>
    </div>
</body>
</html>
