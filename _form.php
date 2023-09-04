<form method="post" action="<?php echo $action_file; ?>">
	<p>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
	</p>
	<p>
		<label>Nome</label><br>
		<input type="text" name="nome" value="<?php echo $nome; ?>" size="60">
	</p>
	<p>
		<label>Email</label><br>
		<input type="text" name="email" value="<?php echo $email; ?>" size="60">
	</p>

	<p>
		<label>Username</label><br>
		<input type="text" name="username" value="<?php echo $username; ?>" size="60">
	</p>

	<p>
		<label>Password</label><br>
		<input type="password" name="password" value="<?php echo $password; ?>" size="60">
	</p>

	<p>
		<?php 
		function select($option){
			if($GLOBALS['perfil']==$option){
				echo "selected";
			}
		}
			
		 ?>
		<label>Perfil</label><br>
		<select name="perfil">
			<option <?php select('admin'); ?>>admin</option>
			<option <?php select('gestor'); ?>>gestor</option>
			<option <?php select('vendedor'); ?>>vendedor</option>
		</select>
	</p>
	<hr>
	<p>
		<input type="submit" value="Gravar">
	</p>
</form>