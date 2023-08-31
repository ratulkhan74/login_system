<!-- Navigation -->
<?php require '_header.php'; ?>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST") :

    // alert message
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Checking password
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($db, $sql);
    $num = mysqli_num_rows($result);
    if (!$num == 1) : ?>
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <strong>Error!</strong> invalid credentials.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php else : ?>
        <div class="alert alert-success alert-dismissible fade show text-center mt-5" role="alert">
            <strong>Congratulations!</strong> Login successfull.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: welcome.php");
    endif;
endif; ?>

<!-- Main Content -->
<main class="container">
    <div class="row justify-content-center align-items-center py-5">
        <div class="col-4">
            <!-- title -->
            <h1 class="text-capitalize mb-3 h3 text-center">Login your account</h1>
            <!-- Form -->
            <form class="card p-4" method="post" action="login.php">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" placeholder="Username" name="username">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">login</button>
            </form>
        </div>
    </div>
</main>
<!-- Main Content -->

<!-- Footer -->
<?php require '_footer.php'; ?>