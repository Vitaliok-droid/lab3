     
<?php
session_start();
if(!isset($_SESSION["sesiune"])){
 header("Location:../logare.php");
}else{ 
  require("../conexiune.php");
  $a=1;
  $sql="select*from clienti ";
  $_SESSION['sesiune'];
  if ($result = $mysqli->query($sql)) {} else {echo "Eroare: " . $mysqli ->error;}
       //if(isset($_POST['da2'])){
  if ($result->num_rows > 0) { 
    echo'<!DOCTYPE html>
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
      <link rel="stylesheet" type="text/css" href="../style.css">
      <title>Afisare Client</title>
    </head>'; 
    echo "<body >";
    echo "<h2 class=\"h1\" align=\"center\">Afisarea Clientilor</h2>";


    echo '<form action="afisare_clienti.php" method="post">
    <table style="border:none;" align="center" style="background-color:#c2c2a3;">
     <tr>
       <td>
         <select name="cautare" size="1">
          <option  value="id_client">ID Client
            <option value="nume_client">Nume Client
              <option value="telefon">Telefon
                <option value="email">Email Client
                    </select>
                    ';

                    echo '<td><input type="text" name="valoare" style="width:100px;">
                    <td><input type="submit" value="Cauta" name="cauta">
                    </tr>
                  </table></form>';
                  if(isset($_POST['cauta'])){
                    $sql1="select * from clienti where ".$_POST['cautare']." Like '%".$_POST['valoare']."%' ";
                    $result=$mysqli->query($sql1);

                  }
                  echo "<table align=\"center\" cellpadding=10 cellspacing=0 border=1 style=\"margin-top:1%;background-color:#c2c2a3; \" >"; 
                  echo "<tr><td class=\"tr\">Id</td>
                            <td class=\"tr\">Nume Client</td>
                            <td class=\"tr\">telefon</td>
                            <td class=\"tr\">Email</td>";
                  while($row = $result->fetch_array())  { 
                    echo "<tr>"; 
                    echo "<td>".$row[0]."</td>"; 
                    echo "<td>".$row[1]."</td>"; 
                    echo "<td>".$row[2]."</td>"; 
                    echo "<td>".$row[3]."</td>";		
                    echo "</tr>"; 
                  } 
                  echo "</table>"; 
                } 
                else { 

                  echo "Nu a fost găsit nici un rând!"; 
                } 
 	  //  }
                $mysqli->close(); 
              }
              ?>
            </body>
            </html>

