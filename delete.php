<?php
if ( isset($_GET["id"])) {
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "myshop";
   


    $connection = new mysqli($servername, $username, $password, $database ,3307);

    $sql="DELETE FROM clients WHERE id=$id";
    $connection->query($sql);


}
header("location; /myshop/index.php");
exit;

?>