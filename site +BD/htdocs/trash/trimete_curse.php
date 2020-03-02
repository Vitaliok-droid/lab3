<?php
require("conexiune.php");
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
         $sql="update curse set p_pornire='$_POST[$a1]',destinatie='$_POST[$a2]', cost='$_POST[$a3]', timp_zbor='$_POST[$a4]',tip='$_POST[$a5]' where id_cursa='$a'";
          $result=$mysqli->query($sql);
}
mysqli_close($mysqli);
?>