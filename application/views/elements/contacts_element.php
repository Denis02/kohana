<?php 
if(isset($data['myinfo']) && isset($data['networks'])){
	$phone = $data['myinfo']['phone'];
	$email = $data['myinfo']['email'];
	$address = $data['myinfo']['address'];
	$networks = $data['networks'];
?>
        <div id="contacts">
            <div>
                <h1>Мои контакты</h1>
                <h2>Адрес</h2>
                <p>Винница, Украина</p>
                <h2>Телефон</h2>
                <p><?php echo $phone?></p>
                <h2>Почта</h2>
                <p>
                    <a href="https://e.mail.ru/compose/?to=<?php echo $email?>" target="_blank">
                        <?php echo $email; ?> <img src="i/email2.png">
                    </a>
                </p>
                <h2>Социальные сети</h2>
				<?php 
					foreach($networks as $net){?>
					<p>
						Я 
						<?php if($net['name']!='Вконтакте'){?>
							на 
						<?php }?>	
                    <a href="<?php echo $net['address']?>" target="_blank">
                        <?php echo $net['name']?> <img src="i/networks/<?php echo $net['img']?>">
                    </a>
                </p>
				<?php } ?>
            </div>
            <img src="photo/I1.jpg">
        </div>
<?php } ?>
