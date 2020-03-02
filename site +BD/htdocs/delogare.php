<?php
session_start();
unset($_SESSION['sesiune']);
session_destroy();
header("Location: logare.php");
?>

<?php 
            //    require('conexiune.php');
      //       $sql="select * from logare where activ=1";
        //     $result=$mysqli->query($sql);
        //     $row=$result->fetch_array();
          //   if(is_null($row[0])){
        //      $url='index.html';
       //       echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';}     
?>


