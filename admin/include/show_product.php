<?php
	 	
		$resultArray= getProduct($conn);
		$count = count($resultArray);
		$inc=1;
		for($i=0;$i<$count;$i++)
		{
			$resultCat=getCategory($conn,$resultArray[$i]['cat_id']);
			$resultCat1=getCompany($conn,$resultArray[$i]['company_id']);
					
		?>
		<form id ="<?php echo $resultArray[$i]['prod_id'];?>" action="index.php?url=PROD" method="post">
			<tr>
				<input type="hidden" id="prod_id" name="prod_id" value="<?php echo $resultArray[$i]['prod_id'];?>"/>
				<td><?php echo $resultArray[$i]['prod_name'] ;?></td>
				<td> <?php echo $resultArray[$i]['prod_desc'] ;?></td>
				<td><button disabled="false" style="background:<?php echo $resultArray[$i]['prod_color'] ;?>; height:20px;width:20px;margin-left:40px;"></button></td>
				<td> <?php echo $resultArray[$i]['prod_size'] ;?></td>
				<td> <?php echo $resultArray[$i]['prod_prize'] ;?></td>
				<td> <?php echo $resultCat[0]['cat_name'] ;?></td>
				<td> <?php echo $resultCat1[0]['company_name'] ;?></td>
				<td>
				<a onclick="document.getElementById('<?php echo $resultArray[$i]['prod_id'];?>').submit();" 
				 name="<?php echo $resultArray[$i]['prod_id'];?>"><i class="fa fa-pencil fa-fw"></i></a></td>
				
				<td><a onclick="removeprod('<?php echo $resultArray[$i]['prod_id'];?>')"><i class="fa fa-trash-o"></i></a></td>
							
				
			</tr>
		</form>	
			<?php
			$inc++;
		}						
		?>
		