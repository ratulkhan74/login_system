<?php
include '_db.php';
session_start();
// Checking loggedin user
$loggeding = false;
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) $loggeding = true;
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>loginSystem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        form.card {
            box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.15);
            border: none;
        }

        form button {
            height: 45px;
            text-transform: capitalize;
            font-size: 15px;
            font-weight: 600;
            border: none;
        }

        form label {
            font-size: 12px;
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: uppercase;
            display: none;
        }

        .form-control {
            height: 45px;
            border: 1px solid #ededed;
            background: #ededed;
            box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.19) inset;
            outline: none;
        }

        .form-control:focus {
            box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.15) inset;
            outline: none;
            border: 1px solid #ededed;
        }

        .form-control::-webkit-input-placeholder {
            /* Chrome/Opera/Safari */
            font-size: 12px;
            color: #000;
            font-weight: 500;
            text-transform: capitalize;
        }

        .form-control::-moz-placeholder {
            /* Firefox 19+ */
            font-size: 12px;
            color: #000;
            font-weight: 500;
            text-transform: capitalize;
        }

        .form-control:-ms-input-placeholder {
            /* IE 10+ */
            font-size: 12px;
            color: #000;
            font-weight: 500;
            text-transform: capitalize;
        }

        .form-control:-moz-placeholder {
            /* Firefox 18- */
            font-size: 12px;
            color: #000;
            font-weight: 500;
            text-transform: capitalize;
        }
    </style>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand text-capitalize" href="#">login system</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-1">
                        <a class="nav-link px-3 py-1" href="welcome.php">Home</a>
                    </li>
                    <?php if (!$loggeding) : ?>
                        <li class="nav-item mx-1">
                            <a class="btn btn-warning px-3 py-1" href="login.php">login</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="btn btn-warning px-3 py-1" href="signup.php">signup</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item mx-1">
                            <a class="btn btn-warning px-3 py-1" href="logout.php">logout</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>