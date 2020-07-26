<?php
$con = mysqli_connect('localhost', 'root', 'Wotjd@487', 'sqldb') or die ('연동 실패');
$NUM = $_GET['NUM'];
$sql = "select * from boardtable where NUM= '".$NUM."'";
$ret = mysqli_query($con,$sql);
$rows = mysqli_fetch_assoc($ret);
if(mysqli_connect_error($con)){
    echo "에러 발생 : ",mysqli_connect_error();
    exit();
}
?>
 
        <table class="view_table" align=center>
        <tr>
                <td colspan="4" class="view_title"><?php echo $rows['TITLE']?></td>
        </tr>
        <tr>
                <td class="view_id">작성자</td>
                <td class="view_id2"><?php echo $rows['NAME']?></td>
                <td class="view_hit">시간</td>
                <td class="view_hit2"><?php echo $rows['DT']?></td>
        </tr>
 
 
        <tr>
                <td colspan="4" class="view_CONTENTS" valign="top">
                <?php echo $rows['CONTENTS']?></td>
        </tr>
        </table>
 
 
        <!-- MODIFY & DELETE -->
        <div class="view_btn">
                <button class="view_btn1" onclick="location.href='./index.php'">목록으로</button>
                <button class="view_btn1" onclick="location.href='./modify.php?number=<?=$NUM?>&id=<?=$_SESSION['userid']?>'">수정</button>

                <button class="view_btn1" onclick="location.href='./delete.php?number=<?=$NUM?>&id=<?=$_SESSION['userid']?>'">삭제</button>
        </div>