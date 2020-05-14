<?
ini_set('display_errors','On');
error_reporting('E_ALL');

$first_name = $_POST['first-name'];
$first_name = htmlspecialchars($first_name);
$first_name = urldecode($first_name);
$first_name = trim($first_name);

$last_name = $_POST['last-name'];
$last_name = htmlspecialchars($last_name);
$last_name = urldecode($last_name);
$last_name = trim($last_name);

$e_mail = $_POST['e-mail'];
$e_mail = htmlspecialchars($e_mail);
$e_mail = urldecode($e_mail);
$e_mail = trim($e_mail);

$website = $_POST['website'];
$website = htmlspecialchars($website);
$website = urldecode($website);
$website = trim($website);

$statement = $_POST['message'];
$statement = htmlspecialchars($statement);
$statement = urldecode($statement);
$statement = trim($statement);

$hear_us = $_POST['hear-US'];
$hear_us = htmlspecialchars($hear_us);
$hear_us = urldecode($hear_us);
$hear_us = trim($hear_us);

$title = $_POST['title'];
$title = htmlspecialchars($title);
$title = urldecode($title);
$title = trim($title);

$medium = $_POST['medium'];
$medium = htmlspecialchars($medium);
$medium = urldecode($medium);
$medium = trim($medium);

$dimensions = $_POST['Dimensions'];
$dimensions = htmlspecialchars($dimensions);
$dimensions = urldecode($dimensions);
$dimensions = trim($dimensions);

$price = $_POST['Price'];
$price = htmlspecialchars($price);
$price = urldecode($price);
$price = trim($price);

$file_type = $_FILES['file']['type'];
$file_size = $_FILES['file']['size'];
$file_error = $_FILES['file']['error'];
$file_name_new = $first_name.$last_name.".jpeg";
$file_name_new_full = $_SERVER['DOCUMENT_ROOT']."/".$file_name_new;
copy ( $_FILES['file']['tmp_name'], $file_name_new_full );

$f = fopen($file_name_new_full,"rb"); // Открываем и читаем бинарно файл
$un = strtoupper(uniqid(time()));
$body = "------------".$un."\r\nContent-Type: text/html; charset='koi8-r'\r\nContent-Transfer-Encoding: 8bit\r\n\r\n". // Отбивается пустая строка !!!
"<style type=text/css> .text { font-family: Verdana, Arial, Helvetica, sans-serif; font-size:13px; color:#1e445b;line-height:18px; }</style><div class='text'>Вам отправлен файл<br /><br />Администрация сайта</div>".
"\r\n------------".$un."\r\nContent-Type: application/octet-stream;name=\"$file_name_new\"\r\nContent-Transfer-Encoding:base64\r\nContent-Disposition:attachment;filename=".$file_name_new."\r\n\r\n".chunk_split(base64_encode(fread($f,filesize($file_name_new_full))))."\r\n";
$headers = "From: ".$from."\r\nReply-To: ".$from."\r\nMIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"----------".$un."\"\r\n";

mail("files@helvetart.ch", "New file fron".$first_name." ".$last_name, $first_name."\r\n".$last_name."\r\n".$e_mail."\r\n".$website."\r\n Statement: ".$statement."\r\n found us from:".$hear_us."\r\n Title ".$title."\r\n Medium".$medium."\r\n dimensions ".$dimensions."\r\n price".$price.$body, $headers);

?>
