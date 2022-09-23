<?php
include '../../shared/head.php';
include '../../shared/header.php';
include '../../shared/aside.php';




if (isset($_POST["addAdmin"])) {
  $name = $_POST["name"];
  $age = $_POST["age"];
  $address = $_POST["address"];
  $salary = $_POST["salary"];
  $yearEX = $_POST["yearEX"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  $query = <<<term
  ( null , ' $name',$age, '$address',$salary ,$yearEX , $phone , '$email',$password,2 )
  term;
  addQuery('lawyers', $query);
}
?>



<main id="main" class="main">

  <div class="pagetitle">
    <h1>Add Lawyers</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../home.php">Home</a></li>
        <li class="breadcrumb-item active">Lawyer</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->



  <div class="container">
    <div class="row">
      <div class="card bg-light text-dark col-6 mx-auto mt-5">
        <div class="card-body">
          <h2 class="pt-3">Add Lawyer</h2>
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
              <label for="exampleInputtitle1" class="form-label ">salary</label>
              <input type="number" class="form-control" name="salary" style="width:150px;" id="exampleInputtitle1">
            </div><!-- input name -->
            <div class="mb-3">
              <label for="exampleInputtitle1" class="form-label ">yearEX</label>
              <input type="number" class="form-control" name="yearEX" style="width:150px ;" id="exampleInputtitle1">
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

            <button name="addAdmin" class="btn btn-primary">Add Lawyer</button>
          </form>
        </div><!-- card-body -->
      </div><!-- card #employees-->
    </div><!-- row -->
  </div><!-- container -->


</main><!-- End #main -->



<?php
include '../../shared/script.php';
?>