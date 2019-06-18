<div class="col-md-4">
    <button id="btn1" type="button" class="btn btn-link btn-lg btn-block">시스템 구성</button>
</div>

<div class="col-md-4">
    <button id="btn2" type="button" class="btn btn-link btn-lg btn-block">네트워크</button>
</div>

<div class="col-md-4">
    <button id="btn3" type="button" class="btn btn-link btn-lg btn-block">하드웨어 구성</button>
</div>


<div id="imgArea" class="col-md-12">
    <img src="sub1_2_2.jpg" alt="시스템 구성">               <!-- 동적 반응형인 이미지 -->
</div>


<!-- 기능들 -->

<script>
    $("#btn1").on("click", function() {
        $("#imgArea").html(" <img src='sub1_2_2.jpg' alt='시스템 구성'>");
    });

    $("#btn2").on("click", function() {
        $("#imgArea").html(" <img src='sub1_2_3.jpg' alt='네트워크'>");
    });

    $("#btn3").on("click", function() {
        $("#imgArea").html(" <img src='sub1_2_4.jpg' alt='하드웨어 구성'>");
    });

</script>
