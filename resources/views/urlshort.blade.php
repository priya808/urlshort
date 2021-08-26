
		<h1 >Create url-shortener</h1>

		<form method="post" action="{{url('/short') }}" method="post">

			{{csrf_field()}}
		
		<input type="text" name="url" id="url"placeholder="Enter your URL">

		<button type="submit">short url</button>
	</form>



