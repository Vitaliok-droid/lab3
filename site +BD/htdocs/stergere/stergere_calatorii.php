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
    <title>Stergere Calatorii</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
  </head>
  <?php 
  session_start();
  if(!isset($_SESSION["sesiune"])){
   header("Location:../logare.php");
 }else{
  $_SESSION['sesiune']; 
  require("../conexiune.php");
  $a="";$b="";
  $sql="select*from calatorii";
  if ($result = $mysqli->query($sql)) {} else {echo "Eroare: " . $mysqli ->error;}
  if ($result->num_rows > 0) {  
   echo "<body >";
   echo "<h2 class=\"h1\" align=\"center\">Stergerea inregistrarilor din lista calatoriilor</h2>";

   echo '<form action="stergere_calatorii.php" method="post">
   <table cellpadding=10 cellspacing=0 border=1 align="center" style="background-color:#c2c2a3;">
     <tr>
       <td>Id Calatorie</td>
       <td>Optiunea
       </tr>
       <tr>';
        echo '<td><input type="text" name="valoareid" style="width:100px;">
        <td><input type="submit" class="submit" value="Sterge" name="cauta">
        </tr>
      </table></form>';
      if(isset($_POST['cauta'])){
        $sql1="delete from calatorii where id_calatorie='".$_POST['valoareid']."'";
        $results=$mysqli->query($sql1);
        echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ">';
      }

      echo"<form action=\"stergere_calatorii.php\" method=\"post\">
      <table align=\"center\" cellpadding=6 cellspacing=0 border=1 style=\"margin-top:1%;background-color:#c2c2a3; \" >"; 
       echo "<tr><td class=\"tr\">ID</td>
       <td class=\"tr\">ID Cursa</td>
       <td class=\"tr\">ID Client</td>
       <td class=\"tr\">ID Transport</td>
       <td class=\"tr\">Tip Calatorie</td>
       <td class=\"tr\">Taxa:</td>
       </tr>";
       $i=0;
       while($row = $result->fetch_array())  { 

        echo "<tr>"; 
        $b[$i]=$row[0];echo '<td>'.$row[0].'</td>';
        $a=1+$i*6;echo '<td><input type="text" name="'.$a.'" value="'.$row[1].'""size="5"style="width: 40px;"></td>'; 
        $a=2+$i*6;echo '<td><input type="text" name="'.$a.'" value="'.$row[2].'""size="5"style="width: 40px;"></td>'; 
        $a=3+$i*6;echo '<td><input type="text" name="'.$a.'" value="'.$row[3].'""size="5"style="width: 40px;"></td>';
        $a=4+$i*6;echo '<td><input type="text" name="'.$a.'" value="'.$row[4].'""size="5"style="width: 80px;"></td>';
        $a=5+$i*6;echo '<td><input type="text" name="'.$a.'" value="'.$row[5].'""size="5"style="width: 40px;"></td>';
        $i++;      
        echo "</tr>"; 
      } 
      echo "</table></form>"; 
    } 
    else { 
     echo "Nu a fost găsit nici un rând!"; 
   } 
   $mysqli->close(); 
 }
 ?>
 <?php
 require("../conexiune.php");
 $id="";
 $sql="select max(id_calatorie) from calatorii ";
 $result = $mysqli->query($sql);
 if ($result->num_rows > 0) {  
  $row = $result->fetch_array();
  $id=$row[0];
}

$a=0;
for($i=0 ; $i<$id ; $i++){ 
  $a6=6+$i*6;$a=$i+1;
  if(isset($_POST[$a6])){$sql="delete from calatorii where id_calatorie='$b[$i]'";
  $result=$mysqli->query($sql);
  echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ">';
}
}
mysqli_close($mysqli);

?>
</body>
</html>
