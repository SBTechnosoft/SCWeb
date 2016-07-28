<?php
		$resultArray= showBlogPostData($conn);
		$resultBlogTags=getBlogTags($conn);
		$totalTag=count($resultBlogTags);
		$count = count($resultArray);
		$inc=1;
		for($i=0;$i<$count;$i++)
		{
			$resultblog=getSelectblogId($conn,$resultArray[$i]['blog_cat_id']);
			$resultBlogTag=getBlogTagsId($conn,$resultArray[$i]['blog_post_id']);
?>
		<tr>
			<td> <?php echo $resultArray[$i]['blog_post_name'] ;?></td>
			<td><?php echo $resultArray[$i]['blog_post_desc'] ;?></td>
			<td> <?php echo $resultblog[0]['blog_cat_name'] ;?></td>
			<td> <?php $temp=1;
				$tagid="";
				for($j=0;$j<count($resultBlogTag);$j++)
				{
					$tagid[]=$resultBlogTag[$j]['blog_tag_id'];
					$resultTagName=getSelecttagId($conn,$resultBlogTag[$j]['blog_tag_id']);
					echo $temp.") ".$resultTagName[0]['blog_tag_name'];
					if(count($resultBlogTag)>1)
					{
						echo "<br/>";
					}
					$temp++;
				}?></td>
			<td><input type="checkbox" name="chkIsDisplayed" <?php if($resultArray[$i]['is_display']==0){?>checked="checked"<?php } ?>onclick="isDisplay(<?php echo $resultArray[$i]['blog_post_id']?>,<?php echo $resultArray[$i]['is_display'] ?>)"/></td>
			<td><a onclick="editBlog('<?php echo $resultArray[$i]['blog_post_id'];?>','<?php echo $resultArray[$i]['blog_post_name'] ?>','<?php echo $resultArray[$i]['blog_post_desc'];?>','<?php echo $resultArray[$i]['blog_cat_id'];?>','<?php echo $resultArray[$i]['is_display'];?>')"><i class="fa fa-pencil fa-fw"></i></a></td>
			<td><a onclick="removeBlog('<?php echo $resultArray[$i]['blog_post_id'];?>')"><i class="fa fa-trash-o"></a></td>
			</tr>
		<?php
			$inc++;
		}						
		?>