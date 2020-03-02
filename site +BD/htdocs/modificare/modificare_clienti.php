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
<title>Modificare Clienti</title>
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
  $sql="select*from clienti";
  if ($result = $mysqli->query($sql)) {} else {echo "Eroare: " . $mysqli ->error;}
  if ($result->num_rows > 0) {  
   echo "<body >";  $_SESSION['sesiune']; 
   echo "<h2 class=\"h1\" align=\"center\">Modificarea listei de clienti</h2>";

   echo '<form action="modificare_clienti.php" method="post">
     <table cellpadding=10 cellspacing=0 border=1 align="center" style="background-color:#c2c2a3;">
     <tr>
         <td>Campul</td>
         <td>Id Client</td>
         <td>Valoarea Modificata
         <td>Optiunea
     </tr>
      <tr>
       <td>
         <select name="cautare" size="1">
            <option value="nume_client">Nume Client
              <option value="telefon">Telefon Client
                <option value="email">Email Client          
                     </select>
                     ';
                     echo '<td><input type="text" name="valoareid" style="width:100px;">
                          <td><input type="text" name="valoare" style="width:100px;">
                     <td><input type="submit" class="submit" value="Modifica" name="cauta">
                     </tr>
                   </table></form>';
                   if(isset($_POST['cauta'])){
                    $sql1="update clienti set ".$_POST['cautare']."='".$_POST['valoare']."'where id_client='".$_POST['valoareid']."'";
                    $results=$mysqli->query($sql1);
                   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ">';
                  }

   echo"<form action=\"modificare_clienti.php\" method=\"post\">
         <p align=\"center\"><input type=\"submit\" class=\"submit\" name=\"ok1\" value=\"Trimete\" ></p>
            <table align=\"center\" cellpadding=10 cellspacing=0 border=1 style=\"margin-top:1%;background-color:#c2c2a3; \" >"; 
   echo "<tr><td class=\"tr\">ID</td>
             <td class=\"tr\">Nume Client</td>
             <td class=\"tr\">telefon</td>
             <td class=\"tr\">Email</td>";
   $i=0;
   while($row = $result->fetch_array())  {   
    echo "<tr>"; 
    $b[$i]=$row[0];  echo '<td>'.$row[0].'</td>';
    $a=1+$i*3;
    echo '<td><input type="text" name="'.$a.'" value="'.$row[1].'""size="5"></td>'; 
    $a=2+$i*3;
    echo '<td><input type="text" name="'.$a.'" value="'.$row[2].'""size="5"style="width:120px;"></td>'; 
    $a=3+$i*3;    
    echo '<td><input type="text" name="'.$a.'" value="'.$row[3].'""size="5"></td>';    
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
if(isset($_POST['ok1'])){
  require("../conexiune.php");
  $idclient="";
  $sql="select max(id_client) from clienti ";
  $result = $mysqli->query($sql);
  if ($result->num_rows > 0) {  
    $row = $result->fetch_array();
    $idclient=$row[0];
  }
  $a=0;
  for($i=0 ; $i<$idclient; $i++){ 
    $a1=1+$i*3;$a2=2+$i*3;$a3=3+$i*3;$a=$i+1;
    $sql="update clienti set nume_client='$_POST[$a1]',telefon='$_POST[$a2]', email='$_POST[$a3]' where id_client='$b[$i]'";
    $result=$mysqli->query($sql);
    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ">';
  }
  mysqli_close($mysqli);
}
?>
</body>
</html>
