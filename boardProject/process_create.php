<?php
require_once("db.php");

$title      =  $_POST['title'];
$contents   =  $_POST['contents'];
$user_id    =  $_POST['user_id'];

$sql        = "insert into board ( title, contents, created, hit, user_uid) values('".$title ."', '". $contents. "', " . "now()"  . ", 0  ,'" . $user_id ."')";
    


$result     = mysqli_query($conn, $sql);


echo $result;   
 
if($result > 0) {
    echo "글쓰기 성공!  <a href='boardPage.php'> 돌아가기 </a>";
} else {
    echo "글쓰기 실패! <a href='create.php'> 돌아가기 </a>";
}


?>