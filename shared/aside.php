<?php

include '../functions/queries.php';


if (isset($_GET['logout'])) {
  session_unset();
  session_destroy();
  header('location: /odc/index.php');
}

?>


<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">
    <?php if (auth(1, 2)) { ?>
      <li class="nav-item">
        <a class="nav-link " href="/odc/admin/home.php">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li>
    <?php } else {  ?>
      <li class="nav-item">
        <a class="nav-link " href="/odc/user/home.php">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li>
    <?php } ?>
    <!-- End Dashboard Nav -->

    <li class="nav-item">
      <?php if (auth(1)) : ?>
        <a class="nav-link collapsed" data-bs-target="#tables-admin" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Admins</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      <?php else : ?>
        <a class="nav-link collapsed disabled" data-bs-target="#tables-admin" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Admins</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      <?php endif; ?>
      <ul id="tables-admin" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="/odc/admin/add.php">
            <i class="bi bi-circle"></i><span>Add Admin</span>
          </a>
        </li>
        <li>
          <a href="/odc/admin/list.php">
            <i class="bi bi-circle"></i><span>List Admin</span>
          </a>
        </li>
      </ul>
    </li><!-- End Tables Nav -->


    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-lawyer" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Lawyers</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-lawyer" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <?php if (auth(1)) { ?>
          <li>
            <a href="/odc/lawyer/add.php">
              <i class="bi bi-circle"></i><span>Add Lawyers</span></a>
          </li>
        <?php } ?>
        <li>
          <a href="/odc/lawyer/list.php">
            <i class="bi bi-circle"></i><span>List Lawyers</span>
          </a>
        </li>
      </ul>
    </li><!-- End Tables Nav -->


    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-services" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Services</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-services" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <?php if (auth(1, 2)) { ?>
          <li>
            <a href="/odc/services/addServices.php">
              <i class="bi bi-circle"></i><span>Add services</span>
            </a>
          </li>
        <?php } else {
        } ?>
        <?php if (auth(1, 2)) { ?>
          <li>
            <a href="/odc/services/addArticales.php">
              <i class="bi bi-circle"></i><span>Add Articales</span>
            </a>
          </li>
        <?php } else {
        } ?>
        <li>
          <a href="/odc/services/listServices.php">
            <i class="bi bi-circle"></i><span>List services</span>
          </a>
        </li>
      </ul>
    </li><!-- End Tables Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <?php if (auth(1)) :  ?>
        <a class="nav-link collapsed" href="/odc/admin/profile.php?show=<?= $_SESSION['adminId'] ?>">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      <?php else : ?>
        <a class="nav-link collapsed disabled" href="/odc/admin/profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      <?php endif; ?>
    </li><!-- End Profile Page Nav -->


    <form method="get">
      <li class="nav-item">
        <button name="logout" class="nav-link bg-danger collapsed">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>LogOut</span>
        </button>
      </li><!-- End Login Page Nav -->
    </form>

  </ul>

</aside><!-- End Sidebar-->