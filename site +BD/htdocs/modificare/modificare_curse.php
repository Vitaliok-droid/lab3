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
    <title>Modificare Curse</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
  </head>
  <?php 
  session_start();
  if(!isset($_SESSION["sesiune"])){
   header("Location:../logare.php");
 }else{
  $_SESSION['sesiune']; 
  require("../conexiune.php");
  $a="";
  $sql="select*from curse";
  if ($result = $mysqli->query($sql)) {} else {echo "Eroare: " . $mysqli ->error;}
  if ($result->num_rows > 0) {  
    echo "<body >";
    echo "<h2 class=\"h1\" align=\"center\">Modificarea listei curselor</h2>";

    echo '<form action="modificare_curse.php" method="post">
    <table cellpadding=10 cellspacing=0 border=1 align="center" style="background-color:#c2c2a3;">
     <tr>
       <td>Campul</td>
       <td>Id Curse</td>
       <td>Valoarea Modificata
         <td>Optiunea
         </tr>
         <tr>
           <td>
             <select name="cautare" size="1">
              <option value="p_pornire">Punct Pornire
                <option value="destinatie">Destinatie
                  <option value="cost">Cost
                    <option value="tip_zbor">Tip Zbor
                      <option value="tip">Tip 
                      </select>
                      ';
                      echo '<td><input type="text" name="valoareid" style="width:100px;">
                      <td><input type="text" name="valoare" style="width:100px;">
                       <td><input type="submit" class="submit" value="Modifica" name="cauta">
                       </tr>
                     </table></form>';
                     if(isset($_POST['cauta'])){
                      $sql1="update curse set ".$_POST['cautare']."='".$_POST['valoare']."'where id_cursa='".$_POST['valoareid']."'";
                      $results=$mysqli->query($sql1);
                      echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ">';
                    }

                    echo "<form action=\"modificare_curse.php\" method=\"post\">
                    <p align=\"center\">
                      <input type=\"submit\" class=\"submit\" name=\"ok\" value=\"Trimete\" >
                    </p>
                    <table align=\"center\" cellpadding=10 cellspacing=0 border=1 style=\"margin-top:1%;background-color:#c2c2a3; align-content:center; \" >"; 
                     echo "<tr>
                     <td class=\"tr\">Id</td>
                     <td class=\"tr\">Punct de Pornire</td>
                     <td class=\"tr\">Destinatie</td>
                     <td class=\"tr\">Cost Implicit</td>
                     <td class=\"tr\">Timp Zbor</td>
                     <td class=\"tr\">Tip</td>";
                     $i=0;
                     while($row = $result->fetch_array())  { 

                      echo "<tr>"; 
                      $b[$i]=$row[0];echo '<td>'.$row[0].'</td>';
                      $a=1+$i*5;echo '<td><input type="text" name="'.$a.'" value="'.$row[1].'""size="5"style="width: 120px;"></td>'; 
                      $a=2+$i*5;echo '<td><input type="text" name="'.$a.'" value="'.$row[2].'""size="5"style="width: 120px;"></td>'; 
                      $a=3+$i*5;echo '<td><input type="text" name="'.$a.'" value="'.$row[3].'""size="5"style="width: 80px;"></td>';
                      $a=4+$i*5;echo '<td><input type="text" name="'.$a.'" value="'.$row[4].'""size="5"style="width: 100px;"></td>';
                      $a=5+$i*5;echo '<td><input type="text" name="'.$a.'" value="'.$row[5].'""size="5"style="width: 80px;"></td>';  
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
               if(isset($_POST['ok'])){
                require("../conexiune.php");
                $idcursa="";
                $sql="select max(id_cursa) from curse ";
                $result = $mysqli->query($sql);
                if ($result->num_rows > 0) {  
                  $row = $result->fetch_array();
                  $idcursa=$row[0];
                }
                $a=0;
                for($i=0 ; $i<$idcursa ; $i++){ 
                 $a1=1+$i*5;$a2=2+$i*5;$a3=3+$i*5;$a4=4+$i*5;$a5=5+$i*5;$a=$i+1;
                 $sql="update curse set p_pornire='$_POST[$a1]',destinatie='$_POST[$a2]', cost='$_POST[$a3]', timp_zbor='$_POST[$a4]',tip='$_POST[$a5]' where id_cursa='$b[$i]'";
                 $result=$mysqli->query($sql);
                 echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ">';
               }
               mysqli_close($mysqli);
             }
             ?>
           </body>
           </html>

