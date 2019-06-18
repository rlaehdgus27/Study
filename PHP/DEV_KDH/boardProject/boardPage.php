

<!DOCTYPE html>
<html lang="en">
    
<?php
require_once("db.php");
?>




<body>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>제목</th>
                <th>날짜</th>
                <th>조회수</th>
                <th>글쓴이</th>
            </tr>
        </thead>
        <tbody>


            <?php
            
            $sql = "select * from board";
            $result = mysqli_query($conn,$sql);
            
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['uid']."</td>";
                echo "<td><a href='javascript:viewDetail(\"" . $row['uid']  . "\")'>". $row['title']  ."</a></td>";
                echo "<td>".$row['created']."</td>";
                echo "<td>".$row['hit']."</td>";
                echo "<td>".$row['user_uid']."</td>";
                echo "</tr>";
            }
            
            
            
            ?>
        </tbody>

    </table>




    <p><a href="create.php">글쓰기</a></p>



</body>
    
    
    <script>
        
    // 상세페이지 보기
    function viewDetail(uid){
//        alert(uid);
        window.location.href = "view.php?uid=" + uid;
    }
    
    
    </script>



</html>
