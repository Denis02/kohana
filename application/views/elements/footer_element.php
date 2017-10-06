		<div class="indent"></div>
	</div>
	<div id="footer">
		<hr />
		<?php
			if(isset($data['myinfo']) && isset($data['networks'])){
			$phone = $data['myinfo']['phone']; 
			$email = $data['myinfo']['email'];
			$networks = $data['networks']; 
		?>
			<div>
				<?php echo $phone;?>
				<br />
				&copy 2015 <b>Татьяна Хмелёвская</b>
			</div>
			<div>
				<a href="https://e.mail.ru/compose/?to=<?php echo $email;?>" target="_blank" title="e.mail.ru"><img src="/i/email.png"></a>
				<?php  
					foreach($networks as $net){?>
						<a href="<?php echo $net['address'];?>" target="_blank" title="<?php echo $net['name'];?>"><img src="/i/networks/<?php echo $net['img'];?>"></a>
				<?php }?>
			</div>
		<?php } ?>
	</div>
</body>
</html>