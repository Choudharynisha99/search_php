<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Engain Using By PHP AND Jquery</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	
</head>
<body>

	<div class="container w-50%">
		<div class="row">

				<div class="text-center col-sm-12 mt-5 md-4">
					<h1>PHP MySQL Live Search</h1>
				</div>
				<input type="text" class="form-control d-flex justify-content-center" id="live" name="live" autocomplete="off" placeholder="Search.....">


		</div>
	</div>


  <div id="searchresult">
  	
  	

  </div>

<script src="jquery.js"></script>
	<script>
			
			$(document).ready(function(){

				$('#live').keyup(function(){

					let input = $(this).val();

					if(input != ''){
						
							 	$.ajax({
							url:'live_srch.php',
							type:'POST',
							data : {input:input},
							success : function(data){

								$('#searchresult').html(data);
								$('#searchresult').css('display','block');

							}
							
						}); 
							 }else{
							 	$('#searchresult').css('display','none');
							 }

				});
				
			});

	</script>
</body>
</html>


						<!-- if (input != "") {
						$.post(
							'live_srch.php',
							 {input:input},
							 function(data){
								$('#searchresult').html(data);
							}
						)
					}else{
						$('#searchresult').css('display','none');
					}
				}) -->

				<!-- if (input != "") {
							 	$.ajax({
							url:'live_srch.php',
							type:'POST',
							data : {input:input},
							success : function(data){
								$('#searchresult').html(data);
							 	$('#searchresult').css('display','block');

							}
							
						}); 
							 }else{
							 	$('#searchresult').css('display','none');
							 } -->

