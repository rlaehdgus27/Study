<!DOCTYPE html>
<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.4.1.js"
                integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
                crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <title>자판기</title>
    </head>    
        <body>
            <h1>자 판 기</h1>
            <p>무엇을 고르시겠습니까?</p>
            <br>
            <p>
                <input id="menu1" type="button" value="콜라"/>
                <input id="menu2" type="button" value="사이다" />
                <input id="menu3" type="button" value="포카리" />
                <input id="menu4" type="button" value="커피" />
                <input id="menu5" type="button" value="우유" />
                <input id="menu6" type="button" value="율무차" />
            </p>
            <br>
            돈넣는곳: <input id="money" tyqe="text"> <input type="button" value="돈넣기" id="sub_btn">
            
            
        </body>
</html>
<script>
    
    /*function*/
    $("#menu1").on("click", function(){
        click_menu1();
    });
    
     $("#menu2").on("click", function(){
        click_menu2();
    });
    
     $("#menu3").on("click", function(){
        click_menu3();
    });
    
     $("#menu4").on("click", function(){
        click_menu4();
    });
    
     $("#menu5").on("click", function(){
        click_menu5();
    });
    
     $("#menu6").on("click", function(){
        click_menu6();
    });
    
    $("#sub_btn").click(function(){
        var money = $("#money").val();
        insert_coin(money);
    });
    
    

    
    /*Action*/
    
    
    // Click Event = menu
    function click_menu1(){
          alert("2,000원");
    }
    
    function click_menu2(){
          alert("1,500원");
    }
    
    function click_menu3(){
          alert("1,800원");
    }
    
    function click_menu4(){
          alert("500원");
    }
    
    function click_menu5(){
          alert("400원");
    }
    
    function click_menu6(){
          alert("500원");
    }
    
    
    // Click Inset Coin
    function insert_coin(money){
         if(confirm( money + "원을 넣으시겠습니까?") == true){
            alert("넣었습니다");
        }
        else{
            return ;
        }
    }
    
    
   
    
   
</script>
