<?php


//insert category data
function insertCategoryData($conn,$name,$parent_cat_id,$cur_date)
{
	$sqlInsert = "INSERT INTO category_mst (cat_name,parent_cat_id,created_at) VALUES ('".$name."','".$parent_cat_id."','".$cur_date."')";
	$resultArray = $conn -> insertQuery($sqlInsert);
}

//insert company data
function insertCompanyData($conn,$name,$cur_date)
{
	$sqlInsert = "INSERT INTO company_mst (company_name,created_at) VALUES ('".$name."','".$cur_date."')";
	$resultArray = $conn -> insertQuery($sqlInsert);
}
//insert product data
function insertProductData($conn,$prod_name,$prod_desc,$prod_color,$prod_size,$prod_prize,$cat_id,$company_id,$cur_date)
{
	$sqlInsert = "INSERT INTO product_mst (prod_name,prod_desc,prod_color,prod_size,prod_prize,cat_id,company_id,created_at) VALUES ('".$prod_name."','".$prod_desc."','".$prod_color."','".$prod_size."','".$prod_prize."','".$cat_id."','".$company_id."','".$cur_date."')";
	$resultArray = $conn -> insertQuery($sqlInsert);
}
//insert technology data
function insertTechnologyData($conn,$prod_id,$tech_name,$tech_desc)
{
	$sqlInsert = "INSERT INTO product_technology_dtl (prod_id,prod_tech_name,prod_tech_desc) VALUES ('".$prod_id."','".$tech_name."','".$tech_desc."')";
	$resultArray = $conn -> insertQuery($sqlInsert);
}
//insert specs data
function insertSpecsData($conn,$prod_id,$prod_spec_frame,$prod_spec_travel,$prod_spec_fork,$prod_spec_rear_shock,$prod_spec_remote_system,$prod_spec_headset,$prod_spec_rear_drailleur,$prod_spec_front_drailleur,$prod_spec_shifters,$prod_spec_brakes,$prod_spec_crankset,$prod_spec_bb_set,$prod_spec_handelbar,$prod_spec_hstem,$prod_spec_seat_post,$prod_spec_seat,$prod_spec_hub_front,$prod_spec_hub_rear,$prod_spec_chain,$prod_spec_cassets,$prod_spec_spokes,$prod_spec_rims,$prod_spec_tires,$prod_spec_weight)
 {
	 $sqlInsert = "INSERT INTO prod_spec_dtl (prod_id,prod_spec_frame,prod_spec_travel,prod_spec_fork,prod_spec_rear_shock,prod_spec_remote_system,prod_spec_headset, prod_spec_rear_drailleur,prod_spec_front_drailleur,prod_spec_shifters,prod_spec_brakes,prod_spec_crankset,prod_spec_bb_set,prod_spec_handelbar,prod_spec_hstem,prod_spec_seat_post,prod_spec_seat,prod_spec_hub_front,prod_spec_hub_rear,prod_spec_chain,prod_spec_cassets,prod_spec_spokes,prod_spec_rims,prod_spec_tires,prod_spec_weight) VALUES ('".$prod_id."','".$prod_spec_frame."','".$prod_spec_travel."','".$prod_spec_fork."','".$prod_spec_rear_shock."','".$prod_spec_remote_system."','".$prod_spec_headset."','".$prod_spec_rear_drailleur."','".$prod_spec_front_drailleur."','".$prod_spec_shifters."','".$prod_spec_brakes."','".$prod_spec_crankset."','".$prod_spec_bb_set."','".$prod_spec_handelbar."','".$prod_spec_hstem."','".$prod_spec_seat_post."', '".$prod_spec_seat."','".$prod_spec_hub_front."','".$prod_spec_hub_rear."','".$prod_spec_chain."','".$prod_spec_cassets."','".$prod_spec_spokes."','".$prod_spec_rims."','".$prod_spec_tires."','".$prod_spec_weight."')";
	 $resultArray = $conn -> insertQuery($sqlInsert);
	
}
// insert pic data
function insertPic($prod_id,$conn,$new_img)
{
	 $sqlInsert = "INSERT INTO `product_img`(`prod_id`,`prod_img_dtl`) VALUES ('".$prod_id."','".$new_img."')";
	$resultArraypic= $conn -> insertQuery($sqlInsert);
}

