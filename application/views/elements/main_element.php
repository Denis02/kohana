<?php 
if(isset($data['photos']) && isset($data['text'])){
	$photos = $data['photos'];
	$text = $data['text'];
?>
	<div id="center">
		<div class="presentation">
            <img src="photo/<?php echo $photos[0]['name']?>" >
            <img />
		</div>
        <div class="samples">
			<?php foreach($photos as $photo){ ?>
                <img src="photo/<?php echo $photo['name']?>">
			<?php }	?>
        </div>
		<hr/>
		<p class="welcome">
			<img src="photo/I2.jpg">
			<?php echo $text?>
		</p>
	</div>
<?php }?>
<script src="js/script_home.js"></script>