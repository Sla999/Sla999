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
        <td width="320" height="100" align="center" valign="top"><br>
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
        <td rowspan="2" width="900">
        <br><br><div id="text">
        <h2 align="center">Как продаются пчелы, в чем их покупать?</h2>
<br />
<p>Пчелосемьи можно купить несколькими вариантами, а можно даже и бесплатно получить, но обо всё по порядку.
<br />
<p>Первый вариант покупки пчел – это вариант покупки вместе с ульем, гнездом (рамки с отстроенными восковыми сотами). Самый простой и дорогостоящий вариант. В этом случае нужно всего лишь придти к продавцу-пчеловоду, скрепить ульи (что бы не разъехались при перевозке..) и отвезти на новое их место дислокации. При этом пчелы сразу же готовы к сбору мёда, от них можно сделать отводок. Т.е. пчелы как пчелы :)
<br />
<p>Вариант номер два – покупка пакетов пчел. Пакет пчел - это небольшой отводок (часть) пчелиный семьи, содержащий около 1,2 кг. молодых пчел и плодную матку. Эти пчелы помещаются в деревянный ящик, наподобие посылочного – т.н. пакет. Пакеты бывают рамочные и безрамочные.
<br />
<p>Чаще всего встречаются рамочные пакеты, т.е. помимо самих пчел в них помещают 4 (или 6) рамок на двух-трёх из которых имеется расплод и две рамки с кормом для пчел (мёдом и (пергой). Такие пакеты заказывают с южных регионов в мае, если купить позже, то с них мёда не получите. После доставки на место рамочные пакеты ставят рядом с подготовленными ульями и открыв их, переносят в ульи рамки. Оставшихся пчел на стенках в пакете стряхивают туда же в улей. Эта семейка при наличии здоровых пчел и хорошей матке и при обилии кормов начинает быстро развиваться и вполне может в итоге заготовить корма себе на зиму и принести немножко мёда для пчеловода. Уход за ней – своевременное расширение гнезда.
<br />
<p>Безрамочные пакеты бывают реже, но так же встречаются. Единственное отличие от рамочных в том, что в ящике-пакете содержаться только пчелы без рамок. В качестве корма у них либо сироп налитый в спец кормушку, либо медовое тесто. При доставке на место пчел стряхивают в ульи на вощину, либо на заранее закупленную (взятую, украденную :) (шутка)) готовую сушь (отстроенные рамки вощины) и дают в кормушках сироп.
<br />
<p>Ещё один вариант покупки пчел – покупка роя, например у соседа. Роевая пора в европейской части РФ это май-середина июня (от юга к северу). По сути – это тот же безрамочный пакет пчел, но созданный не искусственным делением семьи пчел, а естественным размножением. Чаще всего с роем выходит старая матка, либо молодая неплодная, что является минусом. Так же к отрицательной стороне относится то, что роевые пчелы – это плохие пчелы, они, чаще всего мало дают мёда, роевая черта передается генетически, поэтому не стоит связываться. Единственным плюсом может быть, что масса роя может быть больше массы пчелопакета.
<br />
<p>Ну и наконец, раз уж дело зашло о роях, то следует учесть, что частенько случается, что пчеловод зевает во время выхода роя и тот улетает.. Умные люди придумали развешивать по деревьям в районах где находятся пасеки специальные ловушки в которые нередко селятся те самые улетевшие рои. Ловушки выглядят как всё тот же рамочный пакет пчел с летком в стенке посередине (вообще конструкций много, кто во что горазд, не в этом суть). В него помещают рамки с вощиной, сотами (если есть), и развешивают по деревьям и ждут пока клюнет. Да, чуть не забыл (!!!), не надо сидеть под деревом и ждать. Повесили, запомнили место (-а) и пошли домой. Через недельку прошлись проверили… Развешивать ловушки для пчел следует в начале мае и пусть висят до конца лета. Подробнее о ловле бродячих роев можно почитать здесь.
</div>
        </td>
        <td rowspan="2" width="380" valign="top" align="center"><br><br>
        <!--..................................................................-->
        <table align="center" style=" table-layout:  auto" border="1" bordercolorlight="#000000" width="200" cellspacing="0" cellpadding="10" bgcolor="#FFFF00">
          <tr>
            <td colspan="2" align="center">КОРЗИНА</td>
          </tr>
          <tr>
            <td colspan="2" align="center">Нет товаров</td>
          </tr>
          <tr>
            <td align="center">Всего</td>
            <td align="center">0 руб</td>
          </tr>
          <tr>
            <td align="center"> <input type="submit" name="korzina" value="Корзина" size="6" style="background-color: #3366FF; color: #FF6600"/></td>
            <td align="center"><input type="submit" name="form" value="Оформить" size="20" style="background-color: #3366FF; color: #FF6600"/></td>
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