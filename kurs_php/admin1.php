
<?php

$dir = "/image/image_price/";
$file = $_FILES["uploadfile"]['tmp_name'];
$file_name = $_POST["name"];
$move_file = getcwd().$dir.$file_name.".jpg";
if (@move_uploaded_file($file,$move_file))
{
                //print "<center>�������� ����� image1.jpg  � ���������� $dir ����� �������!</center>";
                echo "<script type='text/javascript'>alert ('������ ������� �������� � ����!');</script>";
}
else
{
                print "<center><u>������:</u> ���������� ��������� ���� $file!</center>";
}
?>

