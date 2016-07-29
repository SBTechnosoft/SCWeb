<?php

function UpdateCategoryData($conn,$cat_name,$parent_cat_name,$cur_date,$cat_id)
{
	$sqlUpdate="update category_mst set cat_name='".$cat_name."',parent_cat_id='".$parent_cat_name."',updated_at='".$cur_date."' where cat_id='".$cat_id."'";
	return $conn -> insertQuery($sqlUpdate);

}
//update company data
function UpdateCompanyData($conn,$company_name,$cur_date,$comp_id)
{
	$sqlUpdate="update company_mst set company_name='".$company_name."',updated_at='".$cur_date."' where company_id='".$comp_id."'";
	return $conn -> insertQuery($sqlUpdate);

}
//Update product data
function UpdateProductData($conn,$prod_name,$prod_desc,$prod_color,$prod_size,$prod_prize,$cat_id,$company_id,$cur_date,$prod_id)
{
	$sqlUpdate="update product_mst set
	prod_name='".$prod_name."',
	prod_desc='".$prod_desc."',
	prod_color='".$prod_color."',
	prod_size='".$prod_size."',
	prod_prize='".$prod_prize."',
	cat_id='".$cat_id."',
	company_id='".$company_id."',
	updated_at='".$cur_date."' where prod_id='".$prod_id."'";
	return $conn -> insertQuery($sqlUpdate);
}

function UpdateTechnologyData($conn,$prod_tech_name,$prod_tech_desc,$prod_id)
{
	$sqlUpdate="update product_technology_dtl set
	prod_tech_name='".$prod_tech_name."',
	prod_tech_desc='".$prod_tech_desc."'
	where prod_id='".$prod_id."'";
	return $conn -> insertQuery($sqlUpdate);
	
}

function UpdateSpecData($conn,$prod_spec_frame,$prod_spec_travel,$prod_spec_fork,$prod_spec_rear_shock,$prod_spec_remote_system,$prod_spec_headset,$prod_spec_rear_drailleur,$prod_spec_front_drailleur,$prod_spec_shifters,$prod_spec_brakes,$prod_spec_crankset,$prod_spec_bb_set,$prod_spec_handelbar,$prod_spec_hstem,$prod_spec_seat_post,$prod_spec_seat,$prod_spec_hub_front,$prod_spec_hub_rear,$prod_spec_chain,$prod_spec_cassets,$prod_spec_spokes,$prod_spec_rims,$prod_spec_tires,$prod_spec_weight,$prod_id)
{
	$sqlUpdate="update prod_spec_dtl set
	prod_spec_frame='".$prod_spec_frame."',
	prod_spec_travel='".$prod_spec_travel."',
	prod_spec_fork='".$prod_spec_fork."',
	prod_spec_rear_shock='".$prod_spec_rear_shock."',
	prod_spec_remote_system='".$prod_spec_remote_system."',
	prod_spec_headset='".$prod_spec_headset."',
	prod_spec_rear_drailleur='".$prod_spec_rear_drailleur."',
	prod_spec_front_drailleur='".$prod_spec_front_drailleur."',
	prod_spec_shifters='".$prod_spec_shifters."',
	prod_spec_brakes='".$prod_spec_brakes."',
	prod_spec_crankset='".$prod_spec_crankset."',
	prod_spec_bb_set='".$prod_spec_bb_set."',
	prod_spec_handelbar='".$prod_spec_handelbar."',
	prod_spec_hstem='".$prod_spec_hstem."',
	prod_spec_seat_post='".$prod_spec_seat_post."',
	prod_spec_seat='".$prod_spec_seat."',
	prod_spec_hub_front='".$prod_spec_hub_front."',
	prod_spec_hub_rear='".$prod_spec_hub_rear."',
	prod_spec_chain='".$prod_spec_chain."',
	prod_spec_cassets='".$prod_spec_cassets."',
	prod_spec_spokes='".$prod_spec_spokes."',
	prod_spec_rims='".$prod_spec_rims."',
	prod_spec_tires='".$prod_spec_tires."',
	prod_spec_weight='".$prod_spec_weight."'
	where prod_id='".$prod_id."'";
	return $conn -> insertQuery($sqlUpdate);
	
}

//update blog category data
	function UpdateBlogCategoryData($conn,$catName,$desc,$is_display,$cur_date,$id)
{
	 $sqlUpdate="update `blog_category_mst` set
	blog_cat_name='".$catName."',
	blog_cat_desc='".$desc."',
	is_display='".$is_display."',
	updated_at='".$cur_date."' where blog_cat_id='".$id."'";
	return $conn -> insertQuery($sqlUpdate);
}
//Update Blog Category Display
function UpdateBlogCategoryDisplay($conn,$is_display,$id,$cur_date)
{
	$sqlUpdate="update `blog_category_mst` set
	is_display='".$is_display."',
	updated_at='".$cur_date."' where blog_cat_id='".$id."'";
	return $conn -> insertQuery($sqlUpdate);
}

//update tag display
function UpdateTagDisplay($conn,$is_display,$id,$cur_date)
{
	 $sqlUpdate="update `blog_tag_mst` set
	is_display='".$is_display."',
	updated_at='".$cur_date."' where blog_tag_id='".$id."'";
	return $conn -> insertQuery($sqlUpdate);
}

//update tag data
function UpdateTagData($conn,$catName,$desc,$is_display,$cur_date,$id)
{
	 $sqlUpdate="update `blog_tag_mst` set
	blog_tag_name='".$catName."',
	blog_tag_desc='".$desc."',
	is_display='".$is_display."',
	updated_at='".$cur_date."' where blog_tag_id='".$id."'";
	return $conn -> insertQuery($sqlUpdate);
}
//update blog post data
	
	function UpdateBlogPostData($conn,$catName,$desc,$blog_cat_id,$is_display,$cur_date,$id)
{
	 $sqlUpdate="update `blog_post` set
	blog_post_name='".$catName."',
	blog_post_desc='".$desc."',
	blog_cat_id='".$blog_cat_id."',
	is_display='".$is_display."',
	update_at='".$cur_date."' where blog_post_id='".$id."'";
	return $conn -> insertQuery($sqlUpdate);
}

//update blog post display
function UpdateBlogPostDisplay($conn,$is_display,$id,$cur_date)
{
	 $sqlUpdate="update `blog_post` set
	is_display='".$is_display."',
	update_at='".$cur_date."' where blog_post_id='".$id."'";
	return $conn -> insertQuery($sqlUpdate);
}

//update Gallerydata
function updateGalleryMstData($conn,$gallary_img_name,$is_display,$id)
{
	 $sqlUpdate="update gallery_mst set	gallary_img_name='".$gallary_img_name."',is_display='".$is_display."' where gallery_id='".$id."'";
	return $conn -> insertQuery($sqlUpdate);
}
?>