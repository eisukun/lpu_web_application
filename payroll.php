<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
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
                    <a href="payroll.php" class="nav-link mb-4">
                        Payroll
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white  mb-4">
                        Payroll Report
                    </a>
                </li>
                <li>
                    <a href="beef.php" class="nav-link text-white mb-4">
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
    <h1>Rian's Enterprise Payroll</h1>
    <div class="row">
        <div class="col">
            <h1 class="fs-5">Employee Basic Info:</h1>
            <div class="card" style="width: 18rem;">
                <img src="sde images/person.jpg" class="card-img-top" alt="...">
            </div>
            <div class="col d-flex">
                <ul class="list-group">
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Employee Number:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Search Employee:
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-danger">Search</button>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Department:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <h1 class="fs-5">Basic Income:</h1>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Rate / Hour:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                No. of Hours / Cut Off:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Income / Cut Off:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <h1 class="fs-5">Honorarium Income:</h1>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Rate / Hour:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                No. of Hours/ Cut off
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Income / Cut Off:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <h1 class="fs-5">Other Income:</h1>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Rate / Hour:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                No. of Hours/ Cut off
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Income / Cut Off:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <h1 class="fs-5">Summary Income:</h1>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Gross Income:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Net Income:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
        <div class="col">
            <div class="col d-flex">
                <ul class="list-group">
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Firstname:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Middle Name:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Surname:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Civil Status:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Qualified Dependents
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Paydate:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Employee Status:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Designation:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <h1 class="fs-5">Regular Deduction:</h1>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                SSS Contribution:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                PhilHealth Contribution:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Pagibig Contribution:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Income Tax Contribution:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <h1 class="fs-5">Other Deduction:</h1>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                SSS Loan:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Pagibig Loan
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Faculty Saving Deposit:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Faculty Saving Loan:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Salary Loan:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Other Loans:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <h1 class="fs-5">Deduction Summary:</h1>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                Total Deductions:
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <button class="btn btn-primary">Gross Income</button>
                            </div>
                            <div class="col">
                                <button class="btn btn-primary">Net Income</button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-success">Save</button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-success">Update</button>
                            </div>
                            <div class="col">
                            <button type="button" class="btn btn-warning">New</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</body>
</html>