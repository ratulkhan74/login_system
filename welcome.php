<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit();
}

?>
<!-- Navigation -->
<?php require '_header.php'; ?>


<!-- Main Content -->
<div class="bg-dark d-flex align-items-center justify-content-center" style="height: 100vh;">
    <main class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- alert -->
                <div class="alert alert-success text-center p-5" role="alert">
                    <h3 class="alert-heading mb-4">Welcome <span class="text-uppercase"><?php echo $_SESSION['username']; ?></span></h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure autem non consequatur doloribus, enim, aliquid, totam voluptas cumque hic ducimus nostrum laboriosam dolores veniam magnam repellendus! Vel quas atque magni.</p>
                    <a class="btn btn-warning" href="logout.php">logout</a>
                </div> <!-- /End of alert -->

            </div>
        </div>
    </main>
</div>
<!-- Main Content -->

<!-- Footer -->
<?php require '_footer.php'; ?>