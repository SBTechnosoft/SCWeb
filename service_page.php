<?php
					
if(isset($_GET['serId']))
{
   $rowMainServ=getserviceId($conn,$_GET['serId']);
	 $count=count($rowMainServ);
	for($i=0;$i<$count;$i++)
	{ 
?>
          <article class="post media-image   format-image animated" data-animation="bounceInUp">
            
            <div class="entry-main">
              <h3 class="entry-title"> <?php echo $rowMainServ[$i]['services_name']; ?></h3>
              <div class="entry-content">
                <ul class="category-list unstyled clearfix">
					<?php  
						$json1 = json_decode($rowMainServ[$i]['services_detail']);
						$cnt1 =count($json1);
						for($j=0;$j<$cnt1;$j++)
						{
					?>
					<li>
					<?php
						echo $json1[$j]."<br>";
					?>
					</li>
					<?php }?>
			     </ul>
			   </div>
			   <div class="price-box"> 
				 <h4>Price:</h4><span class="price-regular">RS.<?php echo $rowMainServ[$i]['services_price'];?></span>
			   </div>
			</div>
          </article>
<?php }
}
					
else
{
   $rowMainServ=getservice($conn);
	 $count=count($rowMainServ);
	for($i=0;$i<$count;$i++)
	{ 
?>
          <article class="post media-image   format-image animated" data-animation="bounceInUp">
            
            <div class="entry-main">
              <h3 class="entry-title"> <?php echo $rowMainServ[$i]['services_name']; ?></h3>
              <div class="entry-content">
                <ul class="category-list unstyled clearfix">
					<?php  
						$json1 = json_decode($rowMainServ[$i]['services_detail']);
						$cnt1 =count($json1);
						for($j=0;$j<$cnt1;$j++)
						{
					?>
					<li>
					<?php
						echo $json1[$j]."<br>";
					?>
					</li>
					<?php }?>
			     </ul>
			   </div>
			   <div class="price-box"> 
				 <h4>Price:</h4><span class="price-regular">RS.<?php echo $rowMainServ[$i]['services_price'];?></span>
			   </div>
			</div>
          </article>
<?php }
}
?>    