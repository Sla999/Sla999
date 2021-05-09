<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Моя работа</title>
  <link rel="stylesheet" href="mmstyle.css" type="text/css" media="screen" />
	<script type="text/javascript" src="drop_dow.js"></script>
</head>

<body>
    <table align="center" width="1100" border="1px" cellpadding="0" cellspacing="0" border="0" bordercolorlight="#000000">
      <tr>
        <td colspan="3"><img src="image/baner.jpg" width="1100" height="250" align="top" alt="" />
         <!--//////////////////////////////////////////////////////////////////////////////////////// -->
         <div id="mainmenu">
                <ul id="nav">
                  <li><a href="">История пчеловодства</a>
                    <ul>
                      <li><a href="#">Начинающим</a></li>
                      <li><a href="#">Биология пчел</a></li>
                      <li><a href="#">Медоносная база</a></li>
                      <li><a href="#">Наблюдение пчеловодов</a></li>
                    </ul>
                  </li>

                  <li><a href="#">Методы и технологии</a>
                    <ul>
                      <li><a href="#">Методы пчеловодства</a></li>
                      <li><a href="#">Весенние работы</a></li>
                      <li><a href="#">Зимовка пчел</a></li>
                      <li><a href="#">Подкормка пчел</a></li>
                      <li><a href="#">Разведение маток</a></li>
                      <li><a href="#">Опыление пчелами</a></li>
                      <li><a href="#">Размножение пчел</a></li>
                      <li><a href="#">Борьба с трутнями</a></li>
                    </ul>
                  </li>

                  <li><a href="#">Болезни и вредители</a>
                    <ul>
                      <li><a href="#">О болезнях пчел</a></li>
                      <li><a href="#">Болезни расплода</a></li>
                      <li><a href="#">Болезни взрослых пчел</a></li>
                      <li><a href="#">Профилактика</a></li>
                      <li><a href="#">Лечение</a></li>
                      <li><a href="#">Борьба с вредителями</a></li>
                      <li><a href="#">Лекарства</a></li>
                    </ul>
                  </li>

                  <li><a href="#">Инвентарь и оборудование</a>
                    <ul>
                      <li><a href="#">Ульи</a></li>
                      <li><a href="#">Рамки для ульев</a></li>
                      <li><a href="#">Медопроизводство</a></li>
                      <li><a href="#">Воскоделие</a></li>
                      <li><a href="#">Соты</a></li>
                      <li><a href="#">Матки</a></li>
                      <li><a href="#">Прочий инвентарь</a></li>
                    </ul>
                  </li>

                  <li><a href="#">Продукты пчеловодства</a>
                    <ul>
                      <li><a href="#">Мед</a></li>
                      <li><a href="#">Воск</a></li>
                      <li><a href="#">Забрус</a></li>
                      <li><a href="#">Пыльца</a></li>
                      <li><a href="#">Перга</a></li>
                      <li><a href="#">Прополис</a></li>
                      <li><a href="#">Маточное молочко</a></li>
                      <li><a href="#">Пчелинный яд</a></li>
                      <li><a href="#">Апитерапия</a></li>
                    </ul>
                  </li>
                </ul>

            </div>
        <!--//////////////////////////////////////////////////////////////////////////////////////// -->
        </td>
      </tr>
      <tr>
        <td width="50" align="center"><br>
            <?php
                session_start();
                echo "Здраствуйте, ".$_SESSION['from1']."!";
            ?>
            <form action="index.php" method="get"><br><br>
                <input type="submit" name="sub" value="Выход"/></p>
            </form>
        </td>
        <td rowspan="2" width="1050">
        <br><br>qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq
        </td>
      </tr>
      <tr>
        <td><br>
            3
        </td>
      </tr>
      <tr>
        <td colspan="3">низ</td>
      </tr>
    </table>
</body>

</html>