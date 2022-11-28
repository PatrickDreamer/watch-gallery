<?php
    extract($_POST);
    $sql = "update products set product_name='$product_name', overview='$overview', model_no='$model_no', price='$price', image_1='$image_1', image_2='$image_2', image_3='$image_3',image_4='$image_4' where product_id=$product_id";

    try{
        include("dbconnection.php");
        mysqli_query($conn, $sql);
        if(mysqli_affected_rows($conn)===1){
            header("Location:management.php?message='Update successful.'");}
            else{
                header("Location: management.php?message='Not Updated'");
            }
        }
       catch(Exception $e){
        echo $e->getMessag();
    }

?>