<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>{{ $anime->name }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #190933; /* fond global sombre */
            color: #FFECD1; /* texte clair */
            margin: 0;
            padding: 20px;
        }

        .anime-container {
            max-width: 900px;
            margin: 50px auto;
            background: #665687; /* fond carte */
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.6);
        }

        .anime-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .anime-header h1 {
            color: #B084CC; /* titre violet clair */
            margin-bottom: 10px;
        }

        .anime-content {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .anime-content img {
            max-width: 300px;
            border-radius: 10px;
            flex-shrink: 0;
            box-shadow: 0 4px 10px rgba(0,0,0,0.5);
        }

        .anime-details {
            flex: 1;
        }

        .anime-details h2 {
            margin-top: 0;
            color: #B084CC; /* titres secondaires */
        }

        .anime-details p {
            margin: 10px 0;
            line-height: 1.6;
        }

        .actions {
            margin-top: 25px;
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .actions a {
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 6px;
            font-weight: bold;
            transition: 0.2s;
        }

        .back-btn {
            background: #B084CC; /* violet clair */
            color: #190933;
        }

        .back-btn:hover {
            background: #8f68b5;
        }

        .edit-btn {
            background: #FF7D00; /* orange vif */
            color: #190933;
        }

        .edit-btn:hover {
            background: #e66f00;
        }

        .delete-btn {
            background: #ff4d4d; /* rouge pour supprimer */
            color: #FFECD1;
        }

        .delete-btn:hover {
            background: #cc0000;
        }
    </style>
</head>
<body>
    <div class="anime-container">
        <div class="anime-header">
            <h1>{{ $anime->name }}</h1>
        </div>

        <div class="anime-content">
            <img src="{{ $anime->image_url }}" alt="{{ $anime->name }}">

            <div class="anime-details">
                <h2>Synopsis</h2>
                <p>{{ $anime->description }}</p>

                <h2>Note</h2>
                <p>{{ $anime->rating }} / 5 ⭐</p>

                <h2>Mon commentaire</h2>
                <p>{{ $anime->comments }}</p>
            </div>
        </div>

        <div class="actions">
            <a href="{{ route('list') }}" class="back-btn">⬅ Retour</a>
            <a href="{{ route('animes.edit', $anime->id) }}" class="edit-btn">✏️ Modifier</a>
            <a href="{{ route('animes.delete', $anime->id) }}" class="delete-btn">❌ Supprimer</a>
        </div>
    </div>
</body>
</html>
