<?php 

   echo   "<body background=\"http://www.intrawallpaper.com/static/images/518164-backgrounds.jpg\">";
   $nume="";$tip="";$an="";$pret="";$stare="";$rol="";$idtransport="";
   if(isset($_POST['nume']))$nume=$_POST['nume'];
   if(isset($_POST['tip']))$tip=$_POST['tip'];
   if(isset($_POST['an']))$an=$_POST['an'];
   if(isset($_POST['pret']))$pret=$_POST['pret'];
   if(isset($_POST['rol']))$rol=$_POST['rol'];
   if(isset($_POST['stare']))$stare=$_POST['stare'];
   require('conexiune.php');
   $sql="select max(id_transport) from transport ";
   $result = $mysqli->query($sql);
   if ($result->num_rows > 0) {  
         $row = $result->fetch_array();
           $idtransport=$row[0]+1;
         }

     if($idtransport!=""){ 
   $sql="insert into transport(id_transport,denumire,tip_transport,anul_prod,pret,stare,rol) values($idtransport,'$nume','$tip','$an','$pret','$stare','$rol') ";
   $result = $mysqli->query($sql); if($result!=0){echo "<h1 align=\"center\" style=\" margin-top:100px;\">Inregistrare reusita!";}else {echo "Inregistrare eronata!";}
   }
 ?>