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
//update gallary  display
function UpdateGallery($conn,$is_display,$id)
{
	 $sqlUpdate="update `gallery_mst` set
	is_display='".$is_display."' where gallery_id='".$id."'";
	return $conn -> insertQuery($sqlUpdate);
}
//update services data
function UpdateServicesData($conn,$services_name,$services_price,$desc,$is_display,$cur_date,$id)
{
	 $sqlUpdate="update `services_dtl` set
	services_name='".$services_name."',
	services_price='".$services_price."',
	services_detail='".$desc."',
	is_display='".$is_display."',
	update_at='".$cur_date."' where services_id='".$id."'";
	return $conn -> insertQuery($sqlUpdate);
}
//update services display
function UpdateservicesDisplay($conn,$is_display,$id,$cur_date)
{
	 $sqlUpdate="update `services_dtl` set
	is_display='".$is_display."',
	update_at='".$cur_date."'  where services_id='".$id."'";
	return $conn -> insertQuery($sqlUpdate);
}

//update event  display
function UpdateventDisplay($conn,$is_display,$id,$cur_date)
{
	 $sqlUpdate="update `event_mst` set
	is_display='".$is_display."',
	update_at='".$cur_date."' where event_id='".$id."'";
	return $conn -> insertQuery($sqlUpdate);
}
//update event data
function UpdateEventData($conn,$event_name,$start_date,$end_date,$event_desc,$event_place,$is_display,$cur_date,$id)
{
	 $sqlUpdate="update `event_mst` set
	event_name='".$event_name."',
	start_date_time='".$start_date."',
	end_date_time='".$end_date."',
	event_desc='".$event_desc."',
	event_place='".$event_place."',
	is_display='".$is_display."',
	update_at='".$cur_date."' where event_id='".$id."'";
	
	return $conn -> insertQuery($sqlUpdate);
}
//update Organizer data
function UpdateOrgData($conn,$org_name,$org_no,$org_website,$id)
{
	 $sqlUpdate="update `event_organizer` set org_name='".$org_name."',org_contact='".$org_no."',org_website='".$org_website."' where event_id='".$id."'";
	return $conn -> insertQuery($sqlUpdate);
}
//update Sponser data
function UpdateSponData($conn,$spon_name,$spon_logo,$spon_no,$spon_website,$id)
{
	 $sqlUpdate="update `event_sponcer` set spon_name='".$spon_name."',spon_logo='".$spon_logo."',spon_no='".$spon_no."',spon_website='".$spon_website."' where event_id='".$id."'";
	return $conn -> insertQuery($sqlUpdate);
}
//update event logo 
function UpdateEventData12($conn,$event_logo_dtl,$cur_date,$id)
{
	 $sqlUpdate="update `event_mst` set
	event_logo_dtl='".$event_logo_dtl."',
	update_at='".$cur_date."' where event_id='".$id."'";
	
	return $conn -> insertQuery($sqlUpdate);
}
//update event banner 
function UpdateEventData13($conn,$event_baner_dtl,$cur_date,$id)
{
	 $sqlUpdate="update `event_mst` set
	event_baner_dtl='".$event_baner_dtl."',
	update_at='".$cur_date."' where event_id='".$id."'";
	
	return $conn -> insertQuery($sqlUpdate);
}
//update organiztion logo
function UpdateOrgData14($conn,$org_logo_dtl,$id)
{
	 $sqlUpdate="update `event_organizer` set
	org_logo_dtl='".$org_logo_dtl."'
	 where event_id='".$id."'";
	
	return $conn -> insertQuery($sqlUpdate);
}
//update sponser logo
function UpdateOrgData15($conn,$spon_logo,$id)
{
	 $sqlUpdate="update `event_sponcer` set
	spon_logo='".$spon_logo."'
	 where event_id='".$id."'";
	
	return $conn -> insertQuery($sqlUpdate);
}
//update gallery data
function UpdateGalleryData1($conn,$event_gallery_dtl,$id)
{
	 $sqlUpdate="update `event_gallery` set
	event_gallery_dtl='".$event_gallery_dtl."'
	 where event_id='".$id."'";
	
	return $conn -> insertQuery($sqlUpdate);
}

//update achive
function UpdateachiveData($conn,$name,$desc,$is_display,$cur_date,$id)
{
	 $sqlUpdate="update `achivement_mst` set achive_name='".$name."',achive_desc='".$desc."',is_display='".$is_display."',update_at='".$cur_date."' where achive_id='".$id."'";
	return $conn -> insertQuery($sqlUpdate);
}
//update achive display
function UpdateachiveDisplay($conn,$is_display,$id,$cur_date)
{
	 $sqlUpdate="update `achivement_mst` set is_display='".$is_display."',update_at='".$cur_date."' where achive_id='".$id."'";
	return $conn -> insertQuery($sqlUpdate);
}
//update achive image
function UpdateAchiveData1($conn,$achive_img,$cur_date,$id)
{
	 $sqlUpdate="update `achivement_mst` set
	achive_img='".$achive_img."',
	update_at='".$cur_date."' where achive_id='".$id."'";
	
	return $conn -> insertQuery($sqlUpdate);
}
//update testimonial
function UpdatetestData($conn,$desc,$is_display,$cur_date,$id)
{
	 $sqlUpdate="update `testimonial_mst` set testimonial_desc='".$desc."',is_display='".$is_display."',update_at='".$cur_date."' where testimonial_id='".$id."'";
	return $conn -> insertQuery($sqlUpdate);
}
//update testimonial display
function UpdatetestDisplay($conn,$is_display,$id,$cur_date)
{
	 $sqlUpdate="update `testimonial_mst` set is_display='".$is_display."',update_at='".$cur_date."' where testimonial_id='".$id."'";
	return $conn -> insertQuery($sqlUpdate);
}
//update testimonial image
function UpdatetestData1($conn,$test_img,$cur_date,$id)
{
	 $sqlUpdate="update `testimonial_mst` set
	testimonial_img='".$achive_img."',
	update_at='".$cur_date."' where testimonial_id='".$id."'";
	
	return $conn -> insertQuery($sqlUpdate);
}

?>