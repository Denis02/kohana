	<?php $categories = $data['categories']; ?>
<div id="admin">
	<form method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<th colspan="2">				
					Загрузить фото:
				</th>
			</tr>
			<tr>
				<td colspan="2">				
					<input min="1" max="5" type="file" name="files[]" multiple="true" accept="image/*">
				</td>
			</tr>
			<tr>
				<td>
					Галерея:
				</td>
				<td>
					<select name="categoryname">					
					<?php 
					if(!empty($data['category'])){
						foreach($categories as $cat){
							echo '<option value="'.$cat['folder'].'" ';
							if($data['category']==$cat['folder']) echo 'selected';
							echo '>'.$cat['name'].'</option>';
						}
					}
					elseif(!empty($_GET['category'])){
						foreach($categories as $cat){
							echo '<option value="'.$cat['folder'].'" ';
							if($_GET['category']==$cat['folder']) echo 'selected';
							echo '>'.$cat['name'].'</option>';
						}
					}
					else{
						foreach($categories as $cat){
							echo '<option value="'.$cat['folder'].'">'.$cat['name'].'</option>';
						}
					}?>					
					</select>
					<p style="font-size:0.8em; font-style:italic; font-weight: bold;"><a href="/admin/addcategory"> + добавить галерею </a></p>
				</td>
			</tr>			
			<tr>
				<td>
					<a href="/admin"><input type="button" value="Отменa" /></a>
				</td>
				<td>
					<input type="submit" value="Загрузить" name="btnload" />
				</td>
			</tr>
		</table>
	</form>
	<div>
		<?php 
			if(isset($data['names'])){
				foreach($data['names'] as $name){
					echo '<div class="gallery_img"><a href="/photo/'.$name.'" data-lightbox="image"><img src="/photo/i/'.$name.'"></a></div> <p class="message">'.$name.'</p>'; 
				}
			}
			if(isset($data['errors'])){
				foreach($data['errors'] as $error){
					echo '<p class="error">'.$error.'</p>';
				}
			}
		?>
	</div>
</div>
<script src="/js/jquery-1.11.0.min.js"></script>
<script src="/js/lightbox.min.js"></script>