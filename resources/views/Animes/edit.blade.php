<h1>Modifier ma note.</h1>

<form action="{{ route('animes.update' , $anime->id) }}" method="POST">
    @csrf
    <label for="name">Nom:</label>
    <input type="text" id="name" name="name" value="{{ $anime->name }}" required><br><br>

    <label for="description">Description:</label>
    <input type="text" id="tdescription" name="description" value="{{ $anime->descrption }}" required><br><br>

    <label for="Rating">note:</label>
    <input type="number" id="rating" name="rating" value="{{ $anime->rating }}" required><br><br>

    <label for="commentaires">Commentaire:</label>
    <input type="text" id="commentaires" name="commentaires" required><br><br>


    <label for="image_url">Image URL:</label>
    <input type="text" id="image_url" name="image_url" value="{{ $anime->image_url }}" required><br><br>

    <input type="submit" value="Mettre à jour l'Animé.'">
    </form> 