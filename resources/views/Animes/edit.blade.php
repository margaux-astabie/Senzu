<h1>Modifier ma note.</h1>

<form action="{{ route('animes.update' , $anime->id) }}" method="POST">
    @csrf
    <h1>{{ $anime->name }}</h1>

    <label for="Rating">note:</label>
    <input type="number" id="rating" name="rating" value="{{ $anime->rating }}" required><br><br>

    <label for="commentaires">Commentaire:</label>
    <input type="text" id="commentaires" name="commentaires" required><br><br>

    <input type="submit" value="Mettre à jour l'Animé.'">
    </form> 