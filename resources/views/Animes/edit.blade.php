<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier ma note</title>
    <style>
        body {
            background-color: #190933;
            color: #d1d5db;
            font-family: Arial, sans-serif;
        }

        .edit-container {
            max-width: 600px;
            margin: 40px auto;
            background: #ffecd1;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.4);
        }

        .edit-container h1 {
            color: #665687;
            font-size: 1.8rem;
            text-align: center;
            margin-bottom: 20px;
        }

        .name h2 {
            text-align: center;
            color: #665687;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #665687;
        }

        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            background:#190933;
            color: #fff;
        }

        textarea {
            resize: none;
        }

        .star-rating {
            direction: rtl;
            display: inline-flex;
            font-size: 30px;
            margin-bottom: 20px;
        }


        .star-rating input {
            display: none;
        }


        .star-rating label {
            cursor: pointer;
            color: #665687;
            transition: color 0.2s;
        }


        .star-rating input:checked ~ label,
        .star-rating label:hover,
        .star-rating label:hover ~ label {
            color: #ff7d00; /* jaune doré */
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #B084CC;
            color: #190933;
            border: none;
            border-radius: 6px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }

        button:hover {
            background-color: #665687;
        }
    </style>
</head>
<body>
    <div class="edit-container">
        <h1>Modifier ma note</h1>

        <form action="{{ route('animes.update', $anime->id) }}" method="POST">
            @csrf
            

            <div class="name">
                <h2>{{ $anime->name }}</h2>
            </div>

            <label for="rating">Ma Note :</label>
            <div class="star-rating">
                @for ($i = 5; $i >= 1; $i--)
                    <input type="radio" id="star{{ $i }}" name="rating" value="{{ $i }}" @if(old('rating') == $i) checked @endif>
                    <label for="star{{ $i }}">★</label>
                @endfor
            </div>

            <div class="form-group">
                <label for="comments">Commentaire :</label>
                <textarea id="comments" name="comments" rows="4" required>{{ $anime->comments }}</textarea>
            </div>

            <button type="submit">Mettre à jour</button>
        </form>
    </div>
</body>
</html>
