<?php
$tsaConn = new mysqli("localhost", /*user*/,  /*pass*/,  /*database*/);
if(mysqli_connect_errno())
    echo "Connection failed: ".mysqli_connect_error();

?>
