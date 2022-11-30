<?php


include './db.php';
  
/*
name: create
arguments: name, score
returns: none
use: insert a new row in table ntp
*/
function create($name, $score){
    global $conn;
    $sql = "insert into ntp_table (name, score) values ('$name', '$score')";
    $conn->query($sql);
    $conn->close();
}

?>

