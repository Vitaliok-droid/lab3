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
    <title>Inserare Curse</title>
  </head>
  <body >
   <h2 class="h1" align="center" color="black">Aici veti insera o noua cursa:</h1>
     <form action="inserare_curse.php" method="post">
      <table align="center" bgcolor="#c2c2a3" cellpadding="10" border="1" cellspacing="0" >
        <tr>
          <th colspan="2"> Adaugarea unei noi curse:</th>
        </tr>
        <tr>
          <td class="tr">Punct Pornire:
            <td><input type="text" name="pornire">
            </tr>
            '; $_SESSION['sesiune']; echo '
            <tr>
              <td class="tr">Punct Sosire:
                <td><input type="text" name="sosire">
                </tr>
                <tr>
                  <td class="tr">Cost:
                    <td><input type="text" name="cost">
                    </tr>
                    <tr>
                      <td class="tr">Timp calatorie(min):
                        <td><input type="text" name="timp">
                        </tr>
                        <tr>
                          <td class="tr">Tip cursa:
                            <td><select name="tip" size="1">';

                             require('../conexiune.php');
                             $sql="select * from curse group by tip";
                             if ($result = $mysqli->query($sql)) {} else {echo "Eroare: " . $mysqli ->error;}
                             if ($result->num_rows > 0) {  
                               while($row = $result->fetch_array()){ 
                                 echo "<option value=$row[5]>$row[5]</option>";
                               }}

                               echo '</select></td></tr><tr><td colspan="2"><input type="submit" name="ok_cr" class="submit" value="Introdu" style="">
                             </tr></table></form>';
                           }        
                           ?>
                         </body>
                         </html>
                         <?php 
                         if(isset($_POST['ok_cr'])){
                           echo   "<body background=\"http://www.intrawallpaper.com/static/images/518164-backgrounds.jpg\">";
                           $pornire="";$destinatie="";$cost="";$timp="";$tip="";$idcursa="";
                           if(isset($_POST['pornire']))$pornire=$_POST['pornire'];
                           if(isset($_POST['sosire']))$destinatie=$_POST['sosire'];
                           if(isset($_POST['tip']))$tip=$_POST['tip'];
                           if(isset($_POST['timp']))$timp=$_POST['timp'];
                           if(isset($_POST['cost']))$cost=$_POST['cost'];  
                           require('../conexiune.php');
                           $sql="select max(id_cursa) from curse ";
                           $result = $mysqli->query($sql);
                           if ($result->num_rows > 0) {  
                             $row = $result->fetch_array();
                             $idcursa=$row[0]+1;
                           }

                           if($idcursa!=""){ 
                             $sql="insert into curse values($idcursa,'$pornire','$destinatie','$cost','$timp','$tip') ";
                             $result = $mysqli->query($sql); if($result!=0){echo "<h1 align=\"center\" style=\"\">Inregistrare reusita!";
                             echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ">';
                           }else {echo "Inregistrare eronata!";}
                         }
                       }
                       ?>