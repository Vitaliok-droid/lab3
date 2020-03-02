<?php 
session_start();
if(!isset($_SESSION["sesiune"])){
 header("Location:../index.html");
}else{
 echo '
 <html>
 <head>
   <title></title>
   <link rel="stylesheet" type="text/css" href="../style.css">
   <style>
    table td input.submit{
     font-size:11pt; background-color:#009999; border:none; padding:5px;
     border-radius:5px 5px 5px 5px;
     margin-left:40%;
   }
   table td input.submit:hover{
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

</head>
<body >

 <h2 align="center" color="black" class="h1">Aici veti insera o noua calatorie:</h1>
   <form action="inserare_calatorii.php" method="post">
    <table align="center" bgcolor="#c2c2a3" cellpadding="10" border="1" cellspacing="0" >
      <tr>
        <th colspan="2"> Adaugarea unei noi calatorii:</th>
      </tr>
      <tr>
        <td class="tr">Punct Pornire:
          <td><select name="pornire" size="1">';
           $_SESSION['sesiune']; 
           require('../conexiune.php');
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
             
             require("../conexiune.php");
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
                
               require('../conexiune.php');
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
                  
                 require("../conexiune.php");
                 $sql="select * from transport";
                 if ($result = $mysqli->query($sql)) {} else {echo "Eroare: " . $mysqli ->error;}
                 if ($result->num_rows > 0) {  
                   while($row = $result->fetch_array()) 
                     echo "<option value=\"$row[1]\">".$row[1];
                 }

                 echo '  </tr>
                 <tr>
                  <td class="tr">Tip calatorie:
                    <td><input type="radio" name="tip" value="Privat" >Privat
                      <input type="radio" name="tip" value="Public" >Public
                    </tr>
                    <tr>
                      <td class="tr">Plata Aditionala:
                        <td><input type="text" name="aditional" size="3" >%
                        </tr>
                        <tr>
                          
                          <td colspan="2"><input type="submit" name="ok_cl" value="Introdu" class="submit" style=" ">
                            
                          </tr>
                        </table>
                      </form>
                      ';}        
                      ?>
                    </body>
                    </html>

                    <?php 
                    if(isset($_POST['ok_cl'])){
                     echo   "<body background=\"http://www.intrawallpaper.com/static/images/518164-backgrounds.jpg\">";
                     $nume="";$pornire="";$destinatie="";$transport="";$aditional="";$tip="";
                     $idcursa="";$idcalatorie="";$idclient="";$idtransport="";
                     if(isset($_POST['pornire']))$pornire=$_POST['pornire'];
                     if(isset($_POST['sosire']))$destinatie=$_POST['sosire'];
                     if(isset($_POST['client']))$nume=$_POST['client'];
                     if(isset($_POST['transport']))$transport=$_POST['transport'];
                     if(isset($_POST['tip']))$tip=$_POST['tip'];
                     if(isset($_POST['aditional']))$aditional=$_POST['aditional'];  
                     require('../conexiune.php');
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
                         $result = $mysqli->query($sql); if($result!=0){echo "<h1 align=\"center\" style=\"\">Inregistrare reusita!";
                         
                         echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ">';
                       }else {echo "Inregistrare eronata!";}
                     }
                   }
                   ?>