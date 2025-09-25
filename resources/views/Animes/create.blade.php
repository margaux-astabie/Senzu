<h1>Ajouter un anime</h1>

<form action="{{ route('animes.store') }}" method="POST">
    @csrf
    <label for="name">Nom:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="description">Description:</label>
    <input type="text" id="description" name="description" required><br><br>

    <label for="rating">Ma Note :</label>
<select name="rating" id="rating" required>
    <option value="">-- Choisir une note --</option>
    @for ($i = 1; $i <= 5; $i++)
        <option value="{{ $i }}">{{ $i }}</option>
    @endfor
</select>
<style>
    .star-rating {
        direction: rtl;
        display: inline-flex;
        font-size: 30px;
    }

    .star-rating input {
        display: none;
    }

    .star-rating label {
        cursor: pointer;
        color: #ccc;
    }

    .star-rating input:checked ~ label,
    .star-rating label:hover,
    .star-rating label:hover ~ label {
        color: #ffc107;
    }
</style>

<div class="star-rating">
    @for ($i = 5; $i >= 1; $i--)
        <input type="radio" id="star{{ $i }}" name="rating" value="{{ $i }}" @if(old('rating', $anime->rating ?? '') == $i) checked @endif>
        <label for="star{{ $i }}">★</label>
    @endfor
</div>
<br><br>
    <label for="commentaires">Commentaire:</label>
    <input type="text" id="commentaires" name="commentaires" required><br><br>


    <label for="image_url">Image URL:</label>
    <input type="text" id="image_url" name="image_url" required><br><br>

    <input type="submit" value="Ajouter l'animé">
</form> 