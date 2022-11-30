<?php
/*
name: update
arguments: id, name, score
returns: none
use: insert un nouvel élément dans la base de données
*/
  function update($id, $name, $score){
    global $conn;
    $sql = "update ntp_table set name='$name', score='$score' where id=$id";
    $result = $conn->query($sql);
    $conn->close();
  }