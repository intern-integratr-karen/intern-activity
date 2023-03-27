<?php
session_start();
include_once("../connect.php");

    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
 

    if (isset($_POST['submit_product'])) {

        $sql = "INSERT into products (name, quantity, price) VALUES
        ('$name', '$quantity', '$price')";
        $query = $conn->query($sql) or die($conn->error);

        $_SESSION['success']= "Product successfully added";
        header("location: ../product.php");

    }elseif (isset($_POST['update_product'])) {
        $id = $_POST['id'];
        $sql = "UPDATE products set name='$name', quantity='$quantity', price='$price' where id=$id";

        $query = $conn->query($sql) or die($conn->error);
        $_SESSION['success'] = "Product successfully updated";
        header("Location: ../product.php");
    exit();

}

?>