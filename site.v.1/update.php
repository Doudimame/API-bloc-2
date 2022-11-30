<?php
  include '../db.php';
  $id = $_POST['id'];
  $name = $_POST['name'];
  $score = $_POST['score'];
  $sql = "update ntp_table set name='$name', score='$score' where id=$id";
  $result = $conn->query($sql);
  $conn->close();
  header("location: index.php");
?>

<!-- la partie permettant de mofdifier et que ce soit pris en compte dans ma table -->


