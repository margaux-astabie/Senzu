<h1>Modifier ma note.</h1>

<form action="{{ route('animes.update' , $anime->id) }}" method="POST">
    @csrf
    <h1>{{ $anime->name }}</h1>

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

    <input type="submit" value="Mettre à jour l'Animé.'">
    </form> 