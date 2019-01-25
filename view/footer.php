	<footer>IGabParis, 2019</footer>
	<script type="text/javascript" src="assets/jquery.js"></script>
	<script type="text/javascript" src="assets/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/main.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#submitInsert').click(function(e){
				e.preventDefault();
				var param = {}
				param.name_product = $("#name_product").val();
				param.cat_product = $("#cat_product").val();
				param.price = $("#price").val();
				param.quant = $("#quant").val();
				alert("Passing values");
				$.post("controller/ajax.controller.php", { route:'insertData', name_product: param.name_product, cat_product: param.cat_product, price: param.price, quant: param.quant}, function(param){
				    alert(param);
				    window.location = "index.php?a=table"
				});
			});
		    $('#submitUpdate').click(function(e){
				e.preventDefault();
				var par = {}
				par.code = $("#code").val();
				par.price = $("#price").val();
				par.quant = $("#quant").val();
				alert("Passing Values");
			    $.post("controller/ajax.controller.php", { route:'updateData', price: par.price, quant: par.quant, code: par.code}, function(par){
			        alert(par);
				    window.location = "index.php?a=table"
			    });
			});
			$('#submitDelete').click(function(e){
				var agree=confirm("You sure?");
	            if (agree)
	              	return true;
	            else
	               	return false;
	        });
		});
	</script>