//insert blog category data
function insertBlogCategoryData($conn,$blog_name,$blog_desc,$is_display,$cur_date)
{
	
	$sqlInsert = "INSERT INTO blog_category_mst(blog_cat_name,blog_cat_desc,is_display,created_at) VALUES ('".$blog_name."','".$blog_desc."','".$is_display."','".$cur_date."')";
	$resultArray = $conn -> insertQuery($sqlInsert);
	
}
//insert tag data
function insertTagData($conn,$tag_name,$tag_desc,$is_display,$cur_date)
{
	
	$sqlInsert = "INSERT INTO  blog_tag_mst(blog_tag_name,blog_tag_desc,is_display,created_at) VALUES ('".$tag_name."','".$tag_desc."','".$is_display."','".$cur_date."')";
	$resultArray = $conn -> insertQuery($sqlInsert);
	
}
//insert blog post data
function insertblogPostData($conn,$post_name,$post_desc,$blog_cat_id,$is_display,$cur_date)
{
	
	$sqlInsert = "INSERT INTO  blog_post(blog_post_name,blog_post_desc,blog_cat_id,is_display,created_at) VALUES ('".$post_name."','".$post_desc."','".$blog_cat_id."','".$is_display."','".$cur_date."')";
	$resultArray = $conn -> insertQuery($sqlInsert);
	
}

function insertBlogTagsrel($conn,$blog_id,$tagid)
{
	$sqlInsert="insert into blog_real_tag (blog_post_id,blog_tag_id) values('".$blog_id."','".$tagid."')";
	return $conn -> insertQuery($sqlInsert);
}

//insert Gallery data
function insertGalleryMstData($conn,$gallary_img_name,$is_display)
{
	
	$sqlInsert = "INSERT INTO gallery_mst(gallary_img_name,is_display) VALUES ('".$gallary_img_name."','".$is_display."')";
	$resultArray = $conn -> insertQuery($sqlInsert);
	
}
//insert services data
function insertServicesData($conn,$services_name,$services_price,$desc,$is_display,$cur_date)
{
	
	$sqlInsert = "INSERT INTO  services_dtl(services_name,services_price,services_detail,is_display,created_at) VALUES ('".$services_name."','".$services_price."','".$desc."','".$is_display."','".$cur_date."')";
	$resultArray = $conn -> insertQuery($sqlInsert);
	
}

//insert event data
function insertEventData($conn,$event_name,$start_date_time,$end_date_time,$event_logo_dtl,$event_baner_dtl,$event_desc,$event_place,$is_display,$cur_date)
{
	
	$sqlInsert = "INSERT INTO  event_mst(event_name,start_date_time,end_date_time,event_logo_dtl,event_baner_dtl,event_desc,event_place,is_display,created_at) VALUES ('".$event_name."','".$start_date_time."','".$end_date_time."','".$event_logo_dtl."','".$event_baner_dtl."','".$event_desc."','".$event_place."','".$is_display."','".$cur_date."')";
	$resultArray = $conn -> insertQuery($sqlInsert);
	
}


//insert organizer data
function insertOrganizerData($conn,$event_id,$org_name,$org_logo_dtl,$org_no,$org_website)
{
	
	$sqlInsert = "INSERT INTO  event_organizer(event_id,org_name,org_logo_dtl,org_contact,org_website) VALUES ('".$event_id."','".$org_name."','".$org_logo_dtl."','".$org_no."','".$org_website."')";
	$resultArray = $conn -> insertQuery($sqlInsert);
	
}
//insert Event GAllery data
function insertGalleryData($conn,$event_id,$event_gallery_dtl)
{
	
	$sqlInsert = "INSERT INTO event_gallery(event_id,event_gallery_dtl) VALUES ('".$event_id."','".$event_gallery_dtl."')";
	$resultArray = $conn -> insertQuery($sqlInsert);
	
}
//insert event sponser data
function insertsponserData($conn,$event_id,$spon_name,$spon_logo,$spon_no,$spon_website)
{
	
	$sqlInsert = "INSERT INTO event_sponcer(event_id,spon_name,spon_logo,spon_no,spon_website) VALUES ('".$event_id."','".$spon_name."','".$spon_logo."','".$spon_no."','".$spon_website."')";
	$resultArray = $conn -> insertQuery($sqlInsert);
	
}
function insertContactData($conn,$con_dtl,$con_address,$con_phone,$con_email)
{
	$sqlInsert = "INSERT INTO contact_dtl(contact_dtl,contact_address,contact_phone,contact_email) VALUES  ('".$con_dtl."','".$con_address."','".$con_phone."','".$con_email."')";
	$resultArray = $conn -> insertQuery($sqlInsert);
}
//insert achive data
function insertachiveData($conn,$name,$desc,$img,$is_display,$cur_date)
{
	$sqlInsert = "INSERT INTO achivement_mst(achive_name,achive_desc,achive_img,is_display,created_at) VALUES ('".$name."','".$desc."','".$img."','".$is_display."','".$cur_date."')";
	$resultArray = $conn -> insertQuery($sqlInsert);
}
//insert testimonial data
function inserttestData($conn,$desc,$img,$is_display,$cur_date)
{
	$sqlInsert = "INSERT INTO testimonial_mst(testimonial_desc,testimonial_img,is_display,created_at) VALUES ('".$desc."','".$img."','".$is_display."','".$cur_date."')";
	$resultArray = $conn -> insertQuery($sqlInsert);
}
?>