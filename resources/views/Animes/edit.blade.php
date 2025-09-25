<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier ma note</title>
    <style>
        body {
            background-color: #002245ff;
            color: #d1d5db;
            font-family: Arial, sans-serif;
        }

        .edit-container {
            max-width: 600px;
            margin: 40px auto;
            background: #b51212ff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.4);
        }

        .edit-container h1 {
            color: #fff;
            font-size: 1.8rem;
            text-align: center;
            margin-bottom: 20px;
        }

        .name h2 {
            text-align: center;
            color: #ffffffff;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #d1d5db;
        }

        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            background: #202830;
            color: #fff;
        }

        textarea {
            resize: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #ffffffff;
            color: #000;
            border: none;
            border-radius: 6px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }

        button:hover {
            background-color: #a1a1a1ff;
        }
    </style>
</head>
<body>
    <div class="edit-container">
        <h1>🎬 Modifier ma note</h1>

        <form action="{{ route('animes.update', $anime->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="name">
                <h2>{{ $anime->name }}</h2>
            </div>

            <div class="form-group">
                <label for="rating">Note :</label>
                <input type="number" id="rating" name="rating" value="{{ $anime->rating }}" min="0" max="10" required>
            </div>

            <div class="form-group">
                <label for="commentaires">Commentaire :</label>
                <textarea id="commentaires" name="commentaires" rows="4" required>{{ $anime->commentaires }}</textarea>
            </div>
    <label for="rating">Ma Note :</label>
<select name="rating" id="rating" required>
    <option value="">-- Choisir une note --</option>
    @for ($i = 1; $i <= 5; $i++)
        <option value="{{ $i }}">{{ $i }}</option>
    @endfor
</select>
<br><br>
    <label for="description">Commentaire:</label>
    <input type="text" id="description" name="description" required><br><br>

            <button type="submit">✅ Mettre à jour</button>
        </form>
    </div>
</body>
</html>
