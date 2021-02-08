<?php
  $conn = mysqli_connect("localhost", "root", "", "enterprisedb");
  if ($conn-> connect_error) {
    die("Connection Failed:". $conn-> connect_error);
  }

  if(isset($_POST['delete'])){
    $chkarr = $_POST['checkbox'];
    foreach ($chkarr as $id) {
      mysqli_query($conn, "DELETE FROM users WHERE id =".$id);
    }
    header("Location:tutor-student-management.php");
  }
  mysqli_close($conn);

?>
