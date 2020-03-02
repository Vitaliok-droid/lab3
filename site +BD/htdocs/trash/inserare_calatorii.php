<?php 
session_start();
if(!isset($_SESSION["sesiune"])){
 header("Location: logare.php");
}else{
 echo '
 <html>
 <head>
   <title>Inserare Calatorii</title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <style>

     input[type="text"]{
      background-color: red;
      border:1px solid red;
    }
    input:focus{
      background-color:red;
    }
  </style>
</head>
<body background="back.jpg">

 <h1 align="center" color="black">Aici veti insera o noua calatorie:</h1>
 <form action="inserare_calatorii.php" method="post">
  <table align="center" bgcolor="#99c9ff " cellpadding="10" border="1" cellspacing="0" >
    <tr>
      <th colspan="2"> Adaugarea unei noi calatorii:</th>
    </tr>
    <tr>
      <td class="tr">Punct Pornire:
        <td><select name="pornire" size="1">';
         $_SESSION['sesiune']; 
         require('conexiune.php');
         $sql="select * from curse";
         if ($result = $mysqli->query($sql)) {} else {echo "Eroare: " . $mysqli ->error;}
         if ($result->num_rows > 0) {  
           $row = $result->fetch_array();  
           echo "<option value=\"$row[1]\">".$row[1];
         }
         echo '</select>
       </tr>
       <tr>
        <td class="tr">Punct Sosire:
          <td><select  name="sosire" size="1" >';

           require("conexiune.php");
           $sql="select * from curse";
           if ($result = $mysqli->query($sql)) {} else {echo "Eroare: " . $mysqli ->error;}
           if ($result->num_rows > 0) {  
             while($row = $result->fetch_array()) 
               echo "<option value=\"$row[2]\">".$row[2];
           }

           echo '    </select>
         </tr>
         <tr>
          <td class="tr">Client:
            <td><select name="client" size="1">';

             require('conexiune.php');
             $sql="select * from clienti";
             if ($result = $mysqli->query($sql)) {} else {echo "Eroare: " . $mysqli ->error;}
             if ($result->num_rows > 0) {  
               while($row = $result->fetch_array()) 
                 echo "<option value=\"$row[1]\">".$row[1];
             }

             echo '  </select>

           </tr>
           <tr>
            <td class="tr">Transport:
              <td><select name="transport" size="1">';

               require("conexiune.php");
               $sql="select * from transport";
               if ($result = $mysqli->query($sql)) {} else {echo "Eroare: " . $mysqli ->error;}
               if ($result->num_rows > 0) {  
                 while($row = $result->fetch_array()) 
                   echo "<option value=\"$row[1]\">".$row[1];
               }

               echo '  </tr>
               <tr>
                <td class="tr">Tip calatorie:
                  <td><input type="radio" name="tip" value="Privat"  >Privat
                    <input type="radio" name="tip" value="Public" >Public
                  </tr>
                  <tr>
                    <td class="tr">Plata Aditionala:
                      <td><input type="text" name="aditional" style="background:red;" size="3" >%
                      </tr>
                      <tr>
                        <td class="tr">Confirmare:
                          <td><input type="submit" name="ok_ic" value="Introdu" >
                            <input type="reset" name="nu_ic"value="Reseteaza" >
                          </tr>
                        </table>
                      </form>
                      ';}        
                      ?>
                    </body>
                    </html>
<?php
if(isset($_POST['ok_ic'])){ 
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
 }
 ?>