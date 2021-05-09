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
        <h2 align="center">Наблюдения пчеловодов</h2>
<br />
<p>Чтобы не появилась трутовка
<p>Если под плечико рамки положить старую или мертвую матку, можно удержать пчелосемью от появления матки-трутовки.
<br />
<p>Пчел можно усмирять звуками
<p>Впервые Ф. Гюбер в 1792 г. обнаружил своеобразную реакцию пчел на некоторые звуки: они как бы замирают на соте и остаются неподвижными в течение всего времени, пока продолжается звук. Это явление может быть использовано для усмирения пчел при их осмотре в улье. По сообщению американской пчеловодной печати, наиболее приемлем для этой цели звук частотой 600 гц. Он производится при помощи лампового вибратора и громкоговорителя, который устанавливают на расстоянии от 60 до 120 см от улья. Однако звук не оказывает никакого влияния на летающих пчел, что подтверждает мнение о том, что звуковые рецепторы находятся на ножках пчелы и что звук они воспринимают, сидя на твердом субстрате. Использование данного факта для практических целей вряд ли возможно: для получения реакции "застывания" пчел на соте требуется очень большая сила звука, действующая крайне неприятно на ухо человека.
<br />
<p>Из наблюдений пчеловодов
<p>— Большинство маток вылетает на спаривание на седьмой день после рождения, очень редко — на шестой день. Матка, выйдя из летка, не сразу поднимается в воздух, а возвращается в улей, спустя немного времени выходит, вторично делает небольшой облет и опять заходит в улей, а потом уже выходит на продолжительный облет. Выход матки из улья сопровождает большое количество пчел. Брачный вылет матки длится от 35 минут до 3-х часов.
<p>— Если улей находится на солнцепеке ничем не притененный, то пчелы и матка выводятся с укороченными крыльями и совсем без крыльев. Причина — в повышенной температуре в гнездах, которая доходит до +38°С.
<p>— Преждевременное наступление холодов и зимы можно определить по более раннему прополисованию гнезда и переносу пчелами меда в средние соты гнезда.
<p>— В том случае, если источник взятка находится близко от пасеки, пчелы летят низко над землей, если же источник взятка далеко, пчелы, вылетев из улья, сразу набирают большую высоту, а затем уже летят к источнику взятка.
<p>— Пчелы собирают падь только в том случае, если в природе нет цветущих медоносов.
<br />
<p>Пчелы вместо наседки
<p>У себя в комнате я поместил двух наседок. Они уже 16 дней сидели на яйцах, когда квартиру начали ремонтировать и меня попросили ее освободить. Куриц некуда было устроить, и я решил посадить их под ульи с пчелами. Одной наседке но.зое место не понравилось и она оставила яйца. У меня возникла мысль поместить яйца в улей поверх гнезда пчел. Я плотно закрыл гнездо, чтобы пчелы не прошли под крышу и не зажалили цыплят, положил яйца и накрыл их ватной подушкой. Ровно в срок из всех 15 яиц вывелись цыплята. Надо сказать, что в то время стояла сухая, очень теплая погода, которая, вероятно, тоже способствовала успешному выводу цыплят под крышей улья
<br />
<p>Цвет улья и медосбор
<p>В ульях, окрашенных в темные цвета (красный, зеленый), пчелы собирают больше меда, а в светлые цвета (желтый) — меньше. В темных ульях теплее и семьи в них развиваются лучше.
<br />
<p>Общежитие для маток
<p>Двухлетние матки могут содержаться по 8-10 штук в улье для увеличения посева в связи с тем, что они утратили способность выделять яд.
<br />
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