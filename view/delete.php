<?php 
			include('model/model.class.php');
				$html = '';
				if (isset($_GET["code"])) {
					$code = $_GET["code"];
					$answer = Data::deleteProduct($code, 'products');
					if($answer == "success"){
						$html = "Success!";
					} else {
						$html = "Error!";
					}
				} else {
					$html = 'Nothing';
				}
				echo 
				'<script language="javascript">alert("'.$html.'");</script>
                <script language="javascript">window.location="index.php?a=table"</script>'; 

 ?>