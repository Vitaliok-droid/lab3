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
      <title>Afisare Transport</title>
    </head>
    <?php

    require("../conexiune.php");
    $a=1;
    $sql="select*from transport ";
    if ($result = $mysqli->query($sql)) {} else {echo "Eroare: " . $mysqli ->error;}
      // if(isset($_POST['da1'])){
    if ($result->num_rows > 0) {  
     echo "<body >";
     echo "<h2 align=\"center\" class=\"h1\">Afisarea Transporturilor</h2>";

     echo '<form action="afisare_transport.php" method="post" >
     <table style="border:none;" align="center" style="background-color:#c2c2a3;">
      <tr>
       <td>
         <select name="cautare" size="1">
          <option  value="id_transport">ID
            <option value="denumire">Denumire Transport
              <option value="tip_transport">Tip Transport
                <option value="anul_prod">Anul Producerii
                  <option value="pret">Pret
                    <option value="stare">Stare
                     <option value="rol">Rol
                     </select>
                     ';
                     echo '<td><input type="text" name="valoare" style="width:100px;">
                     <td><input type="submit" value="Cauta" name="cauta">
                     </tr>
                   </table></form>';
                   if(isset($_POST['cauta'])){
                    $sql1="select * from transport where ".$_POST['cautare']."='".$_POST['valoare']."' ";
                    $result=$mysqli->query($sql1);
                  }

                  echo "<table align=\"center\" cellpadding=10 cellspacing=0 border=1 style=\"margin-top:1%;background-color:#c2c2a3; \" >"; 
                  echo "<tr><td class=\"tr\">ID</td>
                            <td class=\"tr\">Denumire</td>
                            <td class=\"tr\">Tip</td>
                            <td class=\"tr\">Anul Producerii</td>
                            <td class=\"tr\">Pret</td>
                            <td class=\"tr\">Stare</td>";
                  echo "<td class=\"tr\">Rol:</td></tr>";
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
 	   // }
                $mysqli->close(); 
                ?>
              </body>
              </html>

