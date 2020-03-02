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
     margin-left:40%;   }
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
  <title>Inserare Clienti</title>
</head>
<body >
 <h2 class="h1" align="center" color="black">Aici veti insera un nou client:</h1>
   <form action="inserare_clienti.php" method="post">
    <table align="center" bgcolor="#c2c2a3" cellpadding="10" border="1" cellspacing="0" >
      <tr>
        <th colspan="2"> Adaugarea unui nou client:</th>
      </tr>
      <tr>
        <td class="tr">Nume Client:
          <td><input type="text" name="nume">
          </tr>'; $_SESSION['sesiune']; echo '
          <tr>
            <td class="tr">Telefon:
              <td><input type="text" name="telefon">
              </tr>
              <tr>
                <td class="tr">Email:
                  <td><input type="text" name="email">
                  </tr>
                  <tr>
                    <td colspan="2"><input type="submit" name="ok_icl" value="Introdu" style="" class="submit">

                    </tr>
                  </table>
                </form>

                ';}        
                ?>
              </body>
              </html>
              <?php 
              if(isset($_POST['ok_icl'])){
               $nume="";$email="";$telefon="";$idclient="";
               if(isset($_POST['nume']))$nume=$_POST['nume'];
               if(isset($_POST['email']))$email=$_POST['email'];
               if(isset($_POST['telefon']))$telefon=$_POST['telefon'];
               require('../conexiune.php');
               $sql="select max(id_client) from clienti ";
               $result = $mysqli->query($sql);
               if ($result->num_rows > 0) {  
                 $row = $result->fetch_array();
                 $idclient=$row[0]+1;
               }

               if($idclient!=""){ 
                 $sql="insert into clienti values($idclient,'$nume','$telefon','$email') ";
                 $result = $mysqli->query($sql); if($result!=0){echo "<h1 align=\"center\" style=\"\">Inregistrare reusita!";
                 echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ">';
               }else {echo "Inregistrare eronata!";}
             }

           }
           ?>