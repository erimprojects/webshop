<?php
echo "Today's date is: " . date("Y-m-d");
echo "<br>";
echo "<table style='border: 1px solid black'>";   
  echo "<tr>";
    echo "<td>" . "Username:" . "</td>";
    echo "<td>" . $_POST["uname"] . "</td>" . "<br>";
  echo "</tr>";
    echo "<td>" . "Password:" . "</td>";
    echo "<td>" . $_POST["password"] . "</td>";
echo "</table>";

$a = array("rob", "barry", "piet", "bo" );

echo "<br>";
echo "<br>";

foreach($a as $value) {
echo "<table style='border-collapse: collapse; border: 1px solid black;'>";
echo "<tr>";
  echo "<td style='border: 1px solid black; width: 150px;'>" . "$value" . "</td>";
  echo "</tr>";


}

?>

<style type="text/css">
  table {
    border-collapse: collapse;
    border: 1px solid black;
  }
  td{
    border: 1px solid black;
    width: 100px;
  }
</style>