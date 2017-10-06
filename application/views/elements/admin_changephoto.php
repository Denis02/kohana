<div id="admin">
<?php
    if(isset($data['files'])){
		$files = $data['files'];
		$dir="photo/".$_GET['category']; // Путь к директории, в которой лежат фото
		$dir2="photo/i/".$_GET['category']; // Путь к директории, в которой лежат уменьшенные копии фото ?>
	<form method="post" >
		<table >
			<tr>
				<th>Фото</th>
				<th>Расположение превью</th>
				<th>Удаление</th>
			</tr>
			<?php for ($i = 0; $i < count($files); $i++) { ?> 
			<tr>
				<td>
					<div class="gallery_img"><a href="/<?php echo $dir."/".$files[$i]?>" data-lightbox="image"><img src="/<?php echo $dir2."/".$files[$i]?>"></a></div>
				</td>
				<td>
					<?php 
						$heightphoto = getimagesize($dir."/".$files[$i])[1];
						if($heightphoto > 853){
					?>
					<label><input onchange="changePreview(this,'<?php echo 'fieldset'.$i;?>')" type="checkbox" name="preview[<?php echo $_GET['category'].'/'.$files[$i]?>]" value="<?php echo $_GET['category'].'/'.$files[$i]?>"/>Изменить</label>
					<fieldset id="fieldset<?php echo $i;?>" style="text-align:left;" disabled >
						<label><input type="radio" name="changepreview[<?php echo $_GET['category'].'/'.$files[$i]?>]" value="top"/>верх</label><br/>
						<label><input type="radio" name="changepreview[<?php echo $_GET['category'].'/'.$files[$i]?>]" value="centery"/>центр</label><br/>
						<label><input type="radio" name="changepreview[<?php echo $_GET['category'].'/'.$files[$i]?>]" value="bottom"/>низ</label>
					</fieldset>
					<?php
					} elseif($heightphoto < 853){
					?>
					<label><input onchange="changePreview(this,'<?php echo 'fieldset'.$i;?>')" type="checkbox" name="preview[<?php echo $_GET['category'].'/'.$files[$i]?>]" value="<?php echo $_GET['category'].'/'.$files[$i]?>"/>Изменить</label>
					<fieldset id="fieldset<?php echo $i;?>" style="text-align:left;" disabled >
						<label><input type="radio" name="changepreview[<?php echo $_GET['category'].'/'.$files[$i]?>]" value="left"/>лево</label><br/>
						<label><input type="radio" name="changepreview[<?php echo $_GET['category'].'/'.$files[$i]?>]" value="centerx"/>центр</label><br/>
						<label><input type="radio" name="changepreview[<?php echo $_GET['category'].'/'.$files[$i]?>]" value="right"/>право</label>
					</fieldset>				
					<?php }?>
				</td>
				<td>
					<label><input type="checkbox" name="delete[]" value="<?php echo $_GET['category'].'/'.$files[$i]?>"/>Удалить</label>
				</td>
			</tr>
			<?php } 
			} ?>			
			<tr>
				<td>
					<a href="/admin/changegallery"><input type="button" value="Отменa" /></a>
				</td>
				<td colspan="2">
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
<script src="/js/jquery-1.11.0.min.js"></script>
<script src="/js/lightbox.min.js"></script>
<script src="/js/script_changephoto.js"></script>