<?php include ('header.php')?>
<div class="container">
<?php 
 $query = $conn->query("SELECT * FROM orders");
?>
 <table class="table table-bordered table-dark">
 <thead class="table-info">
 <tr>
 <th scope="col">PERSON ID</th>
 <th scope="col">PRODUCT</th>
 <th scope="col">QUANTITY</th>
 <th scope="col">AMOUNT</th>
 <th scope="col">ACTIONS</th>
 </tr>
 </thead>
 <?php
 while ($orders = $query->fetch_assoc()){
 $id= $orders['id'];
 echo "<tr> 
 <td>" .$orders['person_id'] . "</td>
 <td>" .$orders['product_id'] . "</td>
 <td>" .$orders['quantity'] . "</td>
 <td>" .$orders['amount'] . "</td>

 <td> <a href ='order/update.php?id=$id' class='btn
 btn-outline-primary'> Update </a>&nbsp;
 <a href ='order/delete.php?id=$id' class='btn btn-outline-danger' onclick='return confirm(\"Are you want to delete this record?\")'>Delete </a></td>
 </tr>";
}
$conn->close();
 ?>
 </table>
 <a class="btn btn-outline-primary" href="orders/add.php">Add person</a>
</div>
<?php include ('footer.php')?>
