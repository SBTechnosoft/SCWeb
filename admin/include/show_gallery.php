<?php
		
									$rowgallery=latestGallery($conn);
									$countgallery=count($rowgallery);
									for($i=0;$i<$countgallery;$i++)
									{ ?>

		<tr>
			<td> <img src="<?php echo DIR_GALLERY.$rowgallery[$i]['gallary_img_name'];?>" style="height:100px;width:100px;"</td>
			
			<td><input type="checkbox" name="chkIsDisplayed" <?php if($rowgallery[$i]['is_display']==0){?>checked="checked"<?php } ?>onclick="isDisplay(<?php echo $rowgallery[$i]['gallery_id']?>,<?php echo $rowgallery[$i]['is_display'] ?>)"/></td>
							
			<td><a onclick="editCategory('<?php echo $rowgallery[$i]['gallery_id'];?>','<?php echo $rowgallery[$i]['gallary_img_name'];?>','<?php echo $rowgallery[$i]['is_display'];?>')" name="<?php echo $rowgallery[$i]['gallery_id'];?>"><i class="fa fa-pencil fa-fw"></i></a></td>
				 
			<td><a onClick="return confirm('are you sure you want to delete this?');" href="<?php echo DIR_INCLUDES.'gallery_post.php';?>?id=<?php echo $rowgallery[$i]['gallery_id'];?>&action=remove"><i class="fa fa-trash-o"></i></a></td>
			</tr>
		<?php
			
		}						
		?>