<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>project-3</title>
</head>
<body>
<?php  include("nav.php"); ?>
    <section class="contact1">
    <div class="contact-form">
  <span class="heading">Contact Us</span>
  <form  method="post">
    <label for="naam" >Naam:</label>
    <input type="text" name="naam" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="message">bericht:</label>
    <textarea id="bericht" name="bericht" required></textarea>
    <input type="submit" name="submit" value="Verzenden">
  </form>
</div>

    </section>
        </body>
          <?php  include("footer.php");  ?>
      <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="app.js"></script>
</html>  

<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "p3";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['submit'])){
  $name = $_POST['naam'];
  $email = $_POST['email'];
  $bericht = $_POST['bericht'];

  function createUser($conn, $name, $email, $bericht) {
    $sql = "INSERT INTO contactus (naam, email, bericht) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      die("Error: " . mysqli_error($conn));
    }
    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $bericht);
    if (!mysqli_stmt_execute($stmt)) {
      die("Error: " . mysqli_error($conn));
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }

  createUser($conn, $name, $email, $bericht);
  echo "Data inserted successfully.";
}




?>



