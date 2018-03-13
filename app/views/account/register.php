<?php if(isset($_POST['btnRegister'])){		
		$_SESSION['register'] = $data['user']->createUser($_POST['username'],$_POST['email'],$_POST['password'],$_POST['password2']);
	}?>
<form method="POST">
	<label for="username">Username:</label>
	<input type="text" name="username" id="username" required>
	<br>
	<label for="email">Email:</label>
	<input type="email" name="email" id="email" required>
	<br>
	<label for="password">Password:</label>
	<input id="password" type="password" name="password" required>
	<br>
	<p class="error" id="password-error" style="display: none;">Password must be 8 or more characters long.</p>
	<label for="password2">Re-enter Password:</label>
	<input type="password" name="password2" id="password" required>
	<br>
	<?php if(isset($_SESSION['register']['success'])):?>
		<p class="error" id="php-error" style="visibility: visible;"><?= $_SESSION['register']['error']?></p>
		<?php $_SESSION['register'] = []; ?>
	<?php endif; ?>
	
	<button type="submit" name="btnRegister" id="btnRegister">Register</button>
</form>
<script>
	var passField =document.getElementById("password");

	passField.addEventListener("focusout", (e)=>{
		if(passField.value.length < 8){
			console.log("F: "+passField.value.length);
			passField.style.boxShadow="2px 2px 2px red";
			document.getElementById("password-error").style.display = "block";
		}
		else{
			console.log("A: "+passField.value.length);
			passField.style.boxShadow="0px 0px 0px red";
			document.getElementById("password-error").style.display = "none";
		}
	});
</script>