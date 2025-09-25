<h1>{{ $anime->name }}</h1>
<p>Catégorie: {{ $anime->description }}</p>
<img src="{{ $anime->image_url }}" alt="">
<a href="{{ route('animes.list') }}">Retour à la liste des Animés</a> 
