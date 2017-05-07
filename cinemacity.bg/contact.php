<?php $pageTitle="Контакти"; ?>
<?php include "header.php";?>


<main>
	<section class="container">
		<div class="row">
		    <div class="col-xs-12 col-md-9 main contact-wrapp">

		    	<div class="contact-head text-center">
		    		<h2>Свържете се с нас</h2>
		    	</div>

				<form method="post" action="sendemail.php">
					<div class="form-group has-warning">
						<label for="inputName">Име и Фамилия / Фирма:</label>
						<input type="text" class="form-control" id="inputName" name="inputName" required>
					</div>
					<div class="form-group  has-warning">
						<label for="inputEmail">Е-mail адрес:</label>
						<input type="email" class="form-control" id="inputEmail" name="inputEmail" required>
					</div>
					<div class="form-group has-success">
						<?php $about = array(  "Нашите услиги", "Частни и корпоративни събития", "Ваучери", 
						                        "Училищни групи", "Маркетинг", "Други", 
						                         "Онлайн продажли"); 
						?>
						<label for="inputAbout">Вашето запитване е относно:</label>
						<select class="form-control" id="inputAbout" name="inputAbout">

								<option value="Избери тема">Изберeтe тема ...</option>

							    <?php foreach ($about as $item): ?>

							        <option value="<?php echo $item; ?>"><?php echo $item; ?> </option>
							        
							    <?php endforeach ?>                                        

						</select>
						
					</div>
					<div class="form-group">
						<label for="inputText">Съобщение:</label>
						<textarea id="inputText" name="inputText" class="form-control" rows="3" required></textarea>
					</div>
					
					<button type="submit" name="submitChoice" class="btn btn-default">Изпрати</button>
				</form>

				<section id="map">
					<div style="-webkit-filter: grayscale(100%);
					filter: grayscale(100%);">
					<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11735.435182102825!2d23.289005!3d42.6643476!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1f7afd1f0e07f9b2!2sBulgaria+Mall!5e0!3m2!1sen!2sbg!4v1485600948260" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>			
				</section>
				
			</div><!-- col-md-9 -->

			<aside class="col-xs-12 col-md-3">
				<?php include "aside.php"; ?>
			</aside>
		</div> <!-- row -->
	</section> 


</main>

<?php include "footer.php"; ?>