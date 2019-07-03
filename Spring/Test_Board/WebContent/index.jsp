<%@ page language="java" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert title here</title>

<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

<!-- 합쳐지고 최소화된 최신 CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- 부가적인 테마 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- 합쳐지고 최소화된 최신 자바스크립트 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>


</head>
	<body>
		<div class="row">
			<div class=col-md-4>
			</div>
			
			<div class=col-md-4>
				<table class="table table-hover">
					<thead>
						<th>사원번호</th>
						<th>사원명</th>
						<th>직책</th>
					</thead>
					
					<tbody>
					</tbody>
					
				</table>
			</div>
			
			<div class=col-md-4>
			</div>
		</div>
	</body>
	
	<script>
		$(document).ready(function(){
			//함수 호출
			loadData();
		});
		function loadData(){
			//json
			
			$.ajax({
				url : "LoadData",
				type : "POST",
				success : function(data){
					alert(data);	
				}
			})
		}
	</script>
</html>