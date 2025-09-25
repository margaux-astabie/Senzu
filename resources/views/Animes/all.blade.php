<h1>Senzu</h1>
<ul>
    @foreach ($animes as $anime)
        <li>
        <a href="{{ route('animes.show', $anime->id) }}">{{ $anime->name }}</a>
                {{ $anime->title }}
                <br>
                <br>
                <img src="{{ $anime->image_url }}" alt="{{ $anime->name }}" style="width: 200px; height: auto;">

                <br>
                <h2>Synopsis:</h2>{{ $anime->description }}
                <br>
                <br>
                <h2>Ma Note:</h2> {{ $anime->rating }} / 5
                <br>
                <h2>Mon Commentaire:</h2> {{ $anime->comments }}
                <a href="{{ route('animes.edit', $anime->id) }}">Editer</a>
            </a>
        </li>
    @endforeach
    <a href="{{ route('animes.create', $anime->id) }}">Ajouter un animé</a>