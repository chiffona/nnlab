<?php
include $_SERVER['DOCUMENT_ROOT']."/db.php";

$bno = $_GET['idx'];
$sql = mq("delete from board where idx='$bno';");
?>
<script type="text/javascript">alert("�����Ǿ����ϴ�.");</script>
<meta http-equiv="refresh" content="0 url=/" />

