<!-- Navigation -->
<?php require '_header.php'; ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // alert message
    $alert = false;
    $fName = $_POST['fname'];
    $lName = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirm_password'];

    // Checking password
    if ($password == $cpassword) {

        $sql = "INSERT INTO `users` (`f_name`, `l_name`, `username`, `email`, `password`, `c_password`, `date`) VALUES ('$fName', '$lName', '$username', '$email', '$password', '$cpassword', CURRENT_TIMESTAMP)";
        $result = mysqli_query($db, $sql);
        if (!$result) {
            $alert = false;
        } else {
            $alert = true;
        }
    }
}

?>

<!-- Main Content -->
<main class="container">
    <div class="row justify-content-center align-items-center py-5">
        <div class="col-4">

            <?php
            if (isset($alert) && $alert == false) {
            ?>
            <!-- alert message -->
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                <strong>Something went wrong.</strong> User Registration faild.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            } elseif (isset($alert) && $alert) {
            ?>
            <!-- alert message -->
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <strong>Congratulations!</strong> Your account has been cteated successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            }
            ?>

            <!-- title -->
            <h1 class="text-capitalize mb-3 h3 text-center">signup with us</h1>
            <!-- Form -->
            <form class="card p-4" method="post" action="signup.php">
                <div class="row mb-3 gx-3">
                    <div class="col-md-6 mb-md-0 mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" placeholder="First Name" name="fname">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" name="lname">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" placeholder="Username" name="username">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">signup</button>
            </form>
        </div>
    </div>
</main>
<!-- Main Content -->

<!-- Footer -->
<?php require '_footer.php'; ?>