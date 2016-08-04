<?php
		$resultArray= gettest($conn);
		$count = count($resultArray);
		$inc=1;
		for($i=0;$i<$count;$i++)
		{
?>
		<tr>
			
			<td><?php echo $resultArray[$i]['testimonial_desc'] ;?></td>
			<td><img src="<?php echo DIR_TESTIMONIAL.$resultArray[$i]['testimonial_img'];?>" style="height:100px;width:100px;"/></td>
			<td><input type="checkbox" name="chkIsDisplayed" <?php if($resultArray[$i]['is_display']==0){?>checked="checked"<?php } ?>onclick="isDisplay(<?php echo $resultArray[$i]['testimonial_id']?>,<?php echo $resultArray[$i]['is_display'] ?>)"/></td>
			<td><a onclick="edittest('<?php echo $resultArray[$i]['testimonial_id'];?>','<?php echo $resultArray[$i]['testimonial_desc'];?>','<?php echo $resultArray[$i]['testimonial_img'];?>','<?php echo $resultArray[$i]['is_display'];?>')"><i class="fa fa-pencil fa-fw"></i></a></td>
			<td><a onclick="removetestCat('<?php echo $resultArray[$i]['testimonial_id'];?>')"><i class="fa fa-trash-o"></a></td>
			</tr>
		<?php
			$inc++;
		}						
		?>