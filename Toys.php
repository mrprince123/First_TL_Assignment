<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "toystore";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  echo "Connection Error " . mysqli_connect_error();
} else {
  // echo "Connection Successfull";
}

$sql2 = "SELECT * FROM toys";
$toysResult = mysqli_query($conn, $sql2);

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Toys Store</title>
  <link rel="stylesheet" href="./style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <!-- Header Code  -->
  <nav class="navbar p-3 navbar-expand-lg" style="background-color: #edf2f4; color: #70e000">
    <div class="container-fluid">
      <a class="navbar-brand" style="font-size: 30px; color: #70e000" href="index.php">Toy Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="main.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Toys.php">Toys</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- All Toys Section  -->
  <div class="category">
    <h1>Category</h1>
    <hr class="hr_category" />
    <div class="parent_category">

      <?php
      if ($toysResult) {
        // echo "Contact Data Fetched Successfully";
        while ($row = mysqli_fetch_assoc($toysResult)) {
          echo "<div class='one_category'>";
          echo "<img src='" . $row['imgUrl'] . "' alt='' />";
          echo "<h3 class='category_title'>" . $row['title'] . "</h3>";
          echo "<p class='category_price'>Price : " . $row['price'] . "</p>";
          echo "<p class='category_description'>" . $row['description'] . "</p>";
          echo "<button>See More</button>";
          echo "</div>";
        }
      } else {
        echo "Contact Data Fetching Failed " . mysqli_error($conn);
      }
      ?>

    </div>
  </div>

  <!-- Footer code  -->
  <footer>
    <div class="footer_top">
      <div class="footer_dev">
        <h1>Prince Toy</h1>
        <p>
          Designed and developed by Mr.Prince, this website is all about the
          toy buying for kids.
        </p>
      </div>

      <div class="footer_links">
        <h1>Top Links</h1>
        <a href="">Home</a>
        <a href="">About</a>
        <a href="">Contact</a>
        <a href="">Services</a>
      </div>

      <div class="footer_address">
        <h1>Address</h1>
        <address>
          Near H-Block 202, Noida Sector 63, Pin:202306, Noida Uttar Pradesh
          India
        </address>
      </div>
    </div>
    <div class="footer_bottom">
      Prince 2002-2024 Copyright &copy; All right reserved
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>