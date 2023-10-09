<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rian's POS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/pos.css">
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
                    <a href="Payroll_page.php" class="nav-link text-white mb-4">
                        Payroll
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white  mb-4">
                        Payroll Report
                    </a>
                </li>
                <li>
                    <a href="beef.php" class="nav-link mb-4">
                        POS
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white mb-4">
                        POS Sales Report
                    </a>
                </li>
                <li>
                    <a href="user_page.php" class="nav-link text-white mb-4">
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
    <h1 style="text-align:center; margin-top:10px; font-size:70px; font-family:Tahoma; color:black">Rian's Store</h1>
    <div style="float:left" >
        <div class="pic_group">
            <div class="pic_option">
                <h1 style="text-align:center; margin-top:10px; font-size:30px; font-family:Tahoma; color:black">Kitchenwares</h1>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--SECLECT--</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="beef.php">Beef Dishes</a>
                        <a class="dropdown-item" href="pasta.php">Pasta Dishes</a>
                        <a class="dropdown-item" href="clothes.php">Apparels</a>
                        <a class="dropdown-item" href="kitchen.php">Kitchenwares</a>
                        <a class="dropdown-item" href="laptop.php">Laptops</a>
                </div>
                <div class="row">
                    <script>
                        const perfumeItems = [
                            { name: "Sheet Tray", price: 50 },
                            { name: "Bread Knife", price: 40 },
                            { name: "Can Opener", price: 20 },
                            { name: "Chopping Board", price: 70 },
                            { name: "Grater", price: 90 },
                            { name: "Cup Measure", price: 20 },
                            { name: "Spoon Measure", price: 20 },
                            { name: "Mittens", price: 30 },
                            { name: "Chef's Knife", price: 150 },
                            { name: "Potato Masher", price: 30 },
                            { name: "Pressure Cooker", price: 400 },
                            { name: "Rubber Utensils", price: 120 },
                            { name: "Fry Pan", price: 300 },
                            { name: "Knife Sharpener", price: 100 },
                            { name: "Iron Skillet", price: 400 },
                            { name: "Stirring Spoon", price: 120 },
                            { name: "Toaster", price: 3000 },
                            { name: "Tongs", price: 60 },
                            { name: "Peeler", price: 20 },
                            { name: "Whisk", price: 40 }
                        ];

                        for (let i = 0; i < perfumeItems.length; i++) {
                            const item = perfumeItems[i];
                            document.write(`
                                <div class="col-md-3">
                                    <div>
                                        <img src="sde images/kitchen_utensils/${i + 1}.png" data-toggle="tooltip" data-placement="center" title="pasta" width="170" height="180" alt="${item.name}" style="margin-top:30px; border:10px solid white; overflow:hidden; box-shadow: 0 0 5px; margin-bottom:30px">
                                        <div>
                                            <input type="checkbox" name="check_${i + 1}" id="check_${i + 1}" data-name="${item.name}" data-price="${item.price}">
                                            <label for="check_${i + 1}">${item.name} (P${item.price})</label>
                                        </div>
                                    </div>
                                </div>
                            `);
                        }

                        // Event listener for checkbox click
                        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
                        checkboxes.forEach((checkbox) => {
                            checkbox.addEventListener("click", () => {
                                // Check if the checkbox is checked
                                if (checkbox.checked) {
                                    const itemName = checkbox.getAttribute("data-name");
                                    const itemPrice = checkbox.getAttribute("data-price");

                                    // Update the "Name of Item" and "Price" input fields
                                    document.getElementById("item_name").value = itemName;
                                    document.getElementById("price").value = itemPrice;
                                } else {
                                    // Clear the "Name of Item" and "Price" input fields if the checkbox is unchecked
                                    document.getElementById("item_name").value = "";
                                    document.getElementById("price").value = "";
                                }
                            });
                        });
                    </script>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-6">
    <!-- Left Column: Order Details -->
    <h2>Order Details</h2>
        <div class="form-group">
            <label for="item_name">Name of Item:</label>
            <input type="text" class="form-control" id="item_name" name="item_name">
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" class="form-control" id="quantity" name="quantity" min="1" onchange="change()">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="form-group">
            <label for="discount">Discount Amount:</label>
            <input type="text" class="form-control" id="discount" name="discount" readonly>
        </div>
        <div class="form-group">
            <label for="discounted_amount">Discounted Amount:</label>
            <input type="text" class="form-control" id="discounted_amount" name="discounted_amount" readonly>
        </div>
        <div class="form-group">
            <label for="total_price">Total Price:</label>
            <input type="text" class="form-control" id="total_price" name="total_price">
        </div>
        <div class="form-group">
            <label for="total_quantity">Total Quantity:</label>
            <input type="text" class="form-control" id="total_quantity" name="total_quantity" readonly>
        </div>
        <div class="form-group">
            <label for="total_discount_given">Total Discount Given:</label>
            <input type="text" class="form-control" id="total_discount_given" name="total_discount_given" readonly>
        </div>
        <div class="form-group">
            <label for="total_discounted_amount">Total Discounted Amount:</label>
            <input type="text" class="form-control" id="total_discounted_amount" name="total_discounted_amount" readonly>
        </div>
        <div class="form-group">
            <label for="cash_given">Cash Given:</label>
            <input type="text" class="form-control" id="cash_given" name="cash_given">
        </div>
        <div class="form-group">
            <label for="change">Change:</label>
            <input type="text" class="form-control" id="change" name="change" readonly>
        </div>
    </div>

    <div class="col-md-6">
    <!-- Right Column: Calculator for Order Details -->
    <h2>Calculator</h2>

    <!-- Discount Options: Radio Buttons -->
    <div class="form-group">
    <label>Discount Options:</label>
        <div>
            <label>
                <input type="radio" name="discount_option" value="senior_citizen"> Senior Citizen
            </label>
        </div>
        <div>
            <label>
                <input type="radio" name="discount_option" value="with_disc_card"> With Discount Card
            </label>
        </div>
        <div>
            <label>
                <input type="radio" name="discount_option" value="employee_disc"> Employee Discount
            </label>
        </div>
        <div>
            <label>
                <input type="radio" name="discount_option" value="no_discount" checked> No Discount
            </label>
        </div>
    </div>
    <!-- Add a Discount input field -->
    <div class="form-group">
        <label for="discount_percentage">Discount Percentage (%):</label>
        <input type="number" class="form-control" id="discount_percentage" name="discount_percentage" min="0" max="100" value="0" disabled>
    </div>
    <div>
            <button class="btn btn-primary" onclick="calculateChange()">Calculate Change</button>
            <button class="btn btn-danger" onclick="clearCalculator()">NEW</button>
            <button class="btn btn-warning" onclick="saveData()">SAVE</button>
            <button class="btn btn-dark" onclick="updateData()">UPDATE</button>
        </div>
    <!-- Calculator: Enter and Arithmetic Buttons -->
    <div>
        <!-- Calculator Display -->
        <input type="text" id="calculatorInput" class="form-control" disabled>
    </div>
    <div>
        <!-- Arithmetic Calculator -->
        <div>
            <button class="btn btn-secondary" onclick="addToCalculator('7')">7</button>
            <button class="btn btn-secondary" onclick="addToCalculator('8')">8</button>
            <button class="btn btn-secondary" onclick="addToCalculator('9')">9</button>
            <button class="btn btn-secondary" onclick="addToCalculator('+')">+</button>
        </div>
        <div>
            <button class="btn btn-secondary" onclick="addToCalculator('4')">4</button>
            <button class="btn btn-secondary" onclick="addToCalculator('5')">5</button>
            <button class="btn btn-secondary" onclick="addToCalculator('6')">6</button>
            <button class="btn btn-secondary" onclick="addToCalculator('-')">-</button>
        </div>
        <div>
            <button class="btn btn-secondary" onclick="addToCalculator('1')">1</button>
            <button class="btn btn-secondary" onclick="addToCalculator('2')">2</button>
            <button class="btn btn-secondary" onclick="addToCalculator('3')">3</button>
            <button class="btn btn-secondary" onclick="addToCalculator('*')">*</button>
        </div>
        <div>
            <button class="btn btn-secondary" onclick="addToCalculator('0')">0</button>
            <button class="btn btn-secondary" onclick="addToCalculator('/')">/</button>
            <button class="btn btn-secondary" onclick="clearCalculator()">C</button>
            <button class="btn btn-success" onclick="calculate()">=</button>
        </div>
        <div>
            <!-- Enter Button -->
            <button id="enterButton" class="btn btn-primary">Enter</button>
        </div>
        
    </div>
</div>

    </div>
</div>
<script src="js/pos.js"></script>
</body>
</html>
</html>
