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
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        h2 {
            font-weight: 700;
        }
    </style>
    <title>Connexion</title>
</head>
<body>
    <div class="container">
        <div class="text-center mb-4">
            <h2>Se connecter</h2>
        </div>
        <form method = "post" action ="{{route('login')}}">
            @csrf
            <div class="form-group">
                <label for="nom_utilisateur_connexion">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="nom_utilisateur_connexion" name="username" placeholder="Entrez votre nom d'utilisateur" required>
            </div>
            <div class="form-group">
                <label for="mot_de_passe_connexion">Mot de passe</label>
                <input type="password" class="form-control" id="mot_de_passe_connexion" name="password" placeholder="Entrez votre mot de passe" required>
            </div>
            <button type="submit" class="btn btn-primary">Connexion</button>
        </form>
    </div>
</body>
</html>
