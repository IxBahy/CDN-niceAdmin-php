<?php
include '../shared/head.php';
include '../shared/header.php';
include '../shared/aside.php';




if (isset($_POST["addAdmin"])) {
  $name = $_POST["name"];
  $age = $_POST["age"];
  $address = $_POST["address"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $imageName = time() . $_FILES['image']['name'];
  $tmpName = $_FILES['image']['tmp_name'];
  $path = "./uploads/" . $imageName;
  move_uploaded_file($tmpName, $path);

  $query = <<<term
  ( null , ' $name',$age, '$address',$phone, '$email',$password,'$imageName',1 )
  term;
  addQuery('admins', $query);
}
?>




<main id="main" class="main">

  <div class="pagetitle">
    <h1>Add Admin</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
        <li class="breadcrumb-item active">Admin</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->



  <div class="container">
    <div class="row">
      <div class="card bg-light text-dark col-6 mx-auto mt-5">
        <div class="card-body">
          <h2 class="pt-3">Add Admin</h2>
          <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="exampleInputtitle1" class="form-label">name</label>
              <input type="text" class="form-control" name="name" id="exampleInputtitle1">
            </div><!-- input name -->
            <div class="mb-3">
              <label for="exampleInputtitle1" class="form-label">age</label>
              <input type="number" class="form-control" name="age" id="exampleInputtitle1">
            </div><!-- input name -->
            <div class="mb-3">
              <label for="exampleInputtitle1" class="form-label">address</label>
              <input type="text" class="form-control" name="address" id="exampleInputtitle1">
            </div><!-- input name -->
            <div class="mb-3">
              <label for="exampleInputtitle1" class="form-label">phone</label>
              <input type="number" class="form-control" name="phone" id="exampleInputtitle1">
            </div><!-- input name -->
            <div class="mb-3">
              <label for="exampleInputtitle1" class="form-label">email</label>
              <input type="text" class="form-control" name="email" id="exampleInputtitle1">
            </div><!-- input name -->
            <div class="mb-3">
              <label for="exampleInputtitle1" class="form-label">password</label>
              <input type="number" class="form-control" name="password" id="exampleInputtitle1">
            </div><!-- input name -->
            <div class="mb-3">
              <label for="exampleInputtitle1" class="form-label">image</label>
              <input type="file" class="form-control" name="image" id="exampleInputtitle1">
            </div><!-- input name -->
            <button name="addAdmin" class="btn btn-primary">Add Admin</button>
          </form>
        </div><!-- card-body -->
      </div><!-- card #employees-->
    </div><!-- row -->
  </div><!-- container -->


</main><!-- End #main -->



<?php
include '../shared/script.php';
?>