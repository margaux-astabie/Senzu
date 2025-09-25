<h1>Senzu</h1>
<ul>
    @foreach ($animes as $anime)
        <li>
        <a href="{{ route('animes.show', $anime->id) }}">{{ $anime->name }}</a>
                {{ $anime->title }}
            </a>
        </li>
    @endforeach