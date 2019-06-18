<?php
// DB 접속
require_once('../resource/dbconfig.php');

?>




<?php
     $title     = $_POST['title'];
     $contetns  = $_POST['contents'];
     $user_id   = $_POST['user_id'];
     $pass      = $_POST['pass'];

     $sql       = " insert into board1";
     $sql      .= " (title, contents, create_dt, user_id, pass) ";
     $sql      .= " values ";
     $sql      .= " ( '".$title."','".$contetns."', sysdate(), '".$user_id."','".$pass. "' ) ";


    $result     = mysqli_query($conn, $sql);
    
    

    if($result == 1){
        // 리스트로 새로고침
        echo "<script>location.href='./listBoard.php';</script>";

    } else {
        echo "<h3>글 작성에 실패하였습니다.</h3>";
        echo "<a href='history.back(-1)' > 돌아가기 </a>";
    }
?>