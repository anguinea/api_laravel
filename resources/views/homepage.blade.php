<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>

<body>

	<a class="redirect" href="/team">TEAM</a>

	<div id="home">
		<h1>Welcome to the adventure!</h1>

		<form class="header" action="{{ route('name_post') }}" method="post">
			@csrf
		    <input type="text" name="hero_name">
		    <button>Search</button>
		</form>

		<p>If you don't have a superhero name in mind, you can start by looking for a color.<br>You can also create your own team of superheroes and find out her power stats.<br>Have fun!</p>
	</div>

</body>
</html>