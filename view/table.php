	<?php 
	include_once("model/model.class.php");
	$answer = Data::getProducts('products');
	?>

	<table class="table table-stripped table-responsive">
		<thead>
			<tr>
				<th>Code</th>
				<th>Product</th>
				<th>Category</th>
				<th>Price (USD)</th>
				<th>In Stock</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody id="tableResult">
			<?php foreach ($answer as $product => $item) { ?>
			<tr>
				<td><?php echo $item["code"] ?></td>
				<td><?php echo $item["name_product"] ?></td>
				<td><?php echo $item["cat_product"] ?></td>
				<td><?php echo $item["price"] ?></td>
				<td><?php echo $item["quant"] ?></td>
				<td><a href="?a=update&code=<?php echo $item["code"] ?>" class="label label-warning">Edit</a></td>
				<td><a href="?a=delete&code=<?php echo $item["code"] ?>" class="label label-danger" id="submitDelete">Delete</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>