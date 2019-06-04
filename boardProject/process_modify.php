<?php
require_once("db.php");
?>


<?php





$title = $_POST['title'];
$contents = $_POST['contents'];
$uid = $_GET['uid'];





$sql = "update board set title = '".$title ."', contents = ' ". $contents ."' where uid=".$uid;

$result = mysqli_query ($conn, $sql);

echo $result;

if($result > 0){
    echo "수정완료! <a href='view.php?uid=" . $uid   . "'> 돌아가기 </a> ";
}   else{
    echo "수정실패! <a href='modify.php'> 돌아가기 </a>";
}
?>
