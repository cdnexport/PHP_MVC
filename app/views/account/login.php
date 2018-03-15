<?php if(isset($_POST['btnLogin'])){		
		$_SESSION['login'] = $data['user']->login($_POST['username'],$_POST['password']);
	}?>
<form method="POST">
	<label for="username">Username:</label>
	<input type="text" name="username" id="username" required>
	<br>
	<label for="password">Password:</label>
	<input id="password" type="password" name="password" required>
	<br>
	
	<?php if(isset($_SESSION['login']) && !$_SESSION['login']['success']):?>
		<p class="error" id="php-error" style="visibility: visible;"><?= $_SESSION['login']['error']?></p>
		<script>
			$("#username").attr("value", "<?= $_SESSION['login']['name']?>");
		</script>
		<?php unset($_SESSION['login']) ?>
	<?php endif; ?>
	
	<button type="submit" name="btnLogin" id="btnLogin">Login</button>
</form>