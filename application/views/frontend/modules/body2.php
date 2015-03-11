<div class="body">
            	<?
                	$sql="select * from post order by postdate desc limit 4";
					$post=mysql_query($sql);
					
				?>
				<h1>Tin Vắn</h1>
				<ul>
                	<?
						$i=0;
                    	while($i<4 & $dong=mysql_fetch_array($post)){
					?>
					<li>
						<a href="index.php?quanli=baiviet&id=<? echo $dong["postid"]?>">
                        <img src="<? echo $dong["img"]?>" width=210px height=210px> </a>
						<a href="index.php?quanli=baiviet&id=<? echo $dong["postid"]?>">
                        <h2><? echo $dong["title"]?></h2>
                        </a>
					</li>
                    <?
						$i++;
						}
					?>
				</ul>
			</div>