<?php
// DB 접속
require_once('../resource/dbconfig.php');

?>



<body>
    <div class="row">

        <!--좌측 여백-->
        <div class="col-md-1">
        </div>


        <div class="col-md-10">
            <h2>게시판</h2>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="col-md-1"><input class="chk" type="checkbox" /></th>
                        <th class="col-md-1">번호</th>
                        <th class="col-md-4">제목</th>
                        <th class="col-md-2">작성자</th>
                        <th class="col-md-2">작성일</th>

                        <th>조회수</th>
                    </tr>    
                </thead>


                <tbody id="myTbody">

                    <?php
                    
                        // DATABASE 내용 호출하기
                    $pageStart = $_GET['page'] * 10;
                    $pageLimit = 10;
                    
                    
                    $sql    = "select * from board1 limit ".$pageStart. " , " . $pageLimit;

                    $result = mysqli_query($conn, $sql);
                        
                    $sql2   = "select count(*) as cnt from board1";
                    $result2 =  mysqli_query($conn, $sql2);
                    
                    $cntData = mysqli_fetch_array($result2);
                    $cnt = $cntData['cnt'];
                    
                    $cnt = ($cnt % 10 > 0) ? (floor($cnt / 10))+1 : (floor($cnt / 10));
                    
                    
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "  <td><input class='chk' type='checkbox' value='". $row['uid']  ."'/></td>";
                        echo "  <td>". $row['uid'] ."</td>";
                        echo "  <td><a href='./detail.php?uid=". $row['uid']."'> ". $row['title'] ."</a></td>";
                        echo "  <td>". $row['user_id'] ."</td>";
                        echo "  <td>". $row['create_dt'] ."</td>";

                        echo "  <td>". $row['views'] ."</td>";
                        echo "</tr>";

                    }


                    
                    ?>

                </tbody>
            </table>
            
            
            <?php
                for($i = 0; $i < $cnt; $i++){
                    echo "<a href='./listBoard.php?page=".$i."'>". ($i+1) . "</a>&nbsp;&nbsp;&nbsp;";
                }
            
            ?>
            
            
            <div style="float:right">
                <button type="button" class="btn btn-danger" onclick="deleteBtn()">삭제</button>
                <button type="button" class="btn btn-info"  onclick="registBtn()">글작성</button>
            </div>
        </div>


        <!--우측 여백-->
        <div class="col-md-1">
        </div>
    </div>
</body>


<script>
    
    //삭제버튼
    function deleteBtn(){
        $('.chk:checked').each(function() { 
            alert($(this).val());
        });

    }
    
    
    //작성버튼
    function registBtn(){
        window.location.href = "./registBoard.php";
    }
</script>






























