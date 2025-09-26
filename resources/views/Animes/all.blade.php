<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senzu - Mes Animes</title>
    <style>
        body {
            background-color: #190933;
            color: #d1d5db;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background: #190933;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 6px rgba(0,0,0,0.5);
        }

        header h1 {
            color: #ffecd1;
            margin: 0;
        }

        header a {
            color: #ffecd1;
            font-weight: bold;
            background: #b084cc;
            padding: 8px 14px;
            border-radius: 6px;
            transition: background 0.2s;
        }

        header a:hover {
            background: #665687;
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
            background: #b084cc;
            border-radius: 10px;    
            box-shadow: 0 4px 10px rgba(0,0,0,0.4);
            display: flex;
            flex-direction: column;
            transition: transform 0.2s;
             overflow: hidden;
        }

        .anime-card:hover {
            transform: translateY(-5px);
        }

        .anime-card img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-top-left-radius: 10px;  
            border-top-right-radius: 10px; 
            
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
            color: #ffecd1;
            margin-bottom: 10px;
        }

        .anime-actions {
            display: flex;
            justify-content: space-between;
            padding: 12px 15px;
            background: #665687;
        }

        .anime-actions a {
            color: #190933;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.2s;
        }

        .anime-actions a:hover {
            color: #190933;
        }

        
        .logo-container {

  justify-content: center; /* centre horizontalement */
  margin-bottom: 15px;      /* espace sous le logo */
}

.title-logo {
  width: 80px;   /* ajuste la taille à ton goût */
  height: 70px;
}

    </style>
</head>
<body>
    <header>
          <img src="../../../logo-senzu.png" alt="logo" class="title-logo">
        <h1>Senzu</h1>
        <a href="{{ route('animes.create') }}">+ Ajouter un animé</a>
    </header>

    <main>
        <div class="anime-list">
            @foreach ($animes as $anime)
                <div class="anime-card">
                    <img src="{{ $anime->image_url }}" alt="{{ $anime->name }}">
                    <div class="anime-content">
                        <h2>
                            <a href="{{ route('animes.show', $anime->id) }}" style="color:#190933; text-decoration:none;">
                                {{ $anime->name }}
                            </a>
                        </h2>
                        <p><strong>Note :</strong> {{ $anime->rating }} / 5 ⭐</p>
                        <p><strong>Commentaire :</strong> {{ $anime->comments }}</p>
                        <p><strong>Synopsis :</strong> {{ Str::limit($anime->description, 100) }}</p>
                    </div>
                    <div class="anime-actions">
                        <a href="{{ route('animes.edit', $anime->id) }}">Editer</a>
                        <a href="{{ route('animes.delete', $anime->id) }}">Retirer</a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>