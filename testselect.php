<?php
header("Pragma:no-cache");
header('Content-Type: text/html; charset=utf-8'); //한글 깨짐 방지 코드
$conn=mysqli_connect("localhost","아이디","비밀번호","DB이름"); //데이터베이스 접속하는 코드


if (mysqli_connect_errno()) {
echo "MySQL 연결 실패 : " . mysqli_connect_error();
}
//SELECT를 활용하여 테이블 안에 내용을 불러오는 코드
$sql = "SELECT * FROM 테이블이름"; 
$result = mysqli_query( $conn, $sql );
//mysqli_fetch_array 함수를 이용하여 값을 가져오는 코드, mysqli_fetchc_array 함수는 하나씩 데이터를 읽어오며, 배열 형태로 저장됩니다.
while($row = mysqli_fetch_array($result)){ 
//echo는 브라우저에 출력하는 코드이며 $row[ '이름' ]을 데이터를 출력합니다.
echo $row['email'], "/" ,$row['name'], "/", $row['age'],"/", $row['phone']; 
echo "<br>";

}
mysqli_close($conn);
?>
