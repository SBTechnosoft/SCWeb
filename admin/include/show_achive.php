<?php
		$resultArray= getachive($conn);
		$count = count($resultArray);
		$inc=1;
		for($i=0;$i<$count;$i++)
		{
?>
		<tr>
			<td> <?php echo $resultArray[$i]['achive_name'] ;?></td>
			<td><?php echo $resultArray[$i]['achive_desc'] ;?></td>
			<td><img src="<?php echo DIR_ACHIVEMENT.$resultArray[$i]['achive_img'];?>" style="height:100px;width:100px;"/></td>
			<td><input type="checkbox" name="chkIsDisplayed" <?php if($resultArray[$i]['is_display']==0){?>checked="checked"<?php } ?>onclick="isDisplay(<?php echo $resultArray[$i]['achive_id']?>,<?php echo $resultArray[$i]['is_display'] ?>)"/></td>
			<td><a onclick="editachive('<?php echo $resultArray[$i]['achive_id'];?>','<?php echo $resultArray[$i]['achive_name'] ?>','<?php echo $resultArray[$i]['achive_desc'];?>','<?php echo $resultArray[$i]['achive_img'];?>','<?php echo $resultArray[$i]['is_display'];?>')"><i class="fa fa-pencil fa-fw"></i></a></td>
			<td><a onclick="removeachiv('<?php echo $resultArray[$i]['achive_id'];?>','<?php echo $resultArray[$i]['blog_cat_name'] ?>')"><i class="fa fa-trash-o"></a></td>
			</tr>
		<?php
			$inc++;
		}						
		?>