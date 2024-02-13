<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

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

  //  For Setting Data
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $phone = $_REQUEST['phone'];
  $purpose = $_REQUEST['purpose'];
  $message = $_REQUEST['message'];

  $sql = "INSERT INTO contact (name, email, phone, purpose, message) VALUES('$name', '$email', '$phone', '$purpose', '$message')";

  $result = mysqli_query($conn, $sql);

  // Fetching the Response from the Contact

  if ($result) {
    echo "<p>Contact Data Send Successfully You will get back to you soon!!</p>";
  } else {
    echo "<p>Data Inserting Failed" . mysqli_error($conn) . "</p>";
  }

  $conn->close();
}

?>


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
  <title>Home Page</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <!-- Header Code  -->
  <nav class="navbar p-3 navbar-expand-lg" style="background-color: #edf2f4; color: #70e000">
    <div class="container-fluid">
      <a class="navbar-brand" style="font-size: 30px; color: #70e000" href="main.php">Toy Store</a>
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

  <!-- Carousel  -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" data-bs-interval="2000">
      <div class="carousel-item active">
        <img src="./Images/3.png" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5>Toy Store</h5>
          <p>Toy Store Bring smart toys for your smart kids</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./Images/2.png" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5>Happy Children Day</h5>
          <p>We Celebrated Every day as Children Day</p>
        </div>
      </div>

      <!-- <div class="carousel-item">
          <img src="./Images/4.png" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>Each and Every Toys</h5>
            <p>We have toys from each and every category</p>
          </div>
        </div> -->
      <div class="carousel-item">
        <img src="./Images/1.png" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5>Developed by Prince</h5>
          <p>The Toy store website is developed and Designed by Prince</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Here Section  -->
  <div class="hero_parent">
    <div class="text_div">
      <h1>Toy Store</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae
        nulla, nihil quisquam laudantium itaque optio placeat doloribus!
        Veniam beatae dignissimos, perferendis repellendus magni illum amet ut
        voluptatem facilis sequi repudiandae?
      </p>
      <button>See Know</button>
    </div>

    <div class="div_img">
      <img src="./Images/android-4912064_1280.png" alt="" />
    </div>
  </div>

  <hr class="hr_hero">

  <!-- Here Section 2  -->
  <div class="hero_parent">
    <div class="div_img">
      <img src="./Images/toys-1514273_960_720.jpg" alt="" />
    </div>
    <div class="text_div">
      <h1>Toy Store</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae
        nulla, nihil quisquam laudantium itaque optio placeat doloribus!
        Veniam beatae dignissimos, perferendis repellendus magni illum amet ut
        voluptatem facilis sequi repudiandae?
      </p>
      <button>See Know</button>
    </div>
  </div>

  <!-- Category Section  -->
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

    <!-- Contact Section  -->
    <section class="contact_section">
      <h1>Contact Us</h1>
      <p>You can contact us anytime, just drop a message below</p>
      <form action="" method="post">
        <input type="text" name="name" placeholder="Name" />
        <input type="text" name="email" placeholder="Email" />
        <input type="number" name="phone" placeholder="Phone" />
        <input type="text" name="purpose" placeholder="Purpose" />
        <textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
        <input type="submit" class="input_submit" value="Send Message" />
      </form>

    </section>

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