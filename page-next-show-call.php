<?php get_header(); ?>
<div class="main-heading">
	<h1><?php the_title(); ?></h1>
</div>
<section>
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</section>

<form class="entryForm" action="mail-show-call.php" enctype="multipart/form-data"  method="post">
	<div class="form">
		<div class="row">
			<div class="input">
				<label required for="first-name">First name</label>
				<input required id="first-name"type="text" name="first-name">
			</div>
			<div class="input">
				<label for="last-name">Last name</label>
				<input required id="last-name" type="text" name="last-name">
			</div>
		</div>
		<div class="row">
			<div class="input">
				<label for="e-mail">E-mail</label>
				<input required id="e-mail" type="text" name="e-mail">
			</div>
		</div>
		<div class="row">
			<div class="input">
				<label for="country">Country</label>
				<input type="text" name="country"class="short">
			</div>
			<div class="input">
				<label for="website">Website (optional)</label>
				<input type="text" name="website"class="short">
			</div>
		</div>
		<div class="row">
			<div class="input">
				<label for="message">Artist Statement (optional)</label>
				<textarea required id="message" type="text" name="message" placeholder=""></textarea>
			</div>
		</div>
		<div class="row">
			<div class="input">
				<label for="hear-US">How did you hear about us?</label>
				<select class="hear-US" name="hear-US">
					<option value="other">other</option>
					<option value="social media">social media</option>
					<option value="press">press</option>
				</select>
			</div>
		</div>
		<div>
			<h3>Image Requirements</h3>
			<p>- Image should not exceed 2MB.</p>
			<p>- Image should be in jpeg format.</p>
			<p>- Image should not contain any frame, mat, or watermark.</p>
			<p>- Image should be labeled as LastName-FirstName-TitleofArt.jpeg</p>
			<p>- Image should be clear and in focus, this represents your work and it will be displayed the same way it is received.</p>
		</div>
		<div class="row">
			<div class="input">
				<label for="title" >Title (First Piece)</label>
				<input type="text" name="title" class="short">
			</div>
			<div class="input">
				<label for="medium" >Medium (First Piece)</label>
				<input type="text" name="medium" class="short">
			</div>
		</div>
		<div class="row">
			<div class="input">
				<label for="Dimensions" >Dimensions (First Piece)</label>
				<input type="text" name="Dimensions" class="short">
			</div>
			<div class="input">
				<label for="Price" >Price (Optional / does not need to be for sale)</label>
				<input type="text" name="Price" class="short">
			</div>
		</div>
		<div class="row">
			<div class="input">
				<label for="file" >Attach First Piece (Jpeg format)</label>
				<input type="file" name="file">
			</div>
		</div>
		<div>
			<h3>Ussage Rights</h3>
			<p>By clicking accept, you, the artist, agrees to allow HelvetArt Association to use your image for the following purposes: online art exhibition, future show marketing, promotional, and display purposes. You, the artist, agrees to allow HelvetArt Association to archive your image as part of a show. This will be available for public viewing on our website. Your image will include your name, title of your work, and your website or contact information, if applicable.
				 The artist shall maintain all copyrights of any image that they submit to HelvetArt Association. Images shall not be resold, exchanged or copied.</p>
		</div>
	</div>
</form>

<?php get_footer(); ?>
