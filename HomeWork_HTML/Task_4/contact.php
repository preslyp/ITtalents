<?php include 'inc/header.php'; ?>

		<div class="wrapper">
			<div class="breadcrumbs">
				<ul>
					<li><a href="index.html" title="Начало">Начало / </a></li>
					<li>Контакти</li>
				</ul>	
			</div>

			<section class="contact">
				
				<h2><i class="fa fa-envelope-o" aria-hidden="true"></i> Свържете се с мен</h2>

				<div class="mail">
				
					<form action="" method="post" accept-charset="utf-8">
						<div class="name">
							<label for="name">Име*:</label>
							<input id="name" type="text" name="name" placeholder="Въведете име и фамилия" size="40px" required>
						</div>
						<br/>
						<div class="email">
							<label for="email">Електронна поща*:</label>
							<input id = "email" type="email" name="email" placeholder="Въведете фамилия" size="40px" required>
						</div>
						<br/>
						<div class="vote">
							<label for="vote">Вашето мнение за сайта:</label>
							<select id="vote" name="vote">
								<option value="----">----------</option>
					            <option value="Харесва ми">Харесва ми</option>
					            <option value="Не ми харесва">Не ми харесва</option>
					             <option value="Нямам мнение">Нямам мнение</option>
					        </select>	
						</div>
						<br/>
						<div class="area">
							<textarea name="area" rows="5" cols="67">Моля, чувствайте се свободни да се свържете с мен.</textarea>
						</div>
						<br/>
						<div class="submit">
							<input type="submit" name="submit" value="Изпрати">
						</div>
					</form>
				</div>
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11735.435182102825!2d23.289005!3d42.6643476!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1f7afd1f0e07f9b2!2sBulgaria+Mall!5e0!3m2!1sen!2sbg!4v1485600948260" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>

			</section>
		</div>
<?php include 'inc/footer.php'; ?>