<?php

header('Content-Type:application/json');
header('Acess-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:Post');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-with');

include "config.php";

$data=json_decode(file_get_contents("php://input"),true);

$product_sr=$data['1sr'];

#For Deleting the row
$sql="DELETE FROM `test`.`product` WHERE 'sr.'='$product_sr'";
    if(mysqli_query($conn, $sql)){
        echo json_encode(array('message'=>'Product Record Deleted','Status'=>true));
    }
    else{
        echo json_encode(array('message'=>'Product Record Not Deleted','Status'=>false));
    }
?>