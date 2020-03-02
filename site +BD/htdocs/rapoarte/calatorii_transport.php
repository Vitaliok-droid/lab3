
<html>
<head>
  <style type="text/css">
    @font-face{ font-family:blackc;     src:url(fonturi/blackc.ttf);}
    h2.h1{
      font-family:blackc;
      font-size: 30pt;
    }
    body{
      background-image:url("plane.jpg");
      background-repeat: no-repeat;
      background-attachment: cover;
      margin-right:0%;

    }
  </style>
  <title>Calatorii Transort:</title>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<?php
session_start();
if(!isset($_SESSION["sesiune"])){
 header("Location: logare.php");
}else{
  $_SESSION['sesiune']; 
  require("../conexiune.php");
  $a=1;
  $sql="select*from nrcalatorii_transport ";
  if ($result = $mysqli->query($sql)) {} else {echo "Eroare: " . $mysqli ->error;}
  if ($result->num_rows > 0) {  
   echo "<body  style=\"overflow:none;\"  >";
   echo "<h2 class=\"h1\" align=\"center\">Afisare transporturilor si numarul de calatorii efectuate de ei</h2>
   <table align=\"center\" cellpadding=10 cellspacing=0 border=1 style=\"margin-top:1%;background-color:#c2c2a3; \" >"; 
     echo "<tr>
            <td class=\"tr\">Denumire Transport</td>
            <td class=\"tr\">Tip Transport</td>
            <td class=\"tr\">Stare</td>
            <td class=\"tr\">Rol</td>
            <td class=\"tr\">Numar de Calatorii</td>";
     while($row = $result->fetch_array())  { 
      echo "<tr>"; 
      echo "<td>".$row[0]."</td>"; 
      echo "<td>".$row[1]."</td>"; 
      echo "<td>".$row[2]."</td>"; 
      echo "<td>".$row[3]."</td>";	
      echo "<td>".$row[4]."</td>";  		
      echo "</tr>"; 
    } 
    echo "</table>"; 
  } 
  else { 

    echo "Nu a fost găsit nici un rând!"; 
  } 
  $mysqli->close(); 
}
?>
</body>
</html>

