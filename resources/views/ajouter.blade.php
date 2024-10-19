<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
        .container {
            max-width: 600px;
            margin-top: 100px;
        }
    </style>
    <title>Ajouter une Tâche</title>
</head>
<body>
    <div class="container">
        <h2>Ajouter une Tâche</h2>
        <form action="{{route('ajouter')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="nom">Nom de la Tâche</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="contenu">Contenu</label>
                <textarea class="form-control" id="contenu" name="contenu" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a href="home.html" class="btn btn-secondary">Retour</a>
        </form>
    </div>
</body>
</html>
