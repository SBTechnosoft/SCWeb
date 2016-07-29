<?php	               
		if(isset($_GET['tagid']))
			{
				$rowMainBlogPost1=singletagblog($conn,$_GET['tagid']);
				$counttag=count($rowMainBlogPost1);
				for($i=0;$i<$counttag;$i++)
					{ 
	?>
	
		  <article class="post media-image   format-image animated" data-animation="bounceInUp">
					<div class="entry-media">
						<div class="box-date-post"> <span class="date-1"><?php echo date('d',strtotime($rowMainBlogPost1[$i]['created_at'])); ?> </span> <span class="date-2"> <?php echo date('M',strtotime($rowMainBlogPost1[$i]['created_at'])); ?></span> </div>
						<div class="entry-thumbnail">
							<div class="post-type-media type-image"><i class="icomoon-quote-left"></i></div>
							<a href="blog_detail.php?id=<?php echo $rowMainBlogPost1[$i]['blog_post_id'];?>">
								<div class="blockquote">
									<p style="line-height:20px;height:10px;overflow:hidden;"><?php echo $rowMainBlogPost1[$i]['blog_post_desc']; ?></p>
									<span class="blockquote-autor"><?php echo $rowMainBlogPost1[$i]['blog_post_name']; ?></span> 
								</div>
							</a> 
						</div>
					</div>
          </article>
					<?php }
					
			}
 else if(isset($_GET['catid']))
			{
				
				$rowMainBlogCat=singleCatblog($conn,$_GET['catid']);
				$countcat=count($rowMainBlogCat);
				for($i=0;$i<$countcat;$i++)
					{ 
				?>
				
				<article class="post media-image   format-image animated" data-animation="bounceInUp">
					<div class="entry-media">
						<div class="box-date-post"> <span class="date-1"><?php echo date('d',strtotime($rowMainBlogCat[$i]['created_at'])); ?> </span> <span class="date-2"> <?php echo date('M',strtotime($rowMainBlogCat[$i]['created_at'])); ?></span> </div>
						<div class="entry-thumbnail">
							<div class="post-type-media type-image"><i class="icomoon-quote-left"></i></div>
							<a href="blog_detail.php?id=<?php echo $rowMainBlogCat[$i]['blog_post_id'];?>">
								<div class="blockquote">
									<p style="line-height:20px;height:10px;overflow:hidden;"><?php echo $rowMainBlogCat[$i]['blog_post_desc']; ?></p>
									<span class="blockquote-autor"><?php echo $rowMainBlogCat[$i]['blog_post_name']; ?></span> 
								</div>
							</a> 
						</div>
					</div>
          </article>
<?php
					}
			}
else
{
   $rowMainBlogPost=getBlogPost($conn);
	 $count=count($rowMainBlogPost);
	for($i=0;$i<$count;$i++)
	{ 
?>
   
		  <article class="post media-image   format-image animated" data-animation="bounceInUp">
					<div class="entry-media">
						<div class="box-date-post"> <span class="date-1"><?php echo date('d',strtotime($rowMainBlogPost[$i]['created_at'])); ?> </span> <span class="date-2"> <?php echo date('M',strtotime($rowMainBlogPost[$i]['created_at'])); ?></span> </div>
						<div class="entry-thumbnail">
							<div class="post-type-media type-image"><i class="icomoon-quote-left"></i></div>
							<a href="blog_detail.php?id=<?php echo $rowMainBlogPost[$i]['blog_post_id'];?>">
								<div class="blockquote">
									<p style="line-height:20px;height:80px;overflow:hidden;"><?php echo $rowMainBlogPost[$i]['blog_post_desc']; ?></p>
									<span class="blockquote-autor"><?php echo $rowMainBlogPost[$i]['blog_post_name']; ?></span> 
								</div>
							</a> 
						</div>
					</div>
          </article>
<?php } 
}?>