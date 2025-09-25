<h1>Ajouter un anime</h1>

<form action="{{ route('animes.store') }}" method="POST">
    @csrf
    <label for="name">Nom:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="description">Description:</label>
    <input type="text" id="description" name="description" required><br><br>

    <label for="rating">HP:</label>
    <input type="number" id="rating" name="rating" required><br><br>

    <label for="image_url">Image URL:</label>
    <input type="text" id="image_url" name="image_url" required><br><br>

    <input type="submit" value="Ajouter l'animé">
</form> 