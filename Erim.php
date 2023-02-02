<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css"> 
<title>project-3</title>
</head>
<body>
    <main>
    <nav>
        <ul>
          <li><a href="homepage.php">Home</a></li>
          <li><a href="Erim.php">Erim</a></li>
          <li><a href="Milan.html">Milan</a></li>
          <li><a href="Anwar.html">Anwar</a></li>
        </ul>
      </nav>
      <section>

  <form action="action_page.php" method="POST">
  <label for="fname">Username:</label><br>
  <input type="text" id="fname" name="uname" value=""><br><br>
  <label for="fname">Password:</label><br>
  <input type="password" id="fname" name="password" value=""><br><br>
  <input type="submit" value="Submit">
  </form>         


        <?php 
        
        echo "Today is " . date("Y/m/d") 
        
      
        ?>
             
            
  </section>
    </main>
      <footer>
        <p>Copyright &copy; 2023 My Website</p>
      </footer>
 </body>
</html>