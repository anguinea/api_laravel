<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>

<body>

	<a class="redirect" href="/team">TEAM</a>

	<form class="header" action="{{ route('name_post') }}" method="post">
		@csrf
	    <input type="text" name="hero_name">
	    <button>Search</button>
	</form>	  	
		
	<div class="main-carousel">
		@foreach ($heros->results as $key => $hero)


		<div class="carousel-cell">
			
			<div class="left">
				<h1>{{ $hero->biography->{'full-name'} }} <a>alias</a> {{ $hero->name }}</h1>
				<img src="{{ ($hero->image->url) }}">
			</div>

			<div class="right">

				<h1>Appearance Table</h1>
				<div class="grid-container">
				  <div id="d1"><a>Alignement</a></div>
				  <div id="d2"><a>Race</a></div>
				  <div id="d3"><a>Gender</a></div>  
				  <div id="d4"><a>Height</a></div>
				  <div id="d5"><a>Weight</a></div>
				  <div id="d6">{{ $hero->biography->alignment }}</div>
				  <div id="d7">{{ $hero->appearance->race }}</div>
				  <div id="d8">{{ $hero->appearance->gender }}</div>
				  <div id="d9">{{ $hero->appearance->height[1] }}</div>
				  <div id="d10">{{ $hero->appearance->weight[1] }}</div>
				</div>

				<br>

				<p><a>Place of birth: </a>{{ $hero->biography->{'place-of-birth'} }}</p>
				
				<br>

				<p class="aliases"><a>Other Aliases: </a>
					@foreach( $hero->biography->aliases as $key => $aliase)
				    	{{ $aliase }}, 
					@endforeach
				</p>
				

				<div class="powerstat">
				  @foreach($hero->powerstats as $key => $powerstat)
					 <ul>
					    <li> {{ $key }} : {{ $powerstat }}%</li>
						<progress value="{{ $powerstat }}" max="100"> ></progress>
					</ul>
				  @endforeach
				</div>

				<br>
				
				<p><a>First appearance: </a>{{ $hero->biography->{'first-appearance'} }}</p>
				
				<br>

				<p><a>Publisher: </a>{{ $hero->biography->publisher }}</p>
				
				<br>

				<form class="team" action="{{ route('insert_hero') }}" method="post">
					@csrf
					<input type="text" name="name" value="{{ $hero->name }}">
					<input type="text" name="image" value="{{ $hero->image->url }}">
					<input type="number" name="intelligence" value="{{ $hero->powerstats->intelligence }}">
					<input type="number" name="strength" value="{{ $hero->powerstats->strength }}">
					<input type="number" name="speed" value="{{ $hero->powerstats->speed }}">
					<input type="number" name="durability" value="{{ $hero->powerstats->durability }}">
					<input type="number" name="power" value="{{ $hero->powerstats->power }}">
					<input type="number" name="combat" value="{{ $hero->powerstats->combat }}">
					<button>+ Add to my team</button>
				</form>
			
			</div>
		</div>
		@endforeach
	</div>

	
	
</body>

	<script src="{{ asset('js/hero.js') }}"></script>
</html>