<?php 

require_once("db.php");

?>


<?php


$uid = $_GET['uid'];


$sql = "delete from board where uid= $uid";

$result = mysqli_query ($conn, $sql);

echo $result;


if($result > 0){
    echo "<script>alert('삭제하시겠습니까?');window.location.href='boardPage.php'</script>"; 
} else{
    echo "<script>alert('삭제하시겠습니까?');window.location.href='view.php'</script>"; 
}

