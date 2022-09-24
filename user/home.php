<?php
include '../shared/head.php';
include '../shared/header.php';
include '../shared/aside.php';


?>



<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->


</main><!-- End #main -->

<?php
foreach (selectAll('articales') as $article) {
  $path = "../services/uploads/" . $article['image'];
  echo "
        <div class='container mt-5'>
            <div class='card bg-secondary mx-auto mt-5' style='width: 600px;'>
                <img src='$path' class='card-img-top' >
                <div class='card-body mt-2'>
                    <h5 class='card-title'> Title:" . $article['title'] . "</h5>
                    <p class='card-text'> " . $article['description'] . "</p>
                    <h6 class='card-title'> Author: " . $article['author'] . "</h6>
                </div>
            </div>
        </div>";
}
?>
<?php
include '../shared/script.php';
?>