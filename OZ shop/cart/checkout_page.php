<?php
include('../db/connect.php');
session_start();

if($_SESSION['user_logged_in_status'] == true){
    $total= count($_SESSION['product_id_array']);
    $product_id=0;
    $product_title="**";
    $product_price=0;
    $product_image="";
    $product_temp_id =0;
    $no_of_products=0;
    $total_price=0;
    echo "<--product_id";
    echo "<span>";
    echo " ----------*product_title";
    echo "<span>";
    echo "----------*product_price";
    echo "<span>";
    echo "----------*no_of_product-";
    echo "<span>";
    echo "----------*Total Price-->";
    echo "<br>";
    for($count = 1; $count <= $total; $count++){
    //assinging product id from session variable array one by one
        $product_id = (int)$_SESSION['product_id_array'][$count-1];
        $no_of_products=(int)$_SESSION['product_number_respective_array'][$count-1];
        $get_product_details_query="select * from temp_product where product_id = '$product_id'";
        $result=mysqli_query($con,$get_product_details_query);
        if($result){
          //  echo $product_id;
            while($row=mysqli_fetch_assoc($result)){
               // echo "while loop";
                $product_temp_id =(int)$row['product_id'];
                $product_title=$row['product_title'];
                $product_image=$row['product_image'];
                $product_price=(int)$row['product_price'];
                $total_price=$no_of_products*$product_price;
            }
        }
        echo $product_id;
        echo "<span>";
        echo " ----------".$product_title;
        echo "<span>";
        echo " -------------------".$product_price;
        echo "<span>";
        echo " ----------".$no_of_products;
        echo "<span>";
        echo "----------Rs.".$total_price;
        echo "<br>";
    
      }
}
else{

    // user logged out so take him to login page first before checking out and redirec
    //back to checkout page
    echo "please login first";
}


  ?>
