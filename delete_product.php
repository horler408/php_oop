<?php 
    if($_POST) {
        include_once "./config/database.php";
        include_once "./objects/product.php";

        // Database connection
        $database = new Database();
        $db = $database->getConnection();

        // Product object
        $product = new Product($db);

        // To set product id to be deleted
        $product->id = $_POST['object_id'];

        // To delete the product
        if($product->delete()) {
            echo "<div>Product was deleted successfully!</div>";
        }else {
            echo "<div>Unable to delete product</div>";
        }
    }
?>