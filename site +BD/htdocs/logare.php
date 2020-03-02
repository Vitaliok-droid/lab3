<?php 
if(isset($_SESSION["sesiune"])){
  session_start();
  unset($_SESSION['sesiune']);
  session_destroy();
}
if(!isset($_SESSION["sesiune"])){
  session_start();
  unset($_SESSION['sesiune']);
  session_destroy();
}
?>
<html>
<head>
	<title>Logare</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
    @font-face{ font-family:hmrk;     src:url(fonturi/hmrk.ttf);}
    @font-face{ font-family:scrp;     src:url(fonturi/scrp.ttf);}
    @font-face{ font-family:western;  src:url(fonturi/western.ttf);}
    @font-face{ font-family:prec;     src:url(fonturi/prec.ttf);}
    @font-face{ font-family:Adler;      src:url(fonturi/Adler.ttf);}
    @font-face{ font-family:clor;     src:url(fonturi/clor.ttf);}
    @font-face{ font-family:bradg;      src:url(fonturi/bradg.ttf);}
    @font-face{ font-family:carbonp;    src:url(fonturi/carbonp.ttf);}
    @font-face{ font-family:carbonb;    src:url(fonturi/carbonb.ttf);}
    @font-face{ font-family:blackc;     src:url(fonturi/blackc.ttf);}
    h1.h1{
      font-family:blackc;
      font-size: 30pt;
    }
    table.logare td.buton a{
     padding: 7px 7px;
     margin-right: 0px;   
     text-decoration:none;
     border-radius:10px 10px 10px 10px;
     color:black;
   }
   table.logare td.buton a.oaspete{
     background-color:#3399ff;
   }
   table.logare td.buton a.oaspete:hover{

     background-color:#66b3ff;
   }
   table.logare td.buton a.rest:hover{
     text-decoration:underline;
   }
   
   table.logare td.buton{
    border-left:none;
    border-bottom: none;
    font-size: 10pt;
  }
  
  table.logare td{
    border-right: none;
    border-left: none;
    border-top: none;
    border-bottom: none;
  }
  table.logare td.a1 a{
   padding: 5px 5px;
   margin-right: 0px;
   background-color:#005fcc;
   text-decoration:none;
   border-radius:10px 10px 10px 10px;
   color:black;
   font-size: 10pt;
 }
 table.logare td.a1 a:hover{

   background-color:#1a85ff;

 }
 table.logare td input.insert{
  border:none;
  padding: 5px;
  background-color: #4da0ff;
  border-radius:5px 5px 5px 5px;
  font-size: 10pt;
  color:white;
}
table.logare td input.insert:hover{

  background-color: #80bbff;
}
    body{
      background-image:url("plane.jpg");
      background-repeat: no-repeat;
      background-attachment: cover;
      margin: 0;
      width: 100%
      height:100%;
      margin-right:0%;
      
    }
 label.l1{
  color:white;
  font-size: 15pt;
 }
</style>
</head>
<body background="plane.jpg">
  <h1 align="center" class="h1" >Logare "RoyalFly"</h1>
  <form action="index.php" method="POST">
   <table class="logare" align="center" bgcolor="#c2c2a3" cellpadding="10" border="1" cellspacing="0" >
    <tr>
      <td class="a2" style="">Login:
        <td  style=" ">
          <input type="text" name="login" >                    
        </tr>
        <tr>
          <td class="a2"  style="">Parola:
            <td  colspan="2" style="" ><input type="password" name="parola">
            </tr>
            <tr>
              <td  align="center"  colspan="2" class="a1">
               <input type="submit" class="insert" name="ok" value="Logare" style="margin-right:10%">
                <a href="afisare.php" style=" " class="oaspete" >Oaspete</a>
              </tr>
            </table>
            
          </form>
  
        </body>
        </html>