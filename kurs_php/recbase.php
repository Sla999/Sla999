<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>��� ������</title>
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
        <td width="10" align="center"><br>
            <form action="key.php" method="get">
                <p align="center"><label for="username">�����</label><br/>
                <input name="username" type="text" size="18"/></p>
                <p align="center"><label for="passwd">������</label><br/>
                <input name="passwd" type="password" size="18"/><br/>
                <input type="submit" name="sub" value="����"/></p>
                <p align="center"><a href="#">�����������</a> <br/>
                <p align="center"><a href="#">������ ������?</a> <br/>

            </form>
        </td>
        <td rowspan="2" width="1090" align="center">
        <br><br>
            <?php
               //$db = mysql_connect ('localhost' , 'root' , 'pass');
                //$mess = mysql_select_db ('project1' , $db);
                $login = $_GET['login'];
                $name = $_GET['name'];
                $family = $_GET['family'];
                $email = $_GET['email'];
                $pass = $_GET['pass'];
                $db_name="mybase";	//���� ������
                $table="users";	//�������
                $host="localhost";	//����
                $link = mysql_connect($host,"root") or die(mysql_errno($link).mysql_error($link));
                $db = mysql_select_db($db_name,$link) or die(mysql_errno($link).mysql_error($link));
                $sql = "INSERT INTO users(id,login,name,family,email,password) VALUES(null,'$login','$name','$family','$email','$pass')";
                $rez = mysql_query($sql,$link);
                echo "<script type='text/javascript'>alert ('�� ������� ������������������!');</script>";
            ?>
        </td>
      </tr>
      <tr>
        <td><br>
            3
        </td>
      </tr>
      <tr>
        <td colspan="3">���</td>
      </tr>
    </table>
</body>

</html>