<?php 

   echo   "<body background=\"http://www.intrawallpaper.com/static/images/518164-backgrounds.jpg\">";
   $nume="";$pornire="";$destinatie="";$transport="";$aditional="";$tip="";
   $idcursa="";$idcalatorie="";$idclient="";$idtransport="";
   if(isset($_POST['pornire']))$pornire=$_POST['pornire'];
   if(isset($_POST['sosire']))$destinatie=$_POST['sosire'];
   if(isset($_POST['client']))$nume=$_POST['client'];
   if(isset($_POST['transport']))$transport=$_POST['transport'];
   if(isset($_POST['tip']))$tip=$_POST['tip'];
   if(isset($_POST['aditional']))$aditional=$_POST['aditional'];  
   require('conexiune.php');
   $sql="select max(id_calatorie) from calatorii ";
   $result = $mysqli->query($sql);
   if ($result->num_rows > 0) {  
         $row = $result->fetch_array();
           $idcalatorie=$row[0]+1;
         }
    $sql="select id_client from clienti where nume_client='$nume' ";
   $result = $mysqli->query($sql);
   if ($result->num_rows > 0) {  $row = $result->fetch_array();
           $idclient=$row[0];}
         
    $sql="select id_cursa from curse where destinatie='$destinatie' and p_pornire='$pornire' ";
   $result = $mysqli->query($sql);
   if ($result->num_rows > 0) {   $row = $result->fetch_array();
           $idcursa=$row[0];
         }
   $sql="select id_transport from transport where denumire='$transport'";
   $result = $mysqli->query($sql);
   if ($result->num_rows > 0) {  
         $row = $result->fetch_array();
           $idtransport=$row[0];
         }
     if(($idcursa!="")&&($idcalatorie!="")&&($idclient!="")&&($idtransport!="")){ 
   $sql="insert into calatorii values($idcalatorie,$idcursa,$idclient,$idtransport,'$tip','$aditional') ";
   $result = $mysqli->query($sql); if($result!=0){echo "<h1 align=\"center\" style=\" margin-top:100px;\">Inregistrare reusita!";}else {echo "Inregistrare eronata!";}
   }
 ?>