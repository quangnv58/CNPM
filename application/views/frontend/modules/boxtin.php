<div class="thanhtinmoi">
	<h4>Tin mới nhất</h4></div></br>
</div>
<div class="boxtin">
			<?php 
				$result = count($post);
				if($result>=4):
			?>
			<div>
				<div class="col-md-3"> 
			        <a href="<?php echo "http://localhost/CNPM/hientin/show/".$post[0]['idpost'] ?>">
			        <img src="public/frontend/images/tinvan1.jpg" class="img-thumbnail" alt="moinhat1" width="100%"/>
			        </a>
					<div style="text-align:center">
					<a href="<?php echo "http://localhost/CNPM/hientin/show/".$post[0]['idpost'] ?>"><?php echo $post[0]["title"];?></a>
					</div>
				</div>
				
				<div class="col-md-3"> 
			        <a href="<?php echo "http://localhost/CNPM/hientin/show/".$post[1]['idpost'] ?>">
			        <img src="public/frontend/images/tinvan2.jpg" class="img-thumbnail" alt="moinhat1" width="100%"/>
			        </a>
				<div style="text-align:center">
					<a href="<?php echo "http://localhost/CNPM/hientin/show/".$post[1]['idpost'] ?>"><?php echo $post[1]["title"];?></a>
					</div>                    
				</div>
				
				<div class="col-md-3"> 
				<a href="<?php echo "http://localhost/CNPM/hientin/show/".$post[2]['idpost'] ?>">
				<img src="public/frontend/images/tinvan3.jpg" class="img-thumbnail" alt="moinhat1" width="100%"/>
				</a>
					<div style="text-align:center">
						<a href="<?php echo "http://localhost/CNPM/hientin/show/".$post[2]['idpost'] ?>"><?php echo $post[2]["title"];?></a>
					</div>                    
				</div>

				<div class="col-md-3"> 
				<a href="<?php echo "http://localhost/CNPM/hientin/show/".$post[3]['idpost'] ?>">
				<img src="public/frontend/images/tinvan4.jpg" class="img-thumbnail" alt="moinhat1" width="100%"/>
				</a>
					<div style="text-align:center">
						<a href="<?php echo "http://localhost/CNPM/hientin/show/".$post[3]['idpost'] ?>"><?php echo $post[3]["title"];?></a>
					</div>                    
				</div>
			</div>
			<?php else:?>
			<h1>                   </h1>
			<?php endif;?>
			            
</div>
<!--/*end of boxtin.php*/-->
<!--/*application\views\frontend\modules\boxtin.php*/-->	