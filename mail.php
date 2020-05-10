<?
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

mail("koltashov.andrey@gmail.com", "Контактное письмо", "ФИО:".$first_name.$last_name." E-mail: ".$email."\r\n".$message ,"From: contact@helvetart.ch \r\n");

if (mail("koltashov.andrey@gmail.com", "Контактное письмо", "ФИО:".$first_name.$last_name." E-mail: ".$email."\r\n".$message ,"From: contact@helvetart.ch \r\n"))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}
?>
