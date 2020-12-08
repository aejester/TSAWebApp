<?php include("connect.php");

$result = $tsaConn->query("select * from events");

while($row=$result->fetch_assoc()){
    echo "<tr>";
    echo "<td id=\"eventId\" scope=\"col\">".$row["id"]."</td>";
    echo "<td scope=\"col\">".$row["eName"]."</td>";
    echo "<td scope=\"col\">".$row["isTeamEvent"]."</td>";
    echo "<td scope=\"col\">".$row["max"]."</td>";
    echo "<td scope=\"col\">".$row["seats"]."</td>";
    
    // register if available and not already signed up
    $reg = false;
    if(isset($_SESSION["id"])){
        $res2 = $tsaConn->query("select * from registration where userID=".$_SESSION["id"]);
    }
        
    while($row2 = $res2->fetch_assoc()){
        if($row2["eventID"] == $row["id"]){
            echo "<td scope=\"col\"> <button type=\"button\" id=\"team\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">
            See Teams
            </button></td>";
            echo "<td scope=\"col\"> Enter Preferred Team ID: <input/> <button class=\"btn btn-primary\">Submit</button> </td>";
            $reg = true;
        }
    }
    
    if(!$reg && $row["seats"] < $row["max"]){
        echo "<td scope=\"col\"> <button type=\"button\" id=\"team\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">
            See Teams
            </button></td>";
        echo "<td scope=\"col\"> 
        <button id=\"register\" class=\"btn btn-primary\"> Register </button>
        </td>";
    }else if(!$reg && $row["seats"] == $row["max"]){
        echo "<td scope=\"col\"> <button type=\"button\" id=\"team\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">
            See Teams
            </button></td>";
        echo "<td scope=\"col\"> full </td>";
    }
    echo "</tr>";
}

?>