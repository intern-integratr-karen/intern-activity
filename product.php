<?php include('header.php')?>

 <div class="container">
 
 <table class="table table-dark">
 <thead class="table-info">
 <tr>
 <th scope="col">ID</th>
 <th scope="col">Name</th>
 <th scope="col">Quantity</th>
 <th scope="col">Price</th>
 <th scope="col">Actions</th>
 </tr>
 </thead>
 </div>

 <tbody>
 <?php
 $query= $conn->query("SELECT * FROM products");
 while ($products = $query->fetch_assoc()) {
 $id= $products['id'];

echo "<tr>
<td>" . $products['id'] . "</td>
<td>" . $products['name'] . "</td>
<td>" . $products['quantity'] . "</td>
<td>" . $products['price'] . "</td>
<td><a href='product/update.php?id=$id' class='btn btn-outline-primary'>Update</a>&nbsp;
<a href='product/delete.php?id=$id' class='btn btn-outline-danger' onclick='return confirm(\"Are you sure you want to delete this record?\")'>Delete</a>
</td>

 </tr>";

 }
 $conn->close();

 ?>
 </table>
 </tbody>
 <a class="btn btn-outline-dark" href="http://localhost/Activity/product/add.php">Add product</a>
 </div>
 
<?php include('footer.php')?>

