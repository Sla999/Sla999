<?php
    if(isset($_POST['dell']))
    {
    session_start();
    session_destroy();
    $arr=$_POST["Arr"];
    $len = sizeof($arr);
    mysql_query("DELETE FROM temp WHERE id = '1'");
        foreach($_POST['Arr'] as $value)
        {
        if (empty($value))
            echo 'чекбокс не отмечен';
        else
            $db_name="mybase";	//база данных
            $table="temp";	//таблица
            $host="localhost";	//хост
            $link = mysql_connect($host,"root") or die(mysql_errno($link).mysql_error($link));
            $db = mysql_select_db($db_name,$link) or die(mysql_errno($link).mysql_error($link));
            $rez = mysql_query("DELETE FROM temp WHERE name = '$value' LIMIT 1") or die(mysql_errno($link).mysql_error($link));
        }
           header("location: korzina.php");
       }
    if(isset($_POST['form']))
    {
        session_start();
        $mail = $_SESSION['email1'];
        $message = "Здраствуйте, ".$mail."\nСпасибо за заказ. 2\nНаш администратор свяжется с Вами в ближайшее время";
        mail($mail, 'My Subject', $message);


        //<form method="POST" action="mailto:Digsla@mail.ru"></form>
    }



?>