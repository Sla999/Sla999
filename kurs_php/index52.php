<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Моя работа</title>
  <link rel="stylesheet" href="mmstyle.css" type="text/css" media="screen" />
	<script type="text/javascript" src="drop_dow.js"></script>
</head>

<body>
    <table align="center" style=" table-layout:  auto" width="1100" border="0px" cellpadding="0" cellspacing="0" border="0" background="image/fon.jpg" bordercolorlight="#000000">
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
        <td width="360" height="100" align="center" valign="top"><br>
            <?php
                session_start();
                if(isset($_SESSION['from1']))
                {
                    echo "Здраствуйте, ".$_SESSION['from1']."!";
                    echo "<form action=\"index.php\" method=\"get\"><br><br>";
                    echo "<input type=\"submit\" name=\"sub\" value=\"Выход\"/></p></form>";
                    if(isset($_GET['sub']))
                    {
                        session_destroy();
                    }
                }
                else
                {
                     echo "<form action=\"key.php\" method=\"get\">";
                     echo "<p align=\"center\"><label for=\"username\">Логин</label><br/>";
                     echo "<input name=\"username\" type=\"text\" size=\"18\"/></p>";
                     echo "<p align=\"center\"><label for=\"passwd\">Пароль</label><br/>";
                     echo "<input name=\"passwd\" type=\"password\" size=\"18\"/><br/><br>";
                     echo "<input type=\"submit\" name=\"sub\" value=\"Вход\"/></p>";
                     echo "<p align=\"center\"><a href=\"registr.php\">Регистрация</a><br/>";
                     echo "<p align=\"center\"><a href=\"#\">Забыли пароль?</a><br/>";
                     echo "</form>";
                }

            ?>


        </td>
        <td rowspan="2" width="900" align="center">
        <br>
        <!--......................................................................................... -->
        <table align="center" border="1" bordercolorlight="#000000" width="500" cellspacing="0" cellpadding="10" >
          <tr>
            <td>
                <?php
                  //$sum = 0;   $res1 = 0;
                  $sum=0;$qaunt_tov=0;$res1 = 0;
                  session_start();
                  if(isset($_SESSION["res11"]))
                  {
                    $res1=$_SESSION["res11"];
                  }
                  if(isset($_SESSION["qaunt_tov1"]))
                  {
                    $qaunt_tov=$_SESSION["qaunt_tov1"];
                  }
                  $db_name="mybase";	//база данных
                  $table="price";	//таблица
                  $host="localhost";	//хост
                  $link = mysql_connect($host,"root") or die(mysql_errno($link).mysql_error($link));
                  $db = mysql_select_db($db_name,$link) or die(mysql_errno($link).mysql_error($link));
                  $rez = mysql_query("select * from price") or die(mysql_errno($link).mysql_error($link));
                  $num = mysql_num_rows($rez);
                  $name = mysql_result($rez,4,"name");
                  $file_name = mysql_result($rez,4,"file_name");
                  echo "<img src=\"".$file_name."\"width=\"129\" height=\"129\" align=\"left\">";
                  echo mysql_result($rez,4,"name");
                  echo "<br><a href=\"#\">"."Подробнее"."</a>";
                ?>
            </td>
            <td valign="top" width="30">
            <?php
                $quantity = mysql_result($rez,4,"quantity");
                if($quantity>0){echo "В наличии<br>".$quantity." шт.";}
                else{echo "Нет в наличии";}
            ?>
            </td>
            <td valign="top">
            <?php
                $price = mysql_result($rez,4,"price");
                echo $price." грн.";
            ?>
            <form action="#" method="post">
            <br><br><input type="submit" name="korzina" value="В корзину" size="6" style="background-color: #3366FF; color: #FF6600"/></form>
            <?php
                if(isset($_POST["korzina"]))
                {
                  $sum = $price; /////////////////////////////////////////////////////////////////////////
                  $name_rec=$name;
                  $price_rec=$price;
                }
            ?>
            </td>
          </tr>
          <tr>
            <td>
            <?php
                $name = mysql_result($rez,5,"name");
                $file_name = mysql_result($rez,5,"file_name");
                echo "<img src=\"".$file_name."\"width=\"129\" height=\"129\" align=\"left\">";
                echo mysql_result($rez,5,"name");
                echo "<br><a href=\"#\">"."Подробнее"."</a>";
            ?>
            </td>
            <td valign="top">
            <?php
                $quantity = mysql_result($rez,5,"quantity");
                if($quantity>0){echo "В наличии<br>".$quantity." шт.";}
                else{echo "Нет в наличии";}
            ?>
            </td>
            <td valign="top">
            <?php
                $price = mysql_result($rez,5,"price");
                echo $price." грн.";
            ?>
            <form action="#" method="post">
            <br><br><input type="submit" name="korzina1" value="В корзину" size="6" style="background-color: #3366FF; color: #FF6600"/></form>
            <?php
                if(isset($_POST["korzina1"]))
                {
                  $sum = $price; /////////////////////////////////////////////////////////////////////////
                  $name_rec=$name;
                  $price_rec=$price;
                }
            ?>
            </td>
          </tr>

        <tr>
            <td>
            <?php
                $name = mysql_result($rez,6,"name");
                $file_name = mysql_result($rez,6,"file_name");
                echo "<img src=\"".$file_name."\"width=\"129\" height=\"129\" align=\"left\">";
                echo mysql_result($rez,6,"name");
                echo "<br><a href=\"#\">"."Подробнее"."</a>";
            ?>
            </td>
            <td valign="top">
            <?php
                $quantity = mysql_result($rez,6,"quantity");
                if($quantity>0){echo "В наличии<br>".$quantity." шт.";}
                else{echo "Нет в наличии";}
            ?>
            </td>
            <td valign="top">
            <?php
                $price = mysql_result($rez,6,"price");
                echo $price." грн.";
            ?>
            <form action="#" method="post">
            <br><br><input type="submit" name="korzina3" value="В корзину" size="6" style="background-color: #3366FF; color: #FF6600"/></form>
            <?php
                if(isset($_POST["korzina3"]))
                {
                  $sum = $price; /////////////////////////////////////////////////////////////////////////
                  $name_rec=$name;
                  $price_rec=$price;
                }
            ?>
            </td>
          </tr>

          <tr>
            <td>
            <?php
                $name = mysql_result($rez,7,"name");
                $file_name = mysql_result($rez,7,"file_name");
                echo "<img src=\"".$file_name."\"width=\"129\" height=\"129\" align=\"left\">";
                echo mysql_result($rez,7,"name");
                echo "<br><a href=\"#\">"."Подробнее"."</a>";
            ?>
            </td>
            <td valign="top">
            <?php
                $quantity = mysql_result($rez,7,"quantity");
                if($quantity>0){echo "В наличии<br>".$quantity." шт.";}
                else{echo "Нет в наличии";}
            ?>
            </td>
            <td valign="top">
            <?php
                $price = mysql_result($rez,7,"price");
                echo $price." грн.";
            ?>
            <form action="#" method="post">
            <br><br><input type="submit" name="korzina4" value="В корзину" size="6" style="background-color: #3366FF; color: #FF6600"/></form>
            <?php
                if(isset($_POST["korzina4"]))
                {
                  $sum = $price; /////////////////////////////////////////////////////////////////////////
                  $name_rec=$name;
                  $price_rec=$price;
                }
            ?>
            </td>
          </tr>
        </table>
        <!--......................................................................................... -->
        </div>
        </td>
        <td rowspan="2" width="350" valign="top" align="center"><br><br>
        <!--..................................................................-->
        <table align="center" border="1" bordercolorlight="#000000" width="200" cellspacing="0" cellpadding="10" bgcolor="#FFFF00">
          <tr>
            <td colspan="2">КОРЗИНА</td>
          </tr>
          <tr>
            <td colspan="2">
            <?php
            if($sum>0)
            {
             ++$qaunt_tov;
             echo $qaunt_tov." тов.";
             $_SESSION["qaunt_tov1"]=$qaunt_tov;
            }
            else
            {
              echo "Нет товаров";
            }
            ?>
            </td>
          </tr>
          <tr>
            <td>Всего</td>
            <td>
            <?php
                  if($sum>0)
                  {
                  $res1 = $sum+$res1;
                  echo $res1." грн.";
                  $_SESSION["res11"]=$res1;
                  $name_rec1 = $name_rec;
                  $quant_rec=1;
                  $price_rec1 = $price_rec;
                  $db_name1="mybase";	//база данных
                  $table1="temp";	//таблица
                  $host1="localhost";	//хост
                  $link1 = mysql_connect($host1,"root") or die(mysql_errno($link1).mysql_error($link1));
                  $db1 = mysql_select_db($db_name1,$link1) or die(mysql_errno($link1).mysql_error($link1));
                  $sql1 = "INSERT INTO temp(id,name,quantity,price) VALUES('$qaunt_tov','$name_rec1','$quant_rec','$price_rec1')";
                  $rez1 = mysql_query($sql1,$link1);
                  }
                  else
                  {
                    echo "0 грн.";
                  }
            ?>
            </td>
          </tr>
          <tr>
            <td><form action="korzina.php" method="post"><input type="submit" name="korzina_rez" value="Корзина" size="6" style="background-color: #3366FF; color: #FF6600"/></form></td>
            <td><form action="check.php" method="post"><input type="submit" name="form" value="Оформить" size="20" style="background-color: #3366FF; color: #FF6600"/></form></td>

          </tr>
        </table>
        <br><br>
        &nbsp;<a href="#"><img src="image/ppu.jpg" width="180" height="250" alt="" /></a>

        <!--..................................................................-->
        </td>
      </tr>
      <tr>
        <td height="300" align="center"><br>
           Для связи с руководством сайта пишите на:
            icq: 644-1-116<br>
                е-mаil: sla_999@mail.ru
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
        <!--Rating@Mail.ru counter
<!--<a target="_top" href="http://top.mail.ru/jump?from=1743417">-->
<!--<img src="http://da.c9.ba.a1.top.mail.ru/counter?id=1743417;t=75" -->
<!--border="0" height="31" width="38" alt="Рейтинг@Mail.ru"></a>-->
<!--// Rating@Mail.ru counter
        <img src="http://leti.bos.ru/php/counter/counter.phtml?id=29568">&nbsp;&nbsp;</td>счетчик --></td>
      </tr>
    </table>
</body>

</html>