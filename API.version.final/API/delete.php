<?php
// supprimer l'element correspondant à l'id indiqué dans l'url

/*
name: delete
arguments: id
returns: none
use: delete row from table ntp
*/
  function delete($id){
    global $conn;
    $sql = "delete from ntp_table where id=$id";
    $conn->query($sql);
    $conn->close();
 
  }
  
?>