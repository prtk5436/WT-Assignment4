<?php

header("Content-type: application/json");
require 'MyRestaurantClass.php';
//include 'data.php';

$req=$_GET['req'] ?? null;

if($req)
{
	$jsonData=file_get_contents("RestaurantData.json");
	$menuData=json_decode($jsonData,true)['menu_items'];
	try {
		$restaurantData=new MyRestaurant($menuData);
		
	} catch (Exception $e) {
		echo json_encode([$e->getMessage()]);
		return;
	}
}

switch ($req) {
	case 'all_items':
		echo $restaurantData->getAllMenuitems();
		break;
	case 'sel_menu_item':
		$seleted_menu=$_GET['menu_name'] ?? null;
		echo $restaurantData->getMenuDetails($seleted_menu);
		break;
	
	default:
		echo json_encode(["Invalid User Request"]);
		break;
}
?>