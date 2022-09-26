<?php
if (isset($_POST['add'])) {
    include('../db.php');
    $id = $_GET['id'];
    $name = $_POST['name'];
    $genre = $_POST['genre'];
    $realese = $_POST['realese'];
    $episode = $_POST['episode'];
    $season = $_POST['season'];
    $synopsis = $_POST['synopsis'];
    
    $query = mysqli_query($con, "INSERT INTO series(`id`, `name`, `genre`, `realese`, `episode`, `season`, `synopsis`) 
   VALUES ('$id','$name','$genre','$realese','$episode','$season','$synopsis')") or die(mysqli_error($con));
    if ($query) {
        echo
        '<script>
       alert("Add Series Success");
       window.location = "../page/listSeriesPage.php"
      </script>';
    } else {
        echo
        '<script>
  window.history.back()
  </script>';
    }
} else if (isset($_POST['cancel'])) {
    echo
    '<script>
  window.location = "../page/listSeriesPage.php"
  </script>';
}
