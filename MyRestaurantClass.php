<?php

class MyRestaurant{
	private $MymenuList;

	function  __construct(array $MymenuList)
	{
		if(sizeof($MymenuList)>0)
		{
		$this->mList=$MymenuList;
		}
		else
		{
			throw new Exception("Array is Empty");
		}
	}

	
	public function getMenuDetails($seleted_menu)
	{
		$response=["Invalid User Request"];
		
		if($seleted_menu)
		{

			foreach($this->mList as $Newitem){
				
				if(strcmp($seleted_menu,$Newitem["name"])==0)
				{					
					$response=$Newitem;
					break;
				}
			}
		}
		return json_encode($response);
	}


	public function getAllMenuitems()
	{

		$MenuListArray=[];
		foreach($this->mList as $menuitem)
		{
			$MenuListArray[]=array(
				"name"=>$menuitem["name"]
			);
		}
		return json_encode($MenuListArray);
	}
	
}
?>