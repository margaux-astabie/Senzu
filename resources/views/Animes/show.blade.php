<h1>{{ $anime->name }}</h1>
<p>Description: {{ $anime->description }}</p>
<p>Note: {{ $anime->rating }}</p>
<p>Commentaire: {{ $anime->comments }}</p>
<img src="{{ $anime->image_url }}" alt="">
<a href="{{ route('list') }}">Retour à la liste des Animés</a> 
