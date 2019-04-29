<?php if (isset($user) && $user == 'admin') : ?>

	<div class="checkout conteiner">
		<p class="check__title">Admin-panel</p>

	</div>

<?php elseif (isset($user)) : ?>
	
	<div class="checkout conteiner">
		<p class="check__title">User office</p>

	</div>

<?php else : ?>

		<div class="check__item">
			<div class="check__content">
				<div class="check__left">
					<form action="#" method="post">
						<div class="check__head">Register new user</div>
						<p class="check__title">Message</p>
						<input type="text" name="name" class="result-input check__input" placeholder="You name"><br><br>
						<input type="email" name="email" class="result-input check__input" placeholder="E-mail"><br><br>
						<input type="text" name="addres" class="result-input check__input" placeholder="Address"><br><br>
						<input type="text" name="phone" class="result-input check__input" placeholder="Phone"><br><br>
						<input type="hidden" value="user_register">
						<input type="submit" class="check__button" value="Register">
					</form>				
				</div>
				<div class="check__right">
						<div class="check__head">Enter account</div>
					<p class="check__title">Message</p>
					<form action="#" method="post">
						<input type="email" class="result-input check__input" placeholder="user@gmail.com"><br><br>
						<input type="password" class="result-input check__input" placeholder="*******"><br><br>
						<input type="submit" class="check__button" value="Log in">
						<input type="hidden" value="user_login">
					</form>	
				</div>				
			</div>
		</div>

<?php endif; ?>

