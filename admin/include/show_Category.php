<?php
	 	
		$resultArray= getSelectCat($conn);
		$count = count($resultArray);
		$inc=1;
		for($i=0;$i<$count;$i++)
		{
		?>
		
			<tr>
			
				<td> <?php echo $resultArray[$i]['cat_name'] ;?></td>
				
				<td><a onclick="editCategory('<?php echo $resultArray[$i]['cat_id'];?>','<?php echo $resultArray[$i]['cat_name'] ?>')"><i class="fa fa-pencil fa-fw"></i></a></td>
				<td><a onclick="removeCat('<?php echo $resultArray[$i]['cat_id'];?>','<?php echo $resultArray[$i]['cat_name'] ?>')"><i class="fa fa-trash-o"></a></td>
								
				
			</tr>
			<?php
			$inc++;
		}						
		?>