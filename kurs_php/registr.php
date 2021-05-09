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
        <td width="10" align="center"><br>
            <form action="key.php" method="get">
                <p align="center"><label for="username">Логин</label><br/>
                <input name="username" type="text" size="18"/></p>
                <p align="center"><label for="passwd">Пароль</label><br/>
                <input name="passwd" type="password" size="18"/><br/>
                <input type="submit" name="sub" value="Вход"/></p>
                <p align="center"><a href="#">Регистрация</a> <br/>
                <p align="center"><a href="#">Забыли пароль?</a> <br/>

            </form>
        </td>
        <td rowspan="2" width="1090" align="center">
        <br><br>
            <form name="registr" action="recbase.php" method="post">
                <table width="450" border="0" cellspacing="0" cellpadding="0" style="padding-top:25px;">
                <tr>
                <td class="table_left_reg"><strong>Ваш логин:*</strong></td>
                <td class="table_centr_reg"><input type="text" name="login" value="" style="width:200px;"></td>
                <td > </td>
                </tr>
                <tr>
                <td class="table_left_reg"><strong>Ваше имя:*</strong></td>
                <td class="table_centr_reg"><input type="text" name="name" value="" style="width:200px;"></td>
                <td > </td>
                </tr>
                <tr>
                <td class="table_left_reg"><strong>Ваша фамилия:*</strong></td>
                <td class="table_centr_reg"><input type="text" name="family" value="" style="width:200px;"></td>
                <td> </td>
                </tr>
                <tr>
                <td class="table_left_reg"><strong>Ваш e-mail:*</strong></td>
                <td class="table_centr_reg"><input type="text" name="email" value="" style="width:200px;"></td>
                <td> </td>
                </tr>
                <tr>
                <td class="table_left_reg"><strong>Пароль:*</strong></td>
                <td class="table_centr_reg"><input type="text" name="pass" value="" style="width:200px;"></td>
                <td> </td>
                </tr>
                <tr>
                <td class="table_left_reg"><strong>Повторить пароль:*</strong></td>
                <td class="table_centr_reg"><input type="text" name="pass2" value="" style="width:200px;"></td>
                <td> </td>
                </tr>
                </table>
                <p align="center"><strong>Поля отмеченные * обязательны для заполнения.</strong></p>
                <input type="submit" name="sub_form_reg" value="зарегистрироваться">
                </form>
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