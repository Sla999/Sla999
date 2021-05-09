<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Моя работа</title>
  <link rel="stylesheet" href="mmstyle.css" type="text/css" media="screen" /> 
	<script type="text/javascript" src="drop_dow.js"></script>
</head>

<body>
    <table align="center" width="1100" border="1px" cellpadding="0" cellspacing="0" border="0" background="image/fon.jpg" bordercolorlight="#000000">
      <tr>
        <td colspan="3"><img src="image/baner.jpg" width="1100" height="250" align="top" alt="" />
         <!--//////////////////////////////////////////////////////////////////////////////////////// -->
         <div id="mainmenu">
                <ul id="nav">
                  <li><a href="#">История пчеловодства</a>
                    <ul>
                      <li><a href="index11.php">Начинающим</a></li>
                      <li><a href="index12.php">Биология пчел</a></li>
                      <li><a href="index13.php">Медоносная база</a></li>
                      <li><a href="index14.php">Наблюдение пчеловодов</a></li>
                    </ul>
                  </li>

                  <li><a href="#">Методы и технологии</a>
                    <ul>
                      <li><a href="index21.php">Методы пчеловодства</a></li>
                      <li><a href="index22.php">Весенние работы</a></li>
                      <li><a href="index23.php">Зимовка пчел</a></li>
                      <li><a href="index24.php">Подкормка пчел</a></li>
                      <li><a href="index25.php">Разведение маток</a></li>
                      <li><a href="index26.php">Опыление пчелами</a></li>
                      <li><a href="index27.php">Размножение пчел</a></li>
                      <li><a href="index28.php">Борьба с трутнями</a></li>
                    </ul>
                  </li>

                  <li><a href="#">Болезни и вредители</a>
                    <ul>
                      <li><a href="index31.php">О болезнях пчел</a></li>
                      <li><a href="index32.php">Болезни расплода</a></li>
                      <li><a href="index33.php">Болезни взрослых пчел</a></li>
                      <li><a href="index34.php">Профилактика</a></li>
                      <li><a href="index35.php">Лечение</a></li>
                      <li><a href="index36.php">Борьба с вредителями</a></li>
                      <li><a href="index37.php">Лекарства</a></li>
                    </ul>
                  </li>

                  <li><a href="#">Инвентарь и оборудование</a>
                    <ul>
                      <li><a href="index41.php">Ульи</a></li>
                      <li><a href="index42.php">Рамки для ульев</a></li>
                      <li><a href="index43.php">Медопроизводство</a></li>
                      <li><a href="index44.php">Воскоделие</a></li>
                      <li><a href="index45.php">Соты</a></li>
                      <li><a href="index46.php">Матки</a></li>
                      <li><a href="index47.php">Прочий инвентарь</a></li>
                    </ul>
                  </li>

                  <li><a href="#">Каталог</a>
                    <ul>
                      <li><a href="index51.php">Одежда для пчеловодов</a></li>
                      <li><a href="index52.php">Препараты для лечения пчел</a></li>
                      <li><a href="index53.php">Ручной инвентарь</a></li>
                      <li><a href="index54.php">Для улья</a></li>
                      <li><a href="index55.php">Вывод маток</a></li>
                      <li><a href="index56.php">Оборудование</a></li>
                      <li><a href="index57.php">Для работы с мёдом</a></li>
                    </ul>
                  </li>
                </ul>

            </div>
        <!--//////////////////////////////////////////////////////////////////////////////////////// -->
        </td>
      </tr>
      <tr>
        <td width="250" height="100" align="center" valign="top"><br>
            <form action="key.php" method="get">
                <p align="center"><label for="username">Логин</label><br/>
                <input name="username" type="text" size="18"/></p>
                <p align="center"><label for="passwd">Пароль</label><br/>
                <input name="passwd" type="password" size="18"/><br/><br>
                <input type="submit" name="sub" value="Вход"/></p>
                <p align="center"><a href="registr.php">Регистрация</a> <br/>
                <p align="center"><a href="#">Забыли пароль?</a> <br/>

            </form>
        </td>
        <td rowspan="2" width="900" valign="top">
        <br><br>
                <form action="admin.php" method="post" enctype="multipart/form-data">
                <p align="center"><label for="name">Название товара</label><br/>
                <input name="name" type="text" size="18"/></p>
                <p align="center"><label for="uploadfile">Изображение</label><br/>
                <input name="uploadfile" type="file" value="999999"></p>
                <p align="center"><label for="price">Цена</label><br/>
                <input name="price" type="text" size="18"/></p>
                <p align="center"><label for="quantity">Количество</label><br/>
                <input name="quantity" type="text" size="18"/></p>
                <p align="center"><label for="detail">Информация</label><br/>
                <textarea name="detail" cols="40" rows="10"></textarea> <br/><br>
                <input type="submit" name="save" value="Сохранить"/></p>
                </form>


        </td>
        <td rowspan="2" width="180" valign="top" align="center"><br><br>


        <table align="center" border="1" bordercolorlight="#000000" width="200" cellspacing="0" cellpadding="10" bgcolor="#FFFF00">
          <tr>
            <td colspan="2">КОРЗИНА</td>
          </tr>
          <tr>
            <td colspan="2">Нет товаров</td>
          </tr>
          <tr>
            <td>Всего</td>
            <td>0 руб</td>
          </tr>
          <tr>
            <td> <input type="submit" name="korzina" value="Корзина" size="6" style="background-color: #3366FF; color: #FF6600"/></td>
            <td><input type="submit" name="form" value="Оформить" size="20" style="background-color: #3366FF; color: #FF6600"/></td>
          </tr>
        </table>
        <br><br>
        &nbsp;<a href="#"><img src="image/ppu.jpg" width="180" height="250" alt="" /></a>


        </td>
      </tr>
      <tr>
        <td height="300"><br>
            3
        </td>
      </tr>
      <tr align="center">
       <!-- <td colspan="3" align="center"><img src="image/down.jpg" width="1100" height="52" alt=""/></td> -->
      </tr>
    </table>
    <!--////////////////////////////////////////-->
    <table align="center" width="1100" height="52" cellpadding="0" cellspacing="0" background="image/down.jpg">
      <tr>
        <td align="right">
        <!--Rating@Mail.ru counter-->
        <!--<a target="_top" href="http://top.mail.ru/jump?from=1743417">-->
        <!--<img src="http://da.c9.ba.a1.top.mail.ru/counter?id=1743417;t=75" -->
        <!--border="0" height="31" width="38" alt="Рейтинг@Mail.ru"></a>-->
        <!--Rating@Mail.ru counter <img src="http://leti.bos.ru/php/counter/counter.phtml?id=29568">&nbsp;&nbsp;</td> счетчик -->
      </tr>
    </table>
    <?php
    if($_POST["save"])
    {
        $dir = "/image/image_price/";
        $file = $_FILES["uploadfile"]['tmp_name'];
        $name = $_POST["name"];
        $file_name = $_FILES["uploadfile"]['name'];
        $rec_file = "image/image_price/".$file_name;
        $move_file = getcwd().$dir.$file_name;
        if (@move_uploaded_file($file,$move_file))
        {
                        $price = $_POST["price"];
                        $quantity = $_POST["quantity"];
                        $detail = $_POST["detail"];
                        $db_name="mybase";	//база данных
                        $table="price";	//таблица
                        $host="localhost";	//хост
                        $link = mysql_connect($host,"root") or die(mysql_errno($link).mysql_error($link));
                        $db = mysql_select_db($db_name,$link) or die(mysql_errno($link).mysql_error($link));
                        $sql = "INSERT INTO price(id,name,price,quantity,detail,file_name) VALUES(null,'$name','$price','$quantity','$detail','$rec_file')";
                        $rez = mysql_query($sql,$link);
                        echo "<script type='text/javascript'>alert ('Данные успешно занесены в базу!');</script>";
        }
        else
        {
                        echo "<script type='text/javascript'>alert ('Невозможно загрузить данные в базу!');</script>";
        }
    }
    ?>
</body>

</html>