<?php
//retourne toutes les rangées de ntp_table par défaut, renvoie une seule rangée correspondant à l'id si l'id est fourni

/*
name: read
arguments: id
returns : []
use: insert un nouvel élément dans la base de données
*/
  function read($id=null){
    global $conn;
    if($id==null){
      $sql = "select * from ntp_table";
      $rows = [];
      $result = $conn ->query($sql);
      while($row = $result->fetch_assoc()) {
        $rows[] = $row;
      }
      $conn ->close();
      return $rows;
  }else{
      $sql = "select * from ntp_table where id=$id;";
      
      $result = $conn ->query($sql);
     $row = $result->fetch_assoc();
     $conn ->close();
      return [$row];
  }
}
?>