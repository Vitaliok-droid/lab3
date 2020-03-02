 <!DOCTYPE html>
 <html>
 <head>
  <style type="text/css">
    input.submit{
     font-size:10pt; background-color:#009999; border:none; padding:5px;
     border-radius:5px 5px 5px 5px;
   }
   input.submit:hover{
    background-color:#00cccc;
  }
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
<title>Modificare Transport</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<?php 
session_start();
if(!isset($_SESSION["sesiune"])){
 header("Location:../logare.php");
}else{
  $_SESSION['sesiune']; 
  require("../conexiune.php");
  $a="";$b=array();
  $sql="select*from transport";
  if ($result = $mysqli->query($sql)) {} else {
   // echo "Eroare: " . $mysqli ->error;
  }
  if ($result->num_rows > 0) {  
   echo "<body b>";
   echo "<h2 class=\"h1\" align=\"center\">Modificarea listei de transporturi</h2>";

   echo '<form action="modificare_transport.php" method="post">
   <table cellpadding=10 cellspacing=0 border=1 align="center" style="background-color:#c2c2a3;">
     <tr>
       <td>Campul</td>
       <td>Id Transport</td>
       <td>Valoarea Modificata
         <td>Optiunea
         </tr>
         <tr>
           <td>
             <select name="cautare" size="1">
              <option value="denumire">Denumire Transport
                <option value="tip_transport">Tip Transport
                  <option value="anul_prod">Anul Producerii
                    <option value="pret">Pret
                      <option value="stare">Stare
                       <option value="rol">Rol
                       </select>
                       ';
                       echo '<td><input type="text" name="valoareid" style="width:100px;">
                             <td><input type="text" name="valoare" style="width:100px;">
                              <td><input type="submit" class="submit" value="Modifica" name="cauta">
                         </tr>
                       </table></form>';
                       if(isset($_POST['cauta'])){
                        $sql1="update transport set ".$_POST['cautare']."='".$_POST['valoare']."'where id_transport='".$_POST['valoareid']."'";
                        $results=$mysqli->query($sql1);
                        echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ">';
                      }

                      echo "<form action=\"modificare_transport.php\" method=\"post\">
                              <p align=\"center\"><input type=\"submit\" class=\"submit\" name=\"ok2\" value=\"Trimete\" ></p>
                                 <table align=\"center\" cellpadding=10 cellspacing=0 border=1 style=\"margin-top:1%;background-color:#c2c2a3; \" >"; 
                      echo "<tr><td class=\"tr\">Id</td>
                                <td class=\"tr\">Denumire</td>
                                <td class=\"tr\">Tip</td>
                                <td class=\"tr\">Anul Producerii</td>
                                <td class=\"tr\">Pret</td>
                                <td class=\"tr\">Stare</td>";
                      echo "<td class=\"tr\">Rol:</td></tr>";
                      $i=0;
                      while($row = $result->fetch_array())  { 

                        echo "<tr>"; 
                        $b[$i]=$row[0];echo '<td>'.$row[0].'</td>';
                        $a=1+$i*6;echo '<td><input type="text" name="'.$a.'" value="'.$row[1].'""size="4"style="width:160px;"></td>'; 
                        $a=2+$i*6;echo '<td><input type="text" name="'.$a.'" value="'.$row[2].'""size="4"style="width: 80px;"></td>'; 
                        $a=3+$i*6;echo '<td ><input type="text" name="'.$a.'" value="'.$row[3].'""size="4"style="width: 60px;"></td>';
                        $a=4+$i*6;echo '<td><input type="text" name="'.$a.'" value="'.$row[4].'""size="4"style="width: 100px;"></td>';
                        $a=5+$i*6;echo '<td><input type="text" name="'.$a.'" value="'.$row[5].'""size="4"style="width: 80px;"></td>';  
                        $a=6+$i*6;echo '<td><input type="text" name="'.$a.'" value="'.$row[6].'""size="4"style="width: 100px;"></td>';  
                        $i++;      
                        echo "</tr>"; 
                      } 
                      echo "</table>"; 
                      echo '</form>';
                    } 
                    else { 
                     echo "Nu a fost găsit nici un rând!"; 
                   } 
                   $mysqli->close(); 
                 }

                 ?>

                 <?php

                 if(isset($_POST['ok2'])){
                  require("../conexiune.php");
                  $idtransport="";
                  $sql="select max(id_transport) from transport ";
                  $result = $mysqli->query($sql);
                  if ($result->num_rows > 0) {  
                   $row = $result->fetch_array();
                   $idtransport=$row[0];
                 }
                 $a=0;
                 for($i=0 ; $i<$idtransport ; $i++){ 
                   $a1=1+$i*6;$a2=2+$i*6;$a3=3+$i*6;$a4=4+$i*6;$a5=5+$i*6;$a6=6+$i*6;$a=$i+1;
                   $sql="update transport set denumire='$_POST[$a1]',tip_transport='$_POST[$a2]',anul_prod='$_POST[$a3]',pret='$_POST[$a4]',stare='$_POST[$a5]',rol='$_POST[$a6]' where id_transport='$b[$i]'";
                   $result=$mysqli->query($sql);
                   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ">';
                 }
                 mysqli_close($mysqli);
               }
               ?>
             </body>
             </html>

