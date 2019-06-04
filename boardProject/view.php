<?php
require_once("db.php");
?>

<?php
        
//            echo $_GET['uid'];
            
        
            $sql = "select * from board where uid=" . $_GET['uid'];
            $result= mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
          
    ?>


<!doctype html>
<html>

<head>
    <meta charset="utf-8">

</head>

<body>


    <h1>상세보기</h1>


    <table class="table">
        <tr>
            <th>제목</th>
            <th><input type="text" value="<?=$row['title']  ?>" readonly /></th>
        </tr>

        <tr>
            <th>작성자</th>
            <th><input type="text" value="<?=$row['user_uid']  ?>" readonly /></th>
        </tr>

        <tr>
            <th>작성시간</th>
            <th><input type="text" value="<?=$row['created']  ?>" readonly /></th>
        </tr>


        <tr>
            <th>내용</th>
            <th><input size="30" type="text" value="<?=$row['contents']  ?>" readonly /></th>
        </tr>



    </table>




    <button type="button" class="btn btn-primary" onclick="clickModifiedBtn(<?=$_GET['uid']?>)">수정</button>


    <button type="button" class="btn btn-primary" onclick="clickdelete(<?=$_GET['uid']?>)">삭제</button>

    <button type="button" class="btn btn-primary" onclick="clickreturn()">돌아가기</button>

</body>




<script>
    function clickModifiedBtn(uid) {
        window.location.href = "modify.php?uid=" + uid;
    }

    function clickreturn() {
        window.location.href = "boardPage.php";
    }

    function clickdelete(uid){
        
        window.location.href = "process_delete.php?uid=" +  uid;
        
        
    }
    
</script>


</html>
