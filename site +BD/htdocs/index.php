<?php
require('conexiune.php');
$login="";$parola="";$id="";
  //-----------------------------------------------------------------------------------------------------------------------------
//-------------------------------------logarea ---------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------------------------------------     
if(isset($_POST['ok'])){
 if(isset($_POST['login']))$login=$_POST['login'];
 if(isset($_POST['parola']))$parola=$_POST['parola'];
 $sql="select  * from logare where login='$login' and parola='$parola'";
 $result = $mysqli->query($sql);
 $row = $result->fetch_array();
 if(is_null($row[0])){
  require('logare.php');echo "<p name=\"eroare\" style=\"color:red;margin-left: 42%;margin-top:-15px; \" id=\"eroare\">Login sau parola incorecta </p>";
}
else{
    session_start();
    $_SESSION['sesiune']=$login;
    header("Location:main.php");
    //$id=$row[0];
   // $sql="update logare set activ=1 where id=$id";
   // $result = $mysqli->query($sql);
    
    
}
}
//-----------------------------------------------------------------------------------------------------------------------------
//-------------------------------------intrarea ca oaspete ---------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------------------------------------  
//if(isset($_POST['oaspete'])){
    	//$sql="select  * from logare where activ=1";
    	//$result = $mysqli->query($sql);
    	//$row = $result->fetch_array();
    	//    $id=$row[0];
    	//	$sql="update logare set activ=0 where id=$id";
    //	    $result = $mysqli->query($sql);
    	//require('main.php');
   // $url='afisare.php';
   // echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
//}

?>