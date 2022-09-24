<?php
include '../shared/head.php';
include '../shared/header.php';
include '../shared/aside.php';


if (isset($_GET["delete"])) {
    $id = $_GET["delete"];
    deleteById('admins', $id);
    // header("location: /backend-training/6th-task/admins/adminsList.php");
}
?>
?>



<main id="main" class="main">

    <div class="pagetitle">
        <h1>List Admins</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item active">Admin</li>
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
                    <th scope="col">phone</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (selectAll('admins') as $admin) { ?>
                    <tr>
                        <th scope="row"><?= $admin['id'] ?></th>
                        <td><?= $admin['name'] ?></td>
                        <td><?= $admin['age'] ?></td>
                        <td><?= $admin['address'] ?></td>
                        <td><?= $admin['phone'] ?></td>
                        <td>
                            <div class="dropdown ">
                                <i type="button" data-bs-toggle="dropdown" aria-expanded="false" class='bx bx-dots-vertical-rounded '></i>
                                <div class="dropdown-menu" style="min-width:40px ;">
                                    <?php if (auth(1, 2)) { ?>
                                        <a class="dropdown-item text-primary" href="/odc/admin/profile.php?show=<?= $admin['id'] ?>"><i class='bx bxs-user'></i></i></i></a>
                                        <a class="dropdown-item text-danger" href="/odc/admin/list.php?delete=<?= $admin['id'] ?>"><i class='bx bx-trash'></i></i></a>
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