	<?php
		$text = isset($data['text'])?$data['text']:'';
		$presentphotos = isset($data['presentphotos'])?$data['presentphotos']:array();
		$categoryphotos = isset($data['categoryphotos'])?$data['categoryphotos']:array();
		$photos = isset($data['files'])?$data['files']:'';
	?>
<div id="admin">
	<form method="post" enctype="multipart/form-data" >
		<table>
			<thead>
				<tr>
					<th colspan="2">Настройки сайта:</th>
				</tr>
			</thead>
			<tbody id="tbody">
				<tr>
					<th colspan="2">Фон сайта:</th>
				</tr>
				<tr>
					<td>
						<div class="gallery_img"><a href="/i/body.png" data-lightbox="image"><img width="100%" src="/i/body.png"></a></div>
					</td>
					<td>
						<input type="file" name="file" accept="image/*">
					</td>
				</tr>
				<tr>
					<th colspan="2">Текст приветствия:</th>
				</tr>
				<tr>
					<td colspan="2">
						<textarea required name="text">
							<?php echo $text; ?>
						</textarea>
					</td>
				</tr>	
				<tr>
					<th colspan="2">Фото слайд-шоу:</th>
				</tr>		
				<?php foreach($presentphotos as $pp){?>
				<tr>
					<td>			
						<div class="gallery_img"><a href="/photo/<?php echo $pp['name']?>" data-lightbox="image"><img src="/photo/i/<?php echo $pp['name']?>"></a></div>
					</td>
					<td>
						<label><input type="checkbox" name="delete[<?php echo $pp['id']?>]" value="<?php echo $pp['id']?>"/>Удалить</label>
					</td>

				</tr>
				<?php } ?>
				
				<tr style="display:none;" id="invisible">
					<th>
						Выберите галерею:
					</th>
					<td>
						<ul>
							<?php
								foreach($categoryphotos as $cat){
									echo '<a href="javascript:presentPhoto(\''.$photos[$cat['folder']].'\',\''.$cat['folder'].'\')"><li>'.$cat['name'].'</li></a>';
							}?>
						</ul>
					</td>
				</tr>		

				<tr>
					<td colspan="2">
						<input type="button" value="добавить фото" onclick="addPresentPhoto()" />
					</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td>
						<a href="/admin"><input type="button" value="Отменa" /></a>
					</td>
					<td>
						<input type="submit" value="Применить" name="btnchange" />
					</td>
				</tr>
			</tfoot>
		</table>
	</form>
	<p class="message">
		<?php 
		if(isset($data['messages'])){ 
			foreach($data['messages'] as $mes){
				echo $mes;}
		}
		?>
	</p>
	<p class="error">
		<?php 
		if(isset($data['errors'])){ 
			foreach($data['errors'] as $err){
				echo $err;}
		}
		?>
	</p>
</div>
<script src="/js/jquery-1.11.0.min.js"></script>
<script src="/js/lightbox.min.js"></script>
<script src="/js/script_sitedecor.js"></script>