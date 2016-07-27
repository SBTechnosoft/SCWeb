<?php


function getSelectCat($conn)
{
	$sqlFetch="SELECT `cat_id`,`parent_cat_id`,`cat_name` FROM `category_mst` where deleted_at='0000-00-00 00:00:00'";
	
	return $conn -> getResultArray($sqlFetch);
}

?>