<?php
include '../shared/head.php';
include '../shared/header.php';
include '../shared/aside.php';


?>



<main id="main" class="main">

    <div class="pagetitle">
        <h1>List Services</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../admin/home.php">Home</a></li>
                <li class="breadcrumb-item active">Services</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <h4 class="text-primary text-center pt-1">services :<br> </h2>
        <ul class="nav justify-content-center">
            <?php foreach (selectAll('services') as $service) : ?>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href=""><?= $service['title'] ?></a>
                </li>
            <?php endforeach; ?>

        </ul>

</main><!-- End #main -->



<?php
include '../shared/script.php';
?>