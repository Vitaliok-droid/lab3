
<?php 
session_start();
if(!isset($_SESSION["sesiune"])){
 header("Location:../logare.php");
}else{echo '  
<html>
<head>
 <style type="text/css">
  table td input.submit{
   font-size:10pt; background-color:#009999; border:none; padding:5px;
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
<link rel="stylesheet" type="text/css" href="../style.css">
<title>Inserare Transport</title>
</head>
<body >
<h2 class="h1" align="center" color="black">Aici veti insera un nou transport:</h1>
 <form action="inserare_transport.php" method="post">
  <table align="center" bgcolor="#c2c2a3  " cellpadding="10" border="1" cellspacing="0" >
    '; $_SESSION['sesiune']; echo '
    <tr>
      <th colspan="2"> Adaugarea unui nou client:</th>
    </tr>
    <tr>
      <td class="tr">Denumire Transport:
        <td><input type="text" name="nume">
        </tr>
        <tr>
          <td class="tr">Tip Transport:
            <td><input type="radio" name="tip" value="avion">Avion<br>
              <input type="radio" name="tip" value="elicopter">Elicopter
            </tr>
            <tr>
              <td class="tr">Anul Producerii:
                <td><input type="text" name="an">
                </tr>
                <tr>
                  <td class="tr">Pret:
                    <td><input type="text" name="pret">
                    </tr>
                    <tr>
                      <td class="tr">Stare:
                        <td><input type="radio" name="stare" value="activ">Activ<br>
                          <input type="radio" name="stare" value="neactiv">Neactiv
                        </tr>
                        <tr>
                          <td class="tr">Rol:
                            <td><input type="radio" name="rol" value="pasagerial">Pasagerila<br>
                              <input type="radio" name="rol" value="marfa">Marfa
                            </tr>
                            <tr>
                              
                                <td colspan="2"><input type="submit" name="ok_t" value="Introdu" style=""class="submit">

                                </tr>
                              </table>
                            </form>
                            ';}        
                            ?>
                          </body>
                          </html>
                          <?php 
                          if(isset($_POST['ok_t'])){
                           echo   "<body background=\"http://www.intrawallpaper.com/static/images/518164-backgrounds.jpg\">";
                           $nume="";$tip="";$an="";$pret="";$stare="";$rol="";$idtransport="";
                           if(isset($_POST['nume']))$nume=$_POST['nume'];
                           if(isset($_POST['tip']))$tip=$_POST['tip'];
                           if(isset($_POST['an']))$an=$_POST['an'];
                           if(isset($_POST['pret']))$pret=$_POST['pret'];
                           if(isset($_POST['rol']))$rol=$_POST['rol'];
                           if(isset($_POST['stare']))$stare=$_POST['stare'];
                           require('../conexiune.php');
                           $sql="select max(id_transport) from transport ";
                           $result = $mysqli->query($sql);
                           if ($result->num_rows > 0) {  
                             $row = $result->fetch_array();
                             $idtransport=$row[0]+1;
                           }

                           if($idtransport!=""){ 
                             $sql="insert into transport(id_transport,denumire,tip_transport,anul_prod,pret,stare,rol) values($idtransport,'$nume','$tip','$an','$pret','$stare','$rol') ";
                             $result = $mysqli->query($sql); if($result!=0){echo "<h1 align=\"center\" style=\"\">Inregistrare reusita!";
                             echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ">';
                           }else {echo "Inregistrare eronata!";}
                         }
                       }
                       ?>