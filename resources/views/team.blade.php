<!DOCTYPE html>
<html>

<head>
	<title>Team</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>

<body>

	<a class="redirect" href="/">HOME</a>

	<div id="home">
		<h1>Here's your team!</h1>
	</div>
	
	<div class="team-parent">

		@foreach ($heros as $key => $hero)

			<div class="id-card">

				<h2>{{ $hero->name }}</h2>
				<img src="{{ ($hero->image) }}">

				<form class="delete" action="{{ route('delete_hero') }}" method="post">
					@csrf
					<input type="text" name="name" value="{{ $hero->name }}">
					<button><img src="{{ asset('images/minus.png') }}"></button>
				</form>
					

			</div>

		@endforeach

	</div>

	<div id="stat_title"><h1>Your team's powerstats</h1></div>

	<div class="stats">

		@foreach($average as $key => $powerstat)

		<ul>
			<li> {{ $key }} : {{ round($powerstat) }}%</li>
			<progress value="{{ round($powerstat) }}" max="100"> ></progress>
		</ul>

		@endforeach

	</div>

</body>

</html>