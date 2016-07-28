<?php
		$resultArray= showBlogCategoryData($conn);
		$count = count($resultArray);
		$inc=1;
		for($i=0;$i<$count;$i++)
		{
?>
		<tr>
			<td> <?php echo $resultArray[$i]['blog_cat_name'] ;?></td>
			<td><?php echo $resultArray[$i]['blog_cat_desc'] ;?></td>
			<td><input type="checkbox" name="chkIsDisplayed" <?php if($resultArray[$i]['is_display']==0){?>checked="checked"<?php } ?>onclick="isDisplay(<?php echo $resultArray[$i]['blog_cat_id']?>,<?php echo $resultArray[$i]['is_display'] ?>)"/></td>
			<td><a onclick="editBlogCategory('<?php echo $resultArray[$i]['blog_cat_id'];?>','<?php echo $resultArray[$i]['blog_cat_name'] ?>','<?php echo $resultArray[$i]['blog_cat_desc'];?>','<?php echo $resultArray[$i]['is_display'];?>')"><i class="fa fa-pencil fa-fw"></i></a></td>
			<td><a onclick="removeblogCat('<?php echo $resultArray[$i]['blog_cat_id'];?>','<?php echo $resultArray[$i]['blog_cat_name'] ?>')"><i class="fa fa-trash-o"></a></td>
			</tr>
		<?php
			$inc++;
		}						
		?>