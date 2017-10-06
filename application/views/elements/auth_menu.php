<div id="admin">
	<form method="POST">
		<table class='login'>
			<tr>
				<th colspan="2">Авторизация</th>
			</tr>
			<tr>
				<td style="text-align:right">Логин: </td>
				<td><input name="login" type="text"/></td>
			</tr>
			<tr>
				<td style="text-align:right">Пароль: </td>
				<td><input name="password" type="password"/></td>
			</tr>
			<tr>
				<td style="text-align:right" colspan="2">
					<a href="/"><input type="button" value="Отмена" style="width:160px; height:30px"/></a>
					<input type="submit" value="Войти" name="btnlogin" style="width:160px; height:30px; margin: 5px 5px 5px 30px"/>
				</td>
			</tr>
		</table>
	</form>
	<p class="error"><?php if(isset($data['error'])) echo $data['error'];?></p>
</div>