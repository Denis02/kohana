	<?php
		$myinfo = $data['myinfo'];
		$networks = $data['networks'];
	?>
<div id="admin">
	<form method="post" enctype="multipart/form-data" >
		<table >
		<thead>
			<tr>
				<th colspan="4">Личные данные:</th>
			</tr>
		</thead>
		<tbody id="tbody">
			<tr>
				<th>Email:</th>
				<td colspan="3">
					<input type="email" name="myinfo[email]" value="<?php echo $myinfo['email']?>" required />
				</td>
			</tr>
			<tr>
				<th>Телефон:</th>
				<td colspan="3">
					<input type="tel" name="myinfo[phone]" value="<?php echo $myinfo['phone']?>" required />
				</td>
			</tr>
			<tr>
				<th>Адрес:</th>
				<td colspan="3">
					<input type="text" name="myinfo[address]" value="<?php echo $myinfo['address']?>" required />
				</td>
			</tr>
			<tr>
				<th colspan="4">Соцсети:</th>
			</tr>
			<tr>
				<th>название</th>
				<th>адрес</th>
				<th>иконка</th>
				<th>удаление</th>
			</tr>			
			<?php foreach($networks as $net){?>
			<tr>
				<td>
					<input type="text" name="networks[<?php echo $net['id']?>][name]" value="<?php echo $net['name']?>" required />
				</td>
				<td>
					<input type="url" name="networks[<?php echo $net['id']?>][address]" value="<?php echo $net['address']?>" required />
				</td>
				<td>			
					<img src="/i/networks/<?php echo $net['img']?>" alt="<?php echo $net['img']?>">
					<br>
					<input type="file" name="file<?php echo $net['id']?>" accept="image/*">
				</td>
				<td>
					<label><input type="checkbox" name="networks[<?php echo $net['id']?>][delete]" value="<?php echo $net['id']?>"/>Удалить</label>
				</td>
			</tr>
			<?php } ?>
			<tr id="networkput">
				<td colspan="4">
					<input type="button" value="добавить соцсеть" name="btnaddnetwork" onclick="addNetwork()"/>
				</td>
			</tr>			
		</tbody>
		<tfoot>
			<tr>
				<td colspan="2">
					<a href="/admin"><input type="button" value="Отменa" /></a>
				</td>
				<td colspan="2">
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
<script src="/js/script_myinfo.js"></script>