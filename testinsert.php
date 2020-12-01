<?php


$con=mysqli_connect("localhost","아이디","비밀번호","DB이름"); //데이터베이스 접속하는 코드
//연결상태 점검하는 코드
if (mysqli_connect_errno())
  {
  echo "MYSQL 접속 실패"; //echo는 브라우저 출력하는 코드
  }
//Insert문을 활용하여 MYSQL 테이블에 새로운 레코드 추가하는데 사용되는 코드
$sql="INSERT INTO 테이블이름 (email, name, age, phone) 
VALUES
('$_POST[email]','$_POST[name]','$_POST[age]','$_POST[phone]')"; //매개변수를 받을 때 $_POST[이름]으로 적용합니다.
echo "<meta http-equiv='refresh' content='0; url=testphp.html'>"; 
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "레코드 추가";

mysqli_close($con); //DB접속 종료
?>



