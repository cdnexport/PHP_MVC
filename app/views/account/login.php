<?php if(isset($_POST['btnLogin'])){		
		$_SESSION['login'] = $data['user']->login($_POST['username'],$_POST['password']);
	}?>
<form action="" method="POST">
	<label for="username">Username:</label>
	<input type="text" name="username" id="username" required>
	<br>
	<label for="password">Password:</label>
	<input id="password" type="password" name="password" required>
	<br>
	
	<?php if(isset($_SESSION['Login']) && !$_SESSION['Login']['success']):?>
		<p class="error" id="php-error" style="visibility: visible;"><?= $_SESSION['Login']['error']?></p>
	<?php endif; ?>
	
	<button type="submit" name="btnLogin" id="btnLogin">Login</button>
</form>
<?php if(isset($_SESSION['login']['name'])):?>
	<script>
		document.getElementById("username").value = "<?= $_SESSION['Login']['name']?>";
		document.getElementById("email").value = "<?= $_SESSION['Login']['email'] ?>";
	</script>
<?php endif; ?>