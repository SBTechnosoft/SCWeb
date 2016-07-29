<?php
									$rowevent=latestevent($conn);
									$countevent=count($rowevent);
									for($i=0;$i<$countevent;$i++)
									{ 
								
										
								?>
							
							<tr>
							<td><?php echo $rowevent[$i]['event_name'];?></td>
							
							
							<td><img src="<?php echo DIR_EVENT.$rowevent[$i]['event_logo_dtl'];?>" style="height:100px;width:100px;"/></td>
							<td><img src="<?php echo DIR_EVENTBANER.$rowevent[$i]['event_baner_dtl'];?>" style="height:100px;width:100px;"/></td>
							<td><?php echo $rowevent[$i]['event_desc'];?></td>
							
							<td><input type="checkbox" name="chkIsDisplayed" <?php if($rowevent[$i]['is_display']==0){?>checked="checked"<?php } ?>onclick="isDisplay(<?php echo $rowevent[$i]['event_id']?>,<?php echo $rowevent[$i]['is_display'] ?>)"/></td>
							
							<td><a onclick="editevent('<?php echo $rowevent[$i]['event_id'];?>','<?php echo $rowevent[$i]['event_name'];?>','<?php echo $rowevent[$i]['start_date_time'];?>','<?php echo $rowevent[$i]['end_date_time'];?>','<?php echo $rowevent[$i]['event_logo_dtl']; ?>','<?php echo $rowevent[$i]['event_baner_dtl']; ?>','<?php echo $rowevent[$i]['event_desc']; ?>','<?php echo $rowevent[$i]['event_place'];?>','<?php echo $rowevent[$i]['is_display'];?>','<?php echo $rowevent[$i]['org_name'];?>','<?php echo $rowevent[$i]['org_logo_dtl'];?>','<?php echo $rowevent[$i]['org_contact'];?>','<?php echo $rowevent[$i]['org_website'];?>','<?php echo $rowevent[$i]['spon_name'];?>','<?php echo $rowevent[$i]['spon_logo'];?>','<?php echo $rowevent[$i]['spon_no'];?>','<?php echo $rowevent[$i]['spon_website'];?>','<?php 
							
										$rowevent1=latestevent1($conn);
										$countevent1=count($rowevent1);
										for($j=0;$j<$countevent1;$j++)
										{ 
										echo $rowevent1[$j]['event_gallery_dtl']; }?>')" ><i class="fa fa-pencil fa-fw"></a></td>
				 
							<td><a onClick="return confirm('are you sure you want to delete this?');" href="<?php echo DIR_INCLUDES.'event_post.php';?>?id=<?php echo $rowevent[$i]['event_id'];?>&action=remove"><i class="fa fa-trash-o"></i></a></td>
							</tr>
							
							
										<?php 
									}?>		