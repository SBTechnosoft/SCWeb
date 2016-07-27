<?php
function removecatData($conn,$id,$cur_date)
{
	$sqlremove="update `category_mst` set deleted_at='".$cur_date."' where cat_id='".$id."'";
	return $conn -> insertQuery($sqlremove);
}

?>