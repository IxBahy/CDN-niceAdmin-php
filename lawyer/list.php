<?php
include '../shared/head.php';
include '../shared/header.php';
include '../shared/aside.php';


if (isset($_GET["delete"])) {
    $id = $_GET["delete"];
    deleteById('lawyers', $id);
}
?>
?>



<main id="main" class="main">

    <div class="pagetitle">
        <h1>List Lawyer</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../admin/home.php">Home</a></li>
                <li class="breadcrumb-item active">Lawyer</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="container mx-auto text-center " style="width:900px; ">
        <table class="table table-white table-striped  mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">age</th>
                    <th scope="col">address</th>
                    <th scope="col">Salary</th>
                    <th scope="col">years of experience</th>
                    <th scope="col">phone</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (selectAll('lawyers') as $lawyer) { ?>
                    <tr>
                        <th scope="row"><?= $lawyer['id'] ?></th>
                        <td><?= $lawyer['name'] ?></td>
                        <td><?= $lawyer['age'] ?></td>
                        <td><?= $lawyer['address'] ?></td>
                        <td><?= $lawyer['salary'] ?></td>
                        <td><?= $lawyer['yearEX'] ?></td>
                        <td><?= $lawyer['phone'] ?></td>
                        <td>
                            <div class="dropdown ">
                                <i type="button" data-bs-toggle="dropdown" aria-expanded="false" class='bx bx-dots-vertical-rounded '></i>
                                <div class="dropdown-menu" style="min-width:40px ;">
                                    <?php if (auth(1, 2)) { ?>
                                        <a class="dropdown-item text-primary" href="/odc/lawyer/update.php?edit=<?= $lawyer['id'] ?>"><i class='bx bx-edit'></i></i></a>
                                        <a class="dropdown-item text-danger" href="/odc/lawyer/list.php?delete=<?= $lawyer['id'] ?>"><i class='bx bx-trash'></i></i></a>
                                    <?php } else {
                                    } ?>

                                </div>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div><!--  End table -->
</main><!-- End #main -->



<?php
include '../shared/script.php';
?>