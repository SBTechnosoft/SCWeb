<?php
		$resultArray= getSelectComp($conn);
		$count = count($resultArray);
		$inc=1;
		for($i=0;$i<$count;$i++)
		{
?>
		<tr>
			<td> <?php echo $resultArray[$i]['company_name'] ;?></td>
			<td><a onclick="editCompany('<?php echo $resultArray[$i]['company_id'];?>','<?php echo $resultArray[$i]['company_name'] ?>')"><i class="fa fa-pencil fa-fw"></i></a></td>
			<td><a onclick="removeComp('<?php echo $resultArray[$i]['company_id'];?>','<?php echo $resultArray[$i]['company_name'] ?>')"><i class="fa fa-trash-o"></a></td>
			</tr>
		<?php
			$inc++;
		}						
		?>