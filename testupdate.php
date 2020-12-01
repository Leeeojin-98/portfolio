<?php
$con=mysqli_connect("localhost","아이디","비밀번호","DB이름"); //데이터베이스 접속하는 코드
//연결상태 점검하는 코드
if (mysqli_connect_errno()) 
  {
    
  echo "MySQL 연결실패 : " . mysqli_connect_error();
  }
//UPDATE문을 활용하여 수정하는 코드인데 ※주의할점 WHERE절은 업데이트할 레코드를 지정하는데 사용됩니다. + WHERE절을 생략하는 경우 모든 레코드가 업데이트 됩니다
mysqli_query($con,"UPDATE 테이블이름 SET name = '$_POST[name]', age = '$_POST[age]', phone = '$_POST[phone]' WHERE email='$_POST[email]'");
echo "<meta http-equiv='refresh' content='0; url=testphp.html'>"; 


mysqli_close($con);
?>