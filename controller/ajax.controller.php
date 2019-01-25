<?php 

	if (isset($_POST['route'])){

		switch($_POST['route']){
			case 'insertData':
				include('../model/model.class.php');
				$html = '';
				if (isset($_POST["name_product"], $_POST["cat_product"], $_POST["price"], $_POST["quant"])) {
					$dataInf = array(
						'code' => time(),
						'name_product' => $_POST['name_product'],
						'cat_product' => $_POST['cat_product'],
						'price' => $_POST['price'],
						'quant' => $_POST['quant']
					);
					$answer = Data::insertProducts($dataInf, 'products');
					if($answer == "success"){
						$html = "Success!";
					} else {
						$html = "Error!";
					}
				} else {
					$html = 'Nothing';
				}
				echo $html;
			break;
			case 'updateData':
				include('../model/model.class.php');
				$html = '';
				if (isset($_POST["code"], $_POST["price"], $_POST["quant"])) {
					$dataInf = array(
						'price' => $_POST['price'],
						'quant' => $_POST['quant'],
						'code' => $_POST['code']
					);
					$answer = Data::updateProduct($dataInf, 'products');
					if($answer == "success"){
						$html = "Success!";
					} else {
						$html = "Error!";
					}
				} else {
					$html = 'Nothing';
				}
				echo $html;
			break;
		}
	}

 ?>