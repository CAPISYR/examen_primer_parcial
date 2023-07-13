<?php
include("connection.php");
$con = connection();

$id = null;
$name = $_POST['name'];
$description = $_POST['description'];
$amount= $_POST['amount'];
$price = $_POST['price'];


$sql = "INSERT INTO users VALUES('$id','$name','$description','$amount','$price',)";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}
?>