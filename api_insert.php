<?php


header('Content-Type:application/json');
header('Acess-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-with');

include "config.php";

$data=json_decode(file_get_contents("php://input"),true);

$product_sr=$data['1sr'];
$product_name=$data['1pr'];

#For Inserting the row
$sql="INSERT INTO `test`.`product`(`sr.`,`Product`)VALUES('$product_sr','$product_name');";
    if(mysqli_query($conn, $sql)){
        echo json_encode(array('message'=>'Product Record Inserted','Status'=>true));
    }
    else{
        echo json_encode(array('message'=>'Product Record Not Inserted','Status'=>false));
    }
?>