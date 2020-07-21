
<?php
$con = mysqli_connect('localhost', 'root', 'Wotjd@487', 'sqlDB') or die ('데이터베이스 연결에 문제가 있습니다.\n관리자에게 문의 바랍니다.');
$sql = "select * from board";
$ret = mysqli_query($con,$sql);


if(mysqli_connect_error($con)){
    echo "오류원인 : ",mysqli_connect_error();
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>자유게시판 | Kurien's Library</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

</head>

<body>
	<article class="boardArticle">
		<h3>자동차 ICT학과</h3>
		
		<table>
			<caption class="readHide"></caption>
			<thead>
			</thead>
			<tbody>
			

					<?php
					echo "<h1> 게시판이 </h1>";
					echo "<table border=1>";
					echo "<tr>";
                    echo "<th>제목</th><th>작성자</th><th>게시일</th><th>수정</th><th>삭제</th>"; // 목차
                    echo "</tr>";
                    
                    while($row = mysqli_fetch_array($ret)) {
                        echo "<tr>";
                       
                        echo "<td>","<a href='Content.php'>", $row['TITLE'],"</a></td>";
                        // echo "<td>",$row['CONTENT'], "</td>";  제목을 클릭하면 내용 확인
                        echo "<td>",$row['userID'], "</td>";
                        echo "<td>",$row['DATE'], "</td>";
                        echo "<td>", "<a href='update.php?userID=>", $row['userID'], "'>수정</a></td>";
                        echo "<td>", "<a href='delete.php?userID=>", $row['userID'], "'>삭제</a></td>";
                        echo "</tr>";
                    }
                    mysqli_close($con);
					echo "</table>";
					echo "<br> <a href='hoseomain.html'> <--초기화면</a> ";
					echo "<br> <a href='upboard.php'> 글 쓰기</a> ";
					?>
			</tbody>
		</table>
	</article>
</body>
</html>