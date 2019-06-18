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
    
    <h1>수정하기</h1>

    <form action="process_modify.php?uid=<?=$_GET['uid']?>" method="post">
   <table class="table">
       <tr>
            <th>제목</th>
            <th><input name="title" type="text" value="<?=$row['title']  ?>"  /></th>
       </tr>
       
       <tr>
            <th>작성자</th>
            <th><input type="text" value="<?=$row['user_uid']  ?>"readonly  /></th>
       </tr>
       
       <tr>
            <th>작성시간</th>
            <th><input type="text" value="<?=$row['created']  ?>" readonly/></th>
       </tr>
       
       
       <tr>
            <th>내용</th>
            <th><input name="contents" size="30" type="text" value="<?=$row['contents']  ?>"  /></th>
       </tr>
       
       
       
    </table>
        
    
  


    <button type="submit" class="btn btn-primary" >완료</button>
    
        
        </form>


</body>


<script>
    
</script>


</html>
