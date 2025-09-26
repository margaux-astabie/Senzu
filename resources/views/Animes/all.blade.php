<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senzu - Mes Animes</title>
    <style>
        body {
            background-color: #14181c;
            color: #d1d5db;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background: #202830;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 6px rgba(0,0,0,0.5);
        }

        header h1 {
            color: #00e054;
            margin: 0;
        }

        header a {
            color: #fff;
            font-weight: bold;
            background: #00e054;
            padding: 8px 14px;
            border-radius: 6px;
            transition: background 0.2s;
        }

        header a:hover {
            background: #00b843;
        }

        .anime-list {
            max-width: 1000px;
            margin: 40px auto;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 25px;
            padding: 0 20px;
        }

        .anime-card {
            background: #1c252e;
            border-radius: 10px;    
            box-shadow: 0 4px 10px rgba(0,0,0,0.4);
            display: flex;
            flex-direction: column;
            transition: transform 0.2s;
        }

        .anime-card:hover {
            transform: translateY(-5px);
        }

        .anime-card img {
            width: 100%;
            height: 350px;
            object-fit: cover;
        }

        .anime-content {
            padding: 15px;
            flex-grow: 1;
        }

        .anime-content h2 {
            margin: 0 0 10px;
            font-size: 1.2rem;
            color: #fff;
        }

        .anime-content p {
            font-size: 0.9rem;
            color: #9ca3af;
            margin-bottom: 10px;
        }

        .anime-actions {
            display: flex;
            justify-content: space-between;
            padding: 12px 15px;
            background: #202830;
        }

        .anime-actions a {
            color: #00e054;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.2s;
        }

        .anime-actions a:hover {
            color: #00b843;
        }
    </style>
</head>
<body>
    <header>
        <h1>🎬 Senzu</h1>
        <a href="{{ route('animes.create') }}">+ Ajouter un animé</a>
    </header>

    <main>
        <div class="anime-list">
            @foreach ($animes as $anime)
                <div class="anime-card">
                    <img src="{{ $anime->image_url }}" alt="{{ $anime->name }}">
                    <div class="anime-content">
                        <h2>
                            <a href="{{ route('animes.show', $anime->id) }}" style="color:#00e054; text-decoration:none;">
                                {{ $anime->name }}
                            </a>
                        </h2>
                        <p><strong>Note :</strong> {{ $anime->rating }} / 5 ⭐</p>
                        <p><strong>Commentaire :</strong> {{ $anime->comments }}</p>
                        <p><strong>Synopsis :</strong> {{ Str::limit($anime->description, 100) }}</p>
                    </div>
                    <div class="anime-actions">
                        <a href="{{ route('animes.edit', $anime->id) }}">✏️ Editer</a>
                        <a href="{{ route('animes.delete', $anime->id) }}">🗑️ Retirer</a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>