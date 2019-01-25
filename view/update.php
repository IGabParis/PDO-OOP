				<?php 
					include_once("model/model.class.php");
					$code = $_GET['code'];
					$answer = Data::getProduct($code, 'products');
				?>
				<form id="updateData">
					<div class="form-group">
						<label>Name Product</label>
						<input type="text" name="name_product" id="name_product" class="form-control" value="<?php echo $answer['name_product'] ?>" readonly>
					</div>
					<div class="form-group">
						<label>Code Product</label>
						<input type="text" name="code" id="code" class="form-control" value="<?php echo $answer['code'] ?>" readonly>
					</div>
					<div class="form-group">
						<label>Price Product (USD)</label>
						<input type="number" name="price" id="price" value="<?php echo $answer['price'] ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Stock</label>
						<input type="number" name="quant" id="quant" value="<?php echo $answer['quant'] ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<input type="submit" name="submitUpdate" id="submitUpdate" value="Send" class="btn btn-info form-control">
					</div>
				</form>