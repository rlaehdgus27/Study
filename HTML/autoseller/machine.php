<!DOCTYPE html>
<html>

<head>
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>자판기</title>
</head>

<body>
    <h1>자 판 기</h1>
    <p>무엇을 고르시겠습니까?</p>
    <br>
    <p>
        <img src="coke.png" width="90" class="img-rounded">
        <img src="cider.png" width="85" class="img-rounded">
        <img src="pocari.png" width="100" class="img-rounded">
        <br>
        <input id="menu1" type="button" class="btn btn-primary" value="코카콜라" />
        <input id="menu2" type="button" class="btn btn-primary" value="칠성사이다" />
        <input id="menu3" type="button" class="btn btn-primary" value="포카리" />
        <br>
        <br>
        <img src="coffee.png" width="90" class="img-rounded">
        <img src="milk.png" width="85" class="img-rounded">
        <img src="nutmlik.png" width="90" class="img-rounded">
        <br>
        <input id="menu4" type="button" class="btn btn-danger" value="비싼커피" />
        <input id="menu5" type="button" class="btn btn-danger" value="서울우유" />
        <input id="menu6" type="button" class="btn btn-danger" value="대용량율무차" />
    </p>
    <br>
    돈넣는곳: <input onkeyup="call()" id="money1" tyqe="text"> <input type="button" class="btn btn-success" value="돈넣기" id="sub1_btn">
    <br>
    <br>
    현재돈: <div id="show1_money"></div>
    <br>
    <br>
    메뉴가격: <input readonly onkeyup="call()" id="money2" tyqe="text"> 원
    <br>
    <br>
    <div id="show2_money"></div>


    거스름돈: <input type='text' name='change' id='change'>


</body>

</html>


<script>
    /*function*/
    $("#menu1").on("click", function() {
        click_menu1();
    });

    $("#menu2").on("click", function() {
        click_menu2();
    });

    $("#menu3").on("click", function() {
        click_menu3();
    });

    $("#menu4").on("click", function() {
        click_menu4();
    });

    $("#menu5").on("click", function() {
        click_menu5();
    });

    $("#menu6").on("click", function() {
        click_menu6();
    });



    $("#sub1_btn").click(function() {
        var money1 = $("#money1").val();
        insert1_coin(money1);
    });

    $("#sub2_btn").click(function() {
        var money2 = $("#money2").val();
        insert2_coin(money2);
    });



    window.onload = function() {
        document.getElementById("sub1_btn").onclick = processText1;
    }

    window.onload = function() {
        document.getElementById("sub2_btn").onclick = processText2;
    }


    /*Action*/

    function insertPrice(setMoney) {
        $("#money2").val(setMoney);

        var menuPrice = $("#money1").val();

        if (menuPrice < setMoney) {
            $("#change").val("금액이 부족합니다.");
        } else {
            $("#change").val(setMoney - menuPrice);
        }


    }


    // Click Event = menu

    function click_menu1() {
        alert("2,000원");
        insertPrice(2000);
    }

    function click_menu2() {
        alert("1,500원");
        insertPrice(1500);
    }

    function click_menu3() {
        alert("1,800원");
        insertPrice(1800);
    }

    function click_menu4() {
        alert("2300원");
        insertPrice(2300);
    }

    function click_menu5() {
        alert("1850원");
        insertPrice(1850);
    }

    function click_menu6() {
        alert("1600원");
        insertPrice(1600);
    }


    // Click Inset Coin
    function insert1_coin(money1) {
        if (confirm(money1 + "원을 넣으시겠습니까?") == true) {
            alert("넣었습니다");
            $("#show1_money").text(money1);
        } else {
            return;
        }
    }

    function insert2_coin(money2) {
        if (confirm(money2 + "원입니다.") == true) {
            alert("확인되었습니다.");
        } else {
            return;
        }
    }

    // show Coin
    function processText1() {
        var Box1 = document.getElementById("money1");
        var line1 = Box1.value.split("\n");

        var result1 = "<div>";

        for (var i = 0; i < line1.length; i++) {
            result1 += line1[i] + "<br>";
        }

        result1 += "</div>";

        var blk1 = document.getElementById("show1_money");
        blk1.innerHTML = "현재돈" + result1;
    }


    function processText2() {
        var Box2 = document.getElementById("money2");
        var line2 = Box2.value.split("\n");

        var result2 = "<div>";

        for (var j = 0; j < line2.length; j++) {
            result2 += line2[j] + "<br>";
        }

        result2 += "</div>";

        var blk2 = document.getElementById("show2_money");
        blk2.innerHTML = "가격" + result2;
    }


    function call() {
        if (document.getElementById("money1").value && document.getElementById("money2").value) {

            document.getElementById('change').value = parseInt(document.getElementById('money1').value) - parseInt(document.getElementById('money2').value);
        }
    }

</script>
