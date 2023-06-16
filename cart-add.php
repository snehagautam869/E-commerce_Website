<?php
require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    if($_GET['id']>=1||$_GET['id']<16){
    header('location: products.php');
    }
    elseif($_GET['id']>=16||$_GET['id']<39){
        header('location: productsw.php');
    }
    elseif($_GET['id']>=39||$_GET['id']<59){
        header('location: productstb.php');
    }
    else{
        header('location: productse.php');
    }
}
?>
