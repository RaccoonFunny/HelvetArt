<?php get_header(); ?>
<script>
jQuery(document).ready(function($) {
	$("#contact").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "<?php bloginfo('template_url'); ?>/mail.php", // здесь указываем путь ко второму файлу
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<div class="ok">Сообщение отправлено</div>'; // текст, если сообщение отправлено
					$("#fields").show();
				}
				else {result = msg;}
				$('#note').html(result);
				 $('.input', '#contact') // очищаем поля после того, как сообщение отправилось
 .not(':button, :submit, :reset, :hidden')
 .val('')
			}
		});
		return false;
	});
});
</script>
<div class="main-heading">
	<h1><?php the_title(); ?></h1>
</div>
<section>
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</section>
<!--
	if(isset($_POST['e-mail'])){
		ini_set('display_errors','On');
		error_reporting('E_ALL');

		$first_name = $_POST['first-name'];
		$last_name = $_POST['last_name'];
		$e_mail = $_POST['e-mail'];
		$message = $_POST['message'];

		$first_name = htmlspecialchars($first_name);
		$first_name = urldecode($first_name);
		$first_name = trim($first_name);

		$last_name = htmlspecialchars($last_name);
		$last_name = urldecode($last_name);
		$last_name = trim($last_name);

		$e_mail = htmlspecialchars($e_mail);
		$e_mail = urldecode($e_mail);
		$e_mail = trim($e_mail);

		$message = htmlspecialchars($message);
		$message = urldecode($message);
		$message = trim($message);

		echo $first_name." ".$last_name." ".$e_mail."\n".$message;

		wp_mail("koltashov.andrey@gmail.com", "Контактное письмо", "ФИО:".$first_name.$last_name." E-mail: ".$e_mail."\r\n".$message ,"From: contact@helvetart.ch \r\n");

		if (mail("koltashov.andrey@gmail.com", "Контактное письмо", "ФИО:".$first_name.$last_name." E-mail: ".$e_mail."\r\n".$message ,"From: contact@helvetart.ch \r\n"))
		 {
		    echo "сообщение успешно отправлено";
		} else {
		    echo "при отправке сообщения возникли ошибки";
		}
	}-->
<form id="contact" class="MX" action="mail.php" method="post">
	<div id="note"></div>
  <div class="form">
    <div class="row">
      <div class="input">
        <label required for="first-name">First name</label>
        <input required id="first-name"type="text" name="first-name" placeholder="Andrew">
      </div>
      <div class="input">
        <label for="last-name">Last name</label>
        <input required id="last-name" type="text" name="last-name" placeholder="Koltashov">
      </div>
    </div>
    <div class="row">
      <div class="input">
        <label for="e-mail">E-mail</label>
        <input required id="e-mail" type="text" name="e-mail" placeholder="example@mail.com">
      </div>
    </div>
    <div class="row">
      <div class="input">
        <label for="message">Message</label>
        <textarea required id="message" type="text" name="message" placeholder=""></textarea>
      </div>
    </div>
    <input id="submit" type="submit" name="submit" value="submit">
  </div>
</form>

<!--  -->
<?php get_footer(); ?>
