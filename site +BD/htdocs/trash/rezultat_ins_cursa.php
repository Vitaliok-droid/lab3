<?php 

   echo   "<body background=\"http://www.intrawallpaper.com/static/images/518164-backgrounds.jpg\">";
   $pornire="";$destinatie="";$cost="";$timp="";$tip="";$idcursa="";
   if(isset($_POST['pornire']))$pornire=$_POST['pornire'];
   if(isset($_POST['sosire']))$destinatie=$_POST['sosire'];
   if(isset($_POST['tip']))$tip=$_POST['tip'];
   if(isset($_POST['timp']))$timp=$_POST['timp'];
   if(isset($_POST['cost']))$cost=$_POST['cost'];  
   require('conexiune.php');
   $sql="select max(id_cursa) from curse ";
   $result = $mysqli->query($sql);
   if ($result->num_rows > 0) {  
         $row = $result->fetch_array();
           $idcursa=$row[0]+1;
         }

     if($idcursa!=""){ 
   $sql="insert into curse values($idcursa,'$pornire','$destinatie','$cost','$timp','$tip') ";
   $result = $mysqli->query($sql); if($result!=0){echo "<h1 align=\"center\" style=\" margin-top:100px;\">Inregistrare reusita!";}else {echo "Inregistrare eronata!";}
   }
 ?>