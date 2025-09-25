<h1>{{ $anime->name }}</h1>
<p>Description: {{ $anime->description }}</p>
<p>Note: {{ $anime->rating }}</p>
<img src="{{ $anime->image_url }}" alt="">
<a href="{{ route('animes.list') }}">Retour à la liste des Animés</a> 
