<?php session_start();

include("../includes/connect.php");

$eId = $_POST["eId"];
$id = $_SESSION["id"];
if(isset($_SESSION["first"])){
    $query = "insert into registration (eventID, userID) values ($eId,$id)";
    $tsaConn->query($query);
}else{
    echo "alert(\"sign in first\")";
}

?>