<?php
  include "connect.php";
  $co=$_GET['codigo'];
  $sql ="SELECT country.Name AS Pais, Continent AS Continente, Region, Code, Code2, city.Name AS Ciudad FROM world.country 
  INNER JOIN city ON country.capital=city.ID WHERE country.Code2='$co'";

foreach($conn->query($sql) as $row){
    echo "<br> Código: ".$row['Code']."<br>";
    echo "<br> País: ".$row['Pais']."<br>";
    echo "<br> Continente: ".$row['Continente']."<br>";
    echo "<br> Región: ".$row['Region']."<br>";
    echo "<br> Código 2: ".$row['Code2']."<br>";
    echo "<br> Ciudad: ".$row['Ciudad']."<br>";


  }

 
