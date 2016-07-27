<?php

function UpdateCategoryData($conn,$cat_name,$parent_cat_name,$cur_date,$cat_id)
{
	$sqlUpdate="update category_mst set cat_name='".$cat_name."',parent_cat_id='".$parent_cat_name."',updated_at='".$cur_date."' where cat_id='".$cat_id."'";
	return $conn -> insertQuery($sqlUpdate);

	}

?>