<div id="admin">
	<form method="post" action="">
		<table >
			<tr>
				<th colspan="3">Создать галерею:</th>
			</tr>
			<tr>
				<th></th>
				<th>название галереи</th>
				<th>имя папки</th>
			</tr>
			<tr style="font-size:0.8em; font-style:italic;">
				<td>
					пр.
				</td>
				<td>
					Свадьба, праздники
				</td>
				<td>
					wedding_feast
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input name="name" type="text"/></td>
				<td><input name="folder" type="text"/></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<a href="/admin/addphoto"><input type="button" value="Отменa" /></a>
				</td>
				<td>
					<input type="submit" value="Создать" name="btncreate" />
				</td>
			</tr>
		</table>
		<p class="error"><?php if(isset($data['error'])) echo $data['error'];?></p>
		<p class="message"><?php if(isset($data['message'])) echo $data['message'];?></p>
	</form>
</div>