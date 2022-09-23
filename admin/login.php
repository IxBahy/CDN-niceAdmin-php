<?php
include '../shared/head.php';
include '../functions/queries.php';


session_start();


if (isset($_POST["login"])) {
  $name = $_POST["userName"];
  $password = $_POST["password"];
  $select = "SELECT * FROM `admins` WHERE `name`='$name' AND `password`='$password'";
  $admin = mysqli_query($GLOBALS['connection'], $select);
  $row = mysqli_fetch_assoc($admin);
  $count = mysqli_num_rows($admin);
  if ($count == 1) {
    $_SESSION['admin'] = $name;
    $_SESSION['adminId'] = $row['id'];
    $_SESSION['role'] = $row['role'];
    header("location: /odc/admin/home.php ");
  } else {
    $select = "SELECT * FROM `lawyers` WHERE `name`='$name' AND `password`='$password'";
    $lawyer = mysqli_query($GLOBALS['connection'], $select);
    $row = mysqli_fetch_assoc($lawyer);
    $count = mysqli_num_rows($lawyer);
    if ($count == 1) {
      $_SESSION['admin'] = $name;
      $_SESSION['adminId'] = $row['id'];
      $_SESSION['role'] = $row['role'];
      header("location: /odc/admin/home.php ");
    }
  }
}

?>
<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
              <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">Admin</span>
              </a>
            </div><!-- End Logo -->

            <div class="card mb-3">

              <div class="card-body">

                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                  <p class="text-center small">Enter your username & password to login</p>
                </div>

                <form method="post" class="row g-3 needs-validation" novalidate>

                  <div class="col-12">
                    <label for="yourUsername" class="form-label">Name</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">@</span>
                      <input type="text" name="userName" class="form-control" id="yourUsername" required>
                      <div class="invalid-feedback">Please enter your name.</div>
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="yourPassword" required>
                    <div class="invalid-feedback">Please enter your password!</div>
                  </div>

                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100" name="login" type="login">Login</button>
                  </div>

                </form>

              </div>
            </div>

            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>

          </div>
        </div>
      </div>

    </section>

  </div>
</main><!-- End #main -->


<?php
include '../shared/footer.php';
include '../shared/script.php';
?>