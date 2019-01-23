<p>Welcome To PHP</p>

<?php 

function show_products($cat_id, $products_id){
	$products = [
		['cat_id'=>111, 'products_id'=>1, 'name'=>'amit1'],
		['cat_id'=>112, 'products_id'=>2, 'name'=>'amit2'],
		['cat_id'=>113, 'products_id'=>3, 'name'=>'amit3'],
		['cat_id'=>114, 'products_id'=>4, 'name'=>'amit4'],
	
	];
	
	foreach($products as $product){
		if($product['cat_id'] == $cat_id AND $product['products_id'] == $products_id){
			return $product;
		}
	}
	return false;
}

if(isset($_GET['url'])){
	echo '<pre>';
	print_r($_GET);
	$url = $_GET['url'];
	$url = explode('/',$url);
	
	
	if($url[0] == 'show_products'){
		$cat_id = $url[1];
		$products_id = $url[2];
		$product = show_products($cat_id, $products_id);
		if($product){
		echo"<br>Data Found<br>";
		print_r($product);
		}
		else{
			echo "product Not Fount";
		}
	}
	
}
?>
