<?php
$uri = $_GET['uri'];

// echo "$folder1/$folder2/$folder3/$file-$cat-$item";
require(__DIR__.'/smarty/libs/Smarty.class.php');
$smarty = new Smarty;
//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$file = '/db/db.csv';
$handle = fopen($file, "r");
$code_stock = ""; $codes = "";

$js_custom_vars = array(
	'google_conversion_id' => 970727982,
	'google_custom_params' => 'window.google_tag_params',
	'google_remarketing_only' => true
);

$javascript = array(
	'head' => array(
		'external' => array("https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js", "https://www.kts-web.com/ajax/jquery.min.js"),
		'inline' => array()
	),
	'bottom' => array(
		'external' => array(),
		'inline' => array()
	)
);

$stylesheets = array(
	'external' => array("/assets/css/web_r.css","/assets/css/header_r.css","/assets/css/pc_left_menu.css","/assets/css/sp_menu.css"),
	'inline' => array()
);

// while (($feed_field = fgetcsv($handle, 0, "\t")) !== false) 
// {
//     $codes .= $feed_field[0].",";
//     $code_stock .= " WHEN ".$feed_field[0]." THEN ".$feed_field[1];
// }

// fclose($handle);

// if($uri == '' || $uri == 'index.html'){

// 	$smarty->assign(array(
// 		'stylesheets' => $stylesheets,
// 		'javascript' => $javascript,
// 		'js_custom_vars' => $js_custom_vars
// 	));

// 	$smarty->display('index.tpl');
// }

echo $uri;