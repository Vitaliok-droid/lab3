<?php 
   $nume="";$email="";$telefon="";$idclient="";
   if(isset($_POST['nume']))$nume=$_POST['nume'];
   if(isset($_POST['email']))$email=$_POST['email'];
   if(isset($_POST['telefon']))$telefon=$_POST['telefon'];
   require('conexiune.php');
   $sql="select max(id_client) from clienti ";
   $result = $mysqli->query($sql);
   if ($result->num_rows > 0) {  
         $row = $result->fetch_array();
           $idclient=$row[0]+1;
         }

     if($idclient!=""){ 
   $sql="insert into clienti values($idclient,'$nume','$telefon','$email') ";
   $result = $mysqli->query($sql); if($result!=0){echo "<h1 align=\"center\" style=\" margin-top:100px;\">Inregistrare reusita!";}else {echo "Inregistrare eronata!";}
   }
 ?>