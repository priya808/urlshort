
<!DOCTYPE html>
<html>

	<head>
	
		<title>url shortner</title>
		
	</head>
	<body>
		
		<input type="text" name="url">
		<input type="submit" value="Shorten My URL"><br>

		<p class="error"></p>

		<script type="text/javascript">
			$(document).ready(function(){
				$('input[type="submit"]').click(function(e){
					e.preventDefault();

				$('.errors').html('');
				var url = $('input[name="url"]').val(); 

				if(url.length == 0){
					$('.errors').html('whoops! please enter a URL!');
					return false;
				}

				});
			});
		</script>
	</body>
</html>