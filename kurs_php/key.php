<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Hello!</title>
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
                  <li><a href="">������� ������������</a>
                    <ul>
                      <li><a href="#">����������</a></li>
                      <li><a href="#">�������� ����</a></li>
                      <li><a href="#">���������� ����</a></li>
                      <li><a href="#">���������� ����������</a></li>
                    </ul>
                  </li>

                  <li><a href="#">������ � ����������</a>
                    <ul>
                      <li><a href="#">������ ������������</a></li>
                      <li><a href="#">�������� ������</a></li>
                      <li><a href="#">������� ����</a></li>
                      <li><a href="#">��������� ����</a></li>
                      <li><a href="#">���������� �����</a></li>
                      <li><a href="#">�������� �������</a></li>
                      <li><a href="#">����������� ����</a></li>
                      <li><a href="#">������ � ��������</a></li>
                    </ul>
                  </li>

                  <li><a href="#">������� � ���������</a>
                    <ul>
                      <li><a href="#">� �������� ����</a></li>
                      <li><a href="#">������� ��������</a></li>
                      <li><a href="#">������� �������� ����</a></li>
                      <li><a href="#">������������</a></li>
                      <li><a href="#">�������</a></li>
                      <li><a href="#">������ � �����������</a></li>
                      <li><a href="#">���������</a></li>
                    </ul>
                  </li>

                  <li><a href="#">��������� � ������������</a>
                    <ul>
                      <li><a href="#">����</a></li>
                      <li><a href="#">����� ��� �����</a></li>
                      <li><a href="#">����������������</a></li>
                      <li><a href="#">����������</a></li>
                      <li><a href="#">����</a></li>
                      <li><a href="#">�����</a></li>
                      <li><a href="#">������ ���������</a></li>
                    </ul>
                  </li>

                  <li><a href="#">�������� ������������</a>
                    <ul>
                      <li><a href="#">���</a></li>
                      <li><a href="#">����</a></li>
                      <li><a href="#">������</a></li>
                      <li><a href="#">������</a></li>
                      <li><a href="#">�����</a></li>
                      <li><a href="#">��������</a></li>
                      <li><a href="#">�������� �������</a></li>
                      <li><a href="#">��������� ��</a></li>
                      <li><a href="#">����������</a></li>
                    </ul>
                  </li>
                </ul>

            </div>
        <!--//////////////////////////////////////////////////////////////////////////////////////// -->
        </td>
      </tr>
      <tr>
        <td width="20%"><br>
            <form action="key.php" method="get">
                <p align="center"><label for="username">�����</label><br/>
                <input name="username" type="text" size="18"/></p>
                <p align="center"><label for="passwd">������</label><br/>
                <input name="passwd" type="password" size="18"/><br/>
                <input type="submit" name="sub" value="����"/></p>
            </form>
        </td>
        <td rowspan="2">
        <!--///////////////////////////////////////-->
        <?php
          $db_name="mybase";	//���� ������
          $table="users";	//�������
          $host="localhost";	//����
          $user="";		//�����
          $pass="";		//password
          $log = $_GET["username"];
          $pas = $_GET["passwd"];
          $link = mysql_connect($host,"root") or die(mysql_errno($link).mysql_error($link));
          $db = mysql_select_db($db_name,$link) or die(mysql_errno($link).mysql_error($link));
          $rez = mysql_query("select * from users") or die(mysql_errno($link).mysql_error($link));
          $num = mysql_num_rows($rez);
          for($i=0;$i<$num;$i++)
          {
            $row=mysql_fetch_array($rez);
            if(strtolower(stripslashes($row["login"]))==strtolower($log))//���������� ����� � ����� � ������ ���������
            {
              if(strtolower(stripslashes($row["password"]))==strtolower($pas))//���������� ������ � ����� � ������ ���������
              {
                if(strtolower($log)==strtolower($pas))  //admin
                {
                    $from = stripslashes($row["login"]);
                    session_start();
                    $_SESSION["from1"] = $from;
                    header("location: admin.php"); exit;break;
                }
                  $from = stripslashes($row["login"]);
                  $email = stripslashes($row["email"]);
                  session_start();
                    $_SESSION["from1"] = $from;
                    $_SESSION["email1"] = $email;
                    header("location: index.php"); exit;break;
                  //header('Location: enter.php');

                  //include "enter.php";break;
              }
               header('Location: notenter.php');
                exit;break;
              //include "notenter.php";break;
              //echo "������ �� ������!";break;// ������ �� ������
            }
            if($i==$num-1)
            {header('Location: notenter.php');
                exit;break;}
          }

          //���������� ���������� ��� ��������� ������� ������
          mysql_free_result($rez);
          mysql_close($link);
          ?>
        </td>
      </tr>
      <tr>
        <td width="20%"><br>
            3
        </td>
      </tr>
      <tr>
        <td colspan="3">���</td>
      </tr>
    </table>


</body>

</html>
