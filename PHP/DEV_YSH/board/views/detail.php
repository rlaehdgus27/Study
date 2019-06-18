<?php
// DB 접속
require_once('../resource/dbconfig.php');

?>


<?php
// 데이터 조회
$uid    = $_GET['uid'];

$sql    = " select * from board1 where uid=".$uid;
$result = mysqli_query($conn,$sql);

$data   = mysqli_fetch_array($result);

$password = $data['pass'];
?>
<body>
    <div class="row">
        <!--    좌측여백-->
        <div class="col-md-2">
        </div>


        <form id="frm" action="./modified.php" method="post">

            <!--    본문-->
            <div class="col-md-8">
                <h2>상세내용</h2>
                <hr>
                    제목 <input name="title" type="text" class="form-control" value="<?php echo $data['title'];?> ">
                <br />

                    내용 <input type="text" style="height:200" name="contents" class="form-control" rows="6" value="<?php echo $data['contents'];?>" >
                <br>   

                <div class="col-md-6">
                    아이디
                    <input name="user_id" type="text" class="form-control" value="<?php echo $data['user_id'];?>" >
                </div>


                <div class="col-md-6">
                    비밀번호
                    <input id="pass" name="pass" type="password" class="form-control">            
                </div>
            <br/><br/>
            <hr>
            <button type="button" class="btn btn-info" onclick="ssss()">수정완료</button>
            <button type="button" class="btn btn-primary" onclick="window.location('./listBoard.php')" >목록보기</button>
            </div>


        </form>

        <!--    우측여백-->
        <div class="col-md-2">
        </div>
    </div>
</body>


<script>

    function ssss(){
        var pass = $("#pass").val();
        var dbPass = <?php echo json_encode($password); ?>
        
        if(pass == dbPass){
            //서브밋
            $("#frm").submit();
        } else {
            // 경고
            alert("비밀번호가 일치하지 않습니다.")
        }
            
//            
//            
//        if(){
//            // 일치하면 서브밋   
//        } else {
//           // 일치하지 않으면 비밀번호가 틀렷습니다.
//        }
        
    }
</script>
