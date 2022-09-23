<?php
include '../../shared/head.php';
include '../../shared/header.php';
include '../../shared/aside.php';



if (isset($_POST["addService"])) {
    $title = $_POST["title"];
    $adminID = $_SESSION['adminId'];
    $query = <<<term
    ( null , ' $title', $adminID )
    term;
    addQuery('services', $query);
}
?>



<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add Service</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../home.php">Home</a></li>
                <li class="breadcrumb-item active">Service</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row">
            <div class="card bg-light text-dark col-6 mx-auto mt-5">
                <div class="card-body">
                    <h2 class="pt-3">Add Service</h2>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputtitle1" class="form-label">title</label>
                            <input type="text" class="form-control" name="title" id="exampleInputtitle1">
                        </div><!-- input name -->
                        <button name="addService" class="btn btn-primary">Add Service</button>
                    </form>
                </div><!-- card-body -->
            </div><!-- card #employees-->
        </div><!-- row -->
    </div><!-- container -->

</main><!-- End #main -->



<?php
include '../../shared/script.php';
?>