<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>��� ������</title>
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
                  <li><a href="#">������� ������������</a>
                    <ul>
                      <li><a href="index11.php">����������</a></li>
                      <li><a href="index12.php">�������� ����</a></li>
                      <li><a href="index13.php">���������� ����</a></li>
                      <li><a href="index14.php">���������� ����������</a></li>
                    </ul>
                  </li>

                  <li><a href="#">������ � ����������</a>
                    <ul>
                      <li><a href="index21.php">������ ������������</a></li>
                      <li><a href="index22.php">�������� ������</a></li>
                      <li><a href="index23.php">������� ����</a></li>
                      <li><a href="index24.php">��������� ����</a></li>
                      <li><a href="index25.php">���������� �����</a></li>
                      <li><a href="index26.php">�������� �������</a></li>
                      <li><a href="index27.php">����������� ����</a></li>
                      <li><a href="index28.php">������ � ��������</a></li>
                    </ul>
                  </li>

                  <li><a href="#">������� � ���������</a>
                    <ul>
                      <li><a href="index31.php">� �������� ����</a></li>
                      <li><a href="index32.php">������� ��������</a></li>
                      <li><a href="index33.php">������� �������� ����</a></li>
                      <li><a href="index34.php">������������</a></li>
                      <li><a href="index35.php">�������</a></li>
                      <li><a href="index36.php">������ � �����������</a></li>
                      <li><a href="index37.php">���������</a></li>
                    </ul>
                  </li>

                  <li><a href="#">��������� � ������������</a>
                    <ul>
                      <li><a href="index41.php">����</a></li>
                      <li><a href="index42.php">����� ��� �����</a></li>
                      <li><a href="index43.php">����������������</a></li>
                      <li><a href="index44.php">����������</a></li>
                      <li><a href="index45.php">����</a></li>
                      <li><a href="index46.php">�����</a></li>
                      <li><a href="index47.php">������ ���������</a></li>
                    </ul>
                  </li>

                  <li><a href="#">�������</a>
                    <ul>
                      <li><a href="index51.php">������ ��� ����������</a></li>
                      <li><a href="index52.php">��������� ��� ������� ����</a></li>
                      <li><a href="index53.php">������ ���������</a></li>
                      <li><a href="index54.php">��� ����</a></li>
                      <li><a href="index55.php">����� �����</a></li>
                      <li><a href="index56.php">������������</a></li>
                      <li><a href="index57.php">��� ������ � ����</a></li>
                    </ul>
                  </li>
                </ul>
            </div>
        <!--//////////////////////////////////////////////////////////////////////////////////////// -->
        </td>
      </tr>
      <tr>
        <td width="250" height="100" align="center" valign="top"><br>
            <?php
                session_start();
                if(isset($_SESSION['from1']))
                {
                    echo "�����������, ".$_SESSION['from1']."!";
                    echo "<form action=\"index.php\" method=\"get\"><br><br>";
                    echo "<input type=\"submit\" name=\"sub\" value=\"�����\"/></p></form>";
                    if(isset($_GET['sub']))
                    {
                        session_destroy();
                    }
                }
                else
                {
                     echo "<form action=\"key.php\" method=\"get\">";
                     echo "<p align=\"center\"><label for=\"username\">�����</label><br/>";
                     echo "<input name=\"username\" type=\"text\" size=\"18\"/></p>";
                     echo "<p align=\"center\"><label for=\"passwd\">������</label><br/>";
                     echo "<input name=\"passwd\" type=\"password\" size=\"18\"/><br/><br>";
                     echo "<input type=\"submit\" name=\"sub\" value=\"����\"/></p>";
                     echo "<p align=\"center\"><a href=\"registr.php\">�����������</a><br/>";
                     echo "<p align=\"center\"><a href=\"#\">������ ������?</a><br/>";
                     echo "</form>";
                }

            ?>
        </td>
        <td rowspan="2" width="520" align="center" valign="top">
        <br><br>
          <?php

              echo "<table width = \"400\"  bordercolorlight=\"\#000000\" border = 1 cellspacing =  cellpadding =  >";
              echo "<tr>
                <td align=\"center\">�</td><td>������������</td><td align=\"center\">����</td><td align=\"center\">�����</td>
              </tr>";
                  $db_name="mybase";	//���� ������
                  $table="temp";	//�������
                  $host="localhost";	//����
                  $link = mysql_connect($host,"root") or die(mysql_errno($link).mysql_error($link));
                  $db = mysql_select_db($db_name,$link) or die(mysql_errno($link).mysql_error($link));
                  $rez = mysql_query("select * from temp") or die(mysql_errno($link).mysql_error($link));
                  $num = mysql_num_rows($rez);
                  echo "<form action=\"check.php\" method=\"post\">";
                  for($i=1;$i<=$num;$i++)
                  {
                    echo "<tr>";
                    echo "<td>$i</td>";
                    //echo "<tr>";
                    $rez1 = mysql_fetch_array($rez);
                    echo "<td>$rez1[name]</td>";
                    echo "<td>$rez1[price]</td>";
                    echo "<td><input type=\"checkbox\" name= \"Arr[]\" value= \"$rez1[name]\"></td></tr>";

                  }
               echo "</table>";
               echo "<br><input type=\"submit\" name=\"form\" value=\"��������\" size=\"20\" style=\"background-color: \#3366FF; color: \#FF6600\"/>";
               echo "&nbsp;&nbsp;&nbsp;<input type=\"submit\" name=\"dell\" value=\"�������\" size=\"20\" style=\"background-color: \#3366FF; color: \#FF6600\"/>";


        ?>

        <!--......................................................................................... -->

        </td>
        <td rowspan="2" width="250" valign="top" align="center"><br><br>
        <!--..................................................................-->


        <br><br>
        &nbsp;<a href="#"><img src="image/ppu.jpg" width="180" height="250" alt="" /></a>

        <!--..................................................................-->
        </td>
      </tr>
      <tr>
        <td height="300"><br>
            <!--��� ����� � ������������ ����� ������ ��:
            icq: 644-1-116<br>
                �-m�il: sla_999@mail.ru-->
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
<!--border="0" height="31" width="38" alt="�������@Mail.ru"></a>-->
<!--// Rating@Mail.ru counter
        <img src="http://leti.bos.ru/php/counter/counter.phtml?id=29568">&nbsp;&nbsp;</td>������� -->
      </tr>
    </table>
</body>

</html>