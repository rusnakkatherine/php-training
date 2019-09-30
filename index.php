<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) { 
    die("and i oop: " . $conn->connect_error);
 } // else{
// echo "Connected successfully";
// }
 $thisPagename = $_GET["page"];

// $sql = "SELECT * FROM test.content WHERE pageName = '$thisPagename' ";
//   $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <nav>
    <?php
        $sql = "SELECT * FROM test.content WHERE pageName = '$thisPagename' ";
        $result = $conn->query($sql);
        echo "<ul>";
        while($row = $result->fetch_assoc()){
          echo "<li><a href ='index.php?page= ". $row['pagename'] ."'>".$row['pagename']."</a></li>";
        }
        echo "</ul>"
    ?>
  </nav>
  <section>
<div>
  <?php
  $sql = "SELECT * FROM test.content WHERE pageName = '$thisPagename' ";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  
  echo "<p>".$row["pagecontent"]."</p>";
  echo "<p>".$row["pagetitle"]."</p>";
  echo "<p>".$row["pagename"]."</p>";

  ?>
  </div>
  </section>
</body>
</html>