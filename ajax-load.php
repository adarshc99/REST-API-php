<?php

header("Content-Type: Application/JSON");
header("Access-Control_Allow_origin: *");

$conn = mysqli_connect("localhost","root","","test") or die("Connection Failed");

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
if(mysqli_num_rows($result)>0)
{
    $output = mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($output);
} 
else{
    echo json_encode(array("message"=>"No record found","status"=>false));
}

mysqli_close($conn);
?>
