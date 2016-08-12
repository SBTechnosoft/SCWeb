<?php

									$rowservices=getSelectservices($conn);
									$countservice=count($rowservices);
									for($i=0;$i<$countservice;$i++)
									{ ?>
		
		
			<tr>
			
				<td><?php echo $rowservices[$i]['services_name'];?></td>
				<td><?php echo $rowservices[$i]['services_price'];?></td>
				<td>
					<?php  
						$json = json_decode($rowservices[$i]['services_detail']);
						$cnt =count($json);
						$inc_cnt=1;
						$desc_array = array();
						for($j=0;$j<$cnt;$j++)
						{
							echo $inc_cnt.") ".$json[$j]."<br>";
							array_push($desc_array,$json[$j]."#");
							$inc_cnt++;
						}
					$desc  = implode($desc_array);
					?>
				</td>
				<td><input type="checkbox" name="chkIsDisplayed" <?php if($rowservices[$i]['is_display']==0){?>checked="checked"<?php } ?>onclick="isDisplay(<?php echo $rowservices[$i]['services_id']?>,<?php echo $rowservices[$i]['is_display'] ?>)"/></td>
				<td><a onclick="editServices('<?php echo $rowservices[$i]['services_id'];?>','<?php echo $rowservices[$i]['services_name'];?>','<?php echo $rowservices[$i]['services_price']; ?>','<?php echo $cnt;?>','<?php echo $desc;?>','<?php echo $rowservices[$i]['is_display'];?>')" ><i class="fa fa-pencil fa-fw"></i></a></td>
				<td><a onclick="removeservice('<?php echo $rowservices[$i]['services_id'];?>')"><i class="fa fa-trash-o"></i></a></td>
								
				
			</tr>
	<?php 	
									}?>		