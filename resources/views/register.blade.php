<html>
	<head>
		<title>register</title>
	</head>
	<body>
		<form method="post" action="{
		{route('register')}}">
			@csrf

			<!-- Name -->
			<div>

			<label for ="firstname" :value="__('First Name')">FirstName</label><br>
			<input id="firstname" class="block mt-1 w-full" type="text" name="firstname" required autofocus/>
			</div>

			<div>
			<label for ="lastname" :value="__('Last Name')">LastName</label><br>
			<input id="lasttname" class="block mt-1 w-full" type="text" name="lastname" required autofocus/>
			</div>

			<div>
			<label for ="Username" :value="__('User Name')">username</label><br>
			<input id="Usertname" class="block mt-1 w-full ml-3" type="text" name="Username" required autofocus/>
			</div>

			<label for ="password" :value="__('email')">password</label><br>
			<input id="password" class="block mt-1 w-full" type="text" name="password" required autofocus/>

				<div>
			<label for ="Confirm-password" :value="__('Confirm-password')">Email</label><br>
			<input id="Confirm-password" class="block mt-1 w-full" type="text" name="Confirm-password" required autofocus/>
			</div>
			</div>
		</form>
	</body>
</html>