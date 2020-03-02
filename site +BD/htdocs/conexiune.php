<?php

      $host = "localhost"; 
      $user = "root"; 
      $pass = ""; 
      $db = "aeroportdb"; 
      $mysqli = new mysqli($host, $user, $pass, $db);           
      if (mysqli_connect_errno()) { die("Nu mă pot conecta la serverul MySQL!"); } 
?>