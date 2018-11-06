<?php
add_action('basic_func','basic_setup_hook');
function basic_setup_hook(){
	echo "Amra hook banabo";
}
add_action('header_part','header_func',10,2);
function header_func($first,$second){
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Document</title>
	</head>
	<body>
	<p><?php do_action('basic_func');?></p>
	<?php echo $first.$second; ?>
	</body>
	</html>
	<?php
}
add_action('header_part','dekhi_ki_hoy',9);
function dekhi_ki_hoy(){
	echo "Kisu Ekta";
}
add_filter('test','change_korbo');
function change_korbo(){
	return "Something";
}
?>