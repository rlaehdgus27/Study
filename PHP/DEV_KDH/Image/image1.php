  <body>


      <!-- WEB 표준 -->
      <div class="row" style="margin-left:20px;">
          <!-- row start-->
          <h1>Button</h1>

          <table id="table" class="table table-hover">


          </table>


          <!-- left area in row -->
          <div class="col-md-4"></div>

          <!-- center area in row -->
          <div class="col-md-4">
              <div id="pictureArea"></div>
          </div>

          <!-- right area in row -->
          <div class="col-md-4"></div>
      </div> <!-- row end-->

  </body>


  <script>
      $(document).ready(function() {
          var tag = "";

          var size = 10;  // 디렉토리 내에 파일의 개수 사진파일의 개수
          for (var i = 1; i < size; i++) {
              tag += "<td>";
              tag += "    <button id='btn" + i + "' type='button' class='btn btn-primary' onclick='viewPicture(" + i + ")'>" + i + "</button>";
              tag += "</td>";

          }

          $("#table").html(tag);


      });



      // click Area===============================================================





      // function Area===============================================================







      function viewPicture(pictureName) {
          pictureName += ".jpg";

          var tag = "";
          tag += "<img src='" + pictureName + "' class='img-circle' style='width:250px; height:250px;'>";

          $("#pictureArea").html(tag);

      }

  </script>
