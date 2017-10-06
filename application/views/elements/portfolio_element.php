<?php
if(isset($data['categories'])){
	$categories = $data['categories'];?>
        <div id="portfolio">
		<?php 
			foreach($categories as $cat){?>
            <div>
                <a href="portfolio?category=<?php echo $cat['folder']?>">
					<img src="photo/i/<?php echo $cat['folder']?>/<?php echo $cat['photo']?>">
					<div><?php echo $cat['name']?></div>
				</a>
            </div>
			<?php }?>	
        </div>
<?php }?>