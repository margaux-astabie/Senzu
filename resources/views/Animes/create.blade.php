<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un anime</title>
    <style>
        body {
            background-color: #14181c;
            color: #d1d5db;
            font-family: Arial, sans-serif;
        }


        .form-container {
            max-width: 600px;
            margin: 40px auto;
            background: #1c252e;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.4);
        }


        .form-container h1 {
            color: #fff;
            font-size: 1.8rem;
            text-align: center;
            margin-bottom: 25px;
        }


        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #d1d5db;
        }


        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 18px;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            background: #202830;
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
            color: #555;
            transition: color 0.2s;
        }


        .star-rating input:checked ~ label,
        .star-rating label:hover,
        .star-rating label:hover ~ label {
            color: #ffc107; /* jaune doré */
        }


        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: #00e054;
            color: #000;
            border: none;
            border-radius: 6px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }


        .submit-btn:hover {
            background-color: #00b843;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>🎬 Ajouter un anime</h1>


        <form action="{{ route('animes.store') }}" method="POST">
            @csrf


            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required>


            <label for="description">Description :</label>
            <textarea id="description" name="description" rows="3" required></textarea>


            <label for="rating">Ma Note :</label>
            <div class="star-rating">
                @for ($i = 5; $i >= 1; $i--)
                    <input type="radio" id="star{{ $i }}" name="rating" value="{{ $i }}" @if(old('rating') == $i) checked @endif>
                    <label for="star{{ $i }}">★</label>
                @endfor
            </div>


            <label for="comments">Commentaire :</label>
            <textarea id="comments" name="comments" rows="3" required></textarea>


            <label for="image_url">Image URL :</label>
            <input type="text" id="image_url" name="image_url" required>


            <button type="submit" class="submit-btn">✅ Ajouter l’anime</button>
        </form>
    </div>
</body>
</html>