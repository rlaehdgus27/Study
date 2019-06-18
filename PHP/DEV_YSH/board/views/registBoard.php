<?php
// DB 접속
require_once('../resource/dbconfig.php');

?>

<div class="row">
    <!--    좌측여백-->
    <div class="col-md-2">
    </div>
    
    
    <form action="./insertProcess.php" method="post">
    
        <!--    본문-->
        <div class="col-md-8">
            <h2>글 작성하기</h2>
            <hr>
                제목 <input name="title" type="text" class="form-control" placeholder="제목...">
            <br />

                내용 <textarea name="contents" class="form-control" rows="6" placeholder="내용..."></textarea>
            <br>   

            <div class="col-md-6">
                아이디
                <input name="user_id" type="text" class="form-control" placeholder="아이디">
            </div>


            <div class="col-md-6">
                비밀번호
                <input name="pass" type="password" class="form-control" placeholder="비밀번호">            
            </div>
        <br/><br/>
        <hr>
        <button type="submit" class="btn btn-info" >작성완료</button>
        </div>

    
    </form>
    
    <!--    우측여백-->
    <div class="col-md-2">
    </div>
</div>