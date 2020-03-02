     <!DOCTYPE html>
     <html>
     <head>
      <style type="text/css">
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
    <title>Afisare Curse</title>
  </head>
  <?php
  require("../conexiune.php");
  $a=1;
  $sql="select*from curse ";
  if ($result = $mysqli->query($sql)) {} else {echo "Eroare: " . $mysqli ->error;}
      // if(isset($_POST['da1'])){
  if ($result->num_rows > 0) {  
   echo "<body >";
   echo "<h2 class=\"h1\" align=\"center\">Afisarea Curselor</h2>";
   
   echo '<form action="afisare_curse.php" method="post">
   <table style="border:none;" align="center" style="background-color:#c2c2a3;">
    <tr>
     <td>
       <select name="cautare" size="1">
        <option  value="id_cursa">ID Cursa
          <option value="p_pornire">Punct Pornire
            <option value="destinatie">Destinatie
              <option value="cost">Cost
                <option value="timp_zbor">Timp Zbor
                  <option value="tip">Tip Cursa
                  </select>
                  ';
                  
                  echo '<td><input type="text" name="valoare" style="width:100px;">
                  <td><input type="submit" value="Cauta" name="cauta">
                  </tr>
                </table></form>';
                if(isset($_POST['cauta'])){
                  $sql1="select * from curse where ".$_POST['cautare']."='".$_POST['valoare']."' ";
                  $result=$mysqli->query($sql1);
                }
                
                echo "<table align=\"center\" cellpadding=10 cellspacing=0 border=1 style=\"margin-top:1%;background-color:#c2c2a3; \" >"; 
                echo "<tr><td class=\"tr\">Id</td>
                <td class=\"tr\">Punct de Pornire</td>
                <td class=\"tr\">Destinatie</td>
                <td class=\"tr\">Cost Implicit</td>
                <td class=\"tr\">Timp Zbor</td>
                <td class=\"tr\">Tip</td>";
                while($row = $result->fetch_array())  { 
                  echo "<tr>"; 
                  echo "<td>".$row[0]."</td>"; 
                  echo "<td>".$row[1]."</td>"; 
                  echo "<td>".$row[2]."</td>"; 
                  echo "<td>".$row[3]."</td>";
                  echo "<td>".$row[4]."</td>";
                  echo "<td>".$row[5]."</td>";   			
                  echo "</tr>"; 
                } 
                echo "</table>"; 
              } 
              else { 
                echo "Nu a fost găsit nici un rând!"; 
              } 
              $mysqli->close(); 
              ?>
            </body>

