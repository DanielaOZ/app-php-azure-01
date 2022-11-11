<?php
  include ('connect.php');
  $code=$_GET['code'];
  $sql = "Exec getPais @code='code'";
foreach($conn->query($sql) as $row){
    echo "<br> Código: ".$row['Code']."<br>";
    echo "<br> País: ".$row['Pais']."<br>";
    echo "<br> Continente: ".$row['Continente']."<br>";
    echo "<br> Región: ".$row['Region']."<br>";
    echo "<br> Código 2: ".$row['Code2']."<br>";
    echo "<br> Ciudad: ".$row['Ciudad']."<br>";


  }

 
?>
