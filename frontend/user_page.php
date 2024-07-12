<?php
session_start();

include_once('../database/connect.php');

if ($_SESSION['ST_ID'] == "") {
    echo "Please Login!";
    exit();
}

if ($_SESSION['ST_NAME'] != "ธีรภัทร ศรีทองกุล") {
    echo "This page for User only!";
    exit();
}

$ST_ID = $_SESSION['ST_ID'];
$ST_NAME = $_SESSION['ST_NAME'];
$strSQL = "SELECT * FROM student WHERE ST_ID =  '$ST_ID' ";
$objQuery = mysqli_query($objCon, $strSQL);
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
// print_r($objResult);
// die;
?>
<html>

<head>
    <title>BackOffice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        body {
            min-height: 100vh;
            min-height: -webkit-fill-available;
        }

        html {
            height: -webkit-fill-available;
        }

        main {
            height: 100vh;
            height: -webkit-fill-available;
            max-height: 100vh;
            overflow-x: auto;
            overflow-y: hidden;
        }

        .dropdown-toggle {
            outline: 0;
        }

        .btn-toggle {
            padding: .25rem .5rem;
            font-weight: 600;
            color: var(--bs-emphasis-color);
            background-color: transparent;
        }

        .btn-toggle:hover,
        .btn-toggle:focus {
            color: rgba(var(--bs-emphasis-color-rgb), .85);
            background-color: var(--bs-tertiary-bg);
        }

        .btn-toggle::before {
            width: 1.25em;
            line-height: 0;
            content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgba%280,0,0,.5%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
            transition: transform .35s ease;
            transform-origin: .5em 50%;
        }

        [data-bs-theme="dark"] .btn-toggle::before {
            content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgba%28255,255,255,.5%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
        }

        .btn-toggle[aria-expanded="true"] {
            color: rgba(var(--bs-emphasis-color-rgb), .85);
        }

        .btn-toggle[aria-expanded="true"]::before {
            transform: rotate(90deg);
        }

        .btn-toggle-nav a {
            padding: .1875rem .5rem;
            margin-top: .125rem;
            margin-left: 1.25rem;
        }

        .btn-toggle-nav a:hover,
        .btn-toggle-nav a:focus {
            background-color: var(--bs-tertiary-bg);
        }

        .scrollarea {
            overflow-y: auto;
        }

        .d-flex {
            display: inline-flex;
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }
    </style>
</head>

<body>
    <main class="d-flex flex-nowrap">
        <h1 class="visually-hidden">Sidebars examples</h1>

        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">Sidebar</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        Orders
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#grid"></use>
                        </svg>
                        Products
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#people-circle"></use>
                        </svg>
                        Customers
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>mdo</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
        <div class="b-example-divider b-example-vr"></div>
        Welcome to User Page! <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
        <table border="1" style="width: 300px">

            <tbody>
                <tr>
                    <td width="87"> &nbsp;Username</td>
                    <td width="197"><?php echo $objResult["ST_NAME"]; ?>
                    </td>
                </tr>
                <tr>
                    <td> &nbsp;Name</td>
                    <td><?php echo $objResult["ST_EMAIL"]; ?></td>
                </tr>
            </tbody>
        </table>
        <br>
        <a href="edit_profile.php">Edit</a><br>
        <br>
        <a href="../backend/logout_student.php">Logout</a>

    </main>


</body>

</html>
<?php
mysqli_close($objCon);
?>