<?php
  include '../db.php';
  $id = $_GET['id'];
  $sql = "delete from ntp_table where id=$id";
  $conn->query($sql);
  $conn->close();
  header("location: index.php");
?>

<!-- supprimer de la base de donné grace a l'id -->