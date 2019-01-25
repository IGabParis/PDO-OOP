	<div class="container">
		<div class="panel panel-style col-lg-12 col-xs-12">
			<div class="panel-heading">
				<h2>Products</h2>
			</div>
			<div class="panel-body col-lg-12 col-xs-12">
				<h4 class="col-lg-6 col-xs-12">Home</h4>
				<span><a href="?a=create" class="btn btn-success col-lg-3 col-xs-6">Create Product</a></span>
				<span><a href="?a=table" class="btn btn-info col-lg-3 col-xs-6">List Product</a></span>
				<hr>
				<?php
				$action = isset($_GET['a']) ? strtolower($_GET['a']) : 'table';
				include_once('view/'.$action.'.php');
				?>
			</div>
		</div>
	</div>