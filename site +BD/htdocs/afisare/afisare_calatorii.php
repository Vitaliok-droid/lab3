     <!DOCTYPE html>
     <html>
     <head>
      <style type="text/css">
        @font-face{ font-family:hmrk;     src:url(fonturi/hmrk.ttf);}
        @font-face{ font-family:scrp;     src:url(fonturi/scrp.ttf);}
        @font-face{ font-family:western;  src:url(fonturi/western.ttf);}
        @font-face{ font-family:Adler;      src:url(fonturi/Adler.ttf);}
        @font-face{ font-family:clor;     src:url(fonturi/clor.ttf);}
        @font-face{ font-family:bradg;      src:url(fonturi/bradg.ttf);}
        @font-face{ font-family:carbonp;    src:url(fonturi/carbonp.ttf);}
        @font-face{ font-family:carbonb;    src:url(fonturi/carbonb.ttf);}
        @font-face{ font-family:blackc;     src:url(fonturi/blackc.ttf);}
        h2.h1{
          font-family:blackc;
          font-size: 30pt;
        }
        td.tr{
          text-decoration-style: solid;
        }
        input.submit{
         font-size:11pt; background-color:#009999; border:none; padding:5px;
         border-radius:5px 5px 5px 5px;
         margin-left:45%;
       }
       input.submit:hover{
        background-color:#00cccc;
      }
    body{
      background-image:url("plane.jpg");
      background-repeat: no-repeat;
      background-attachment: cover;
      margin-right:0%;
      
    }
    </style>
    <link type="text/css" rel="stylesheet" href="../style.css">
    <script type="text/javascript">
     function js(){

     }    
   </script>
   <title>Afisare Calatorii</title>
 </head>
 <?php
 session_start();
 if(!isset($_SESSION["sesiune"])){
   header("Location:../logare.php");
 }else{ 
  require("../conexiune.php");
  $a=1;
  $sql="select*from datecalatorii ";
  if ($result = $mysqli->query($sql)) {} else {echo "Eroare: " . $mysqli ->error;}

  if ($result->num_rows > 0) {
    echo '<!DOCTYPE html>
    <html>
    <head>
      <style type="text/css">
      </style>
      <link rel="stylesheet" type="text/css" href="style.css">
      <title>Afisare Calatorii</title>
    </head>';  
    echo "<body   style=\"overflow:none;\"  >";
    echo "<h2 class=\"h1\" align=\"center\">Afisarea Calatoriilor</h2>";

    echo '<form action="afisare_calatorii.php" method="post">

    <table style="border:none;" align="center" style="background-color:#c2c2a3;">
      <tr>
        <td>Afisarea particularizata:
         <td>
           <select name="cautare" size="1">
            <option  value="id_calatorie">ID Calatorie
              <option value="p_pornire">Punct Pornire
                <option value="destinatie">Destinatie
                  <option value="nume_client">Nume Client
                    <option value="denumire">Denumire
                      <option value="tip_calatorie">Tip Calatorie
                      </select>
                      ';            
                      echo '<td><input type="text" name="valoare" style="width:100px;">
                      <td><input type="submit" value="Cauta" name="cauta">
                      </tr>
                    </table></form>';
                    if(isset($_POST['cauta'])){
                      $sql1="select * from datecalatorii where ".$_POST['cautare']."='".$_POST['valoare']."' ";
                      $result=$mysqli->query($sql1);
                    }

                    echo "<table align=\"center\" cellpadding=10 cellspacing=0 border=1 style=\"margin-top:1%;background-color:#c2c2a3; \" >"; 
                    echo "<tr><td class=\"tr\">Id</td>
                    <td class=\"tr\">Punct Pornire</td>
                    <td class=\"tr\">Destinatie</td>
                    <td class=\"tr\">Nume Client</td>
                    <td class=\"tr\">Denumire Transport</td>
                    <td class=\"tr\">Tip Calatorie</td>";
                    echo "<td class=\"tr\">Taxa:</td></tr>";

                    while($row = $result->fetch_array())  { 
                      echo "<tr>"; 
                      echo "<td>".$row[0]."</td>"; 
                      echo "<td>".$row[1]."</td>"; 
                      echo "<td>".$row[2]."</td>"; 
                      echo "<td>".$row[3]."</td>";
                      echo "<td>".$row[4]."</td>";
                      echo "<td>".$row[5]."</td>";  
                      echo "<td>".$row[6]."</td>";  			
                      echo "</tr>"; 
                    } 
                    echo "</table>"; 
                  } 
                  else { 

                    echo "Nu a fost găsit nici un rând!"; 
                  } 


                  $mysqli->close();
                } 
                ?>
              </body>
              </html>
