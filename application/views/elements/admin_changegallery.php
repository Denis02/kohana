<?php
	$categories = $data['categories'];
 ?>
<div id="admin">
<form method="post" >
	<table >
		<tr>
			<th>Обложка</th>
			<th>Название</th>
			<th><label>Папка<input type="checkbox" onchange="changeFolder(this)"/></label></th>
			<th>Содержимое</th>
			<th>Удаление</th>
		</tr>
		
		<?php foreach($categories as $cat){?>
		<tr>
			<td>			
				<select name="category[<?php echo $cat['id']?>][photo]" onchange="changeImg(this, '<?php echo $cat['folder'];?>')" >
					<?php
						if(isset($data['files'][$cat['id']])){
							$files = $data['files'][$cat['id']];
							for ($i = 0; $i < count($files); $i++) {  
								echo '<option value="'.$files[$i].'"';
								if($files[$i]==$cat['photo']){
									echo 'selected';}
								echo '>'.$files[$i].'</option>';
							}
						}
					?>
				</select><br>
				<div class="gallery_img"><img id="img<?php echo $cat['folder'];?>" src="/photo/i/<?php echo $cat['folder']?>/<?php echo $cat['photo']?>"></div>
			</td>
			<td><input name="category[<?php echo $cat['id']?>][name]" type="text" value="<?php echo $cat['name']?>"/></td>
			<td><input class="folder" name="category[<?php echo $cat['id']?>][folder]?>" type="text"value="<?php echo $cat['folder']?>" disabled/></td>
			<td><a href="/admin/changephoto?category=<?php echo $cat['folder']?>"><input type="button" value="Редактировать фото"/></a></td>
			<td><label><input type="checkbox" name="category[<?php echo $cat['id']?>][delete]" value="<?php echo $cat['id']?>"/>Удалить</label></td>
		</tr>
		<?php } ?>
		
		<tr>
			<td colspan="2">
				<a href="/admin"><input type="button" value="Отменa" /></a>
			</td>
			<td colspan="3">
				<input type="submit" value="Применить" name="btnchange" />
			</td>
		</tr>
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
<script src="/js/script_changegallery.js"></script>
