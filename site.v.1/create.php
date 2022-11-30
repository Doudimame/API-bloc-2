<?php
  include '../db.php';
  $name = $_POST["name"];
  $score = $_POST["score"];
  $sql = "insert into ntp_table (name, score) values ('$name', '$score')";
  $conn->query($sql);
  $conn->close();
  header("location: index.php");
?>

<!-- la parti pour ajouter un nom et son score -->