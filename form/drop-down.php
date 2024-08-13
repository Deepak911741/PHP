<?php
    include("./config.php");

    $getStudent=$conn->prepare("select id, name from lering");
    $getStudent->execute();
    $result = $getStudent->fetchAll();

  echo "<select>";
  echo "<option>Select Name</option>";
  foreach($result as $student){
    echo "<option value='".$student['id']."'>".$student['name']."</option>";
  }
  echo "</select>";


?>