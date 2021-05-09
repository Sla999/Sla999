
<?php

$dir = "/image/image_price/";
$file = $_FILES["uploadfile"]['tmp_name'];
$file_name = $_POST["name"];
$move_file = getcwd().$dir.$file_name.".jpg";
if (@move_uploaded_file($file,$move_file))
{
                //print "<center>Загрузка файла image1.jpg  в директорию $dir пошла успешно!</center>";
                echo "<script type='text/javascript'>alert ('Данные успешно занесены в базу!');</script>";
}
else
{
                print "<center><u>Ошибка:</u> невозможно загрузить файл $file!</center>";
}
?>

