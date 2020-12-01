<?php
$conn = mysqli_connect("localhost","아이디","비밀번호","DB이름");  //데이터베이스 접속하는 코드
//연결상태 점검하는 코드
if (mysqli_connect_errno())  {
  echo "MySQL 연결 오류 : " . mysqli_connect_error();
}
// Delete문을 사용하여 테이블에서 email의 값을 가진 레코드를 삭제함
mysqli_query($conn,"DELETE FROM 테이블이름 WHERE email = '$_POST[email]'");
echo "<meta http-equiv='refresh' content='0; url=testphp.html'>"; 


mysqli_close($conn);
?>