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
            max-width: 800px;
            margin-top: 100px;
            text-align: center;
        }
        h1 {
            font-weight: 700;
        }
        .task-table {
            margin-top: 30px;
            text-align: left;
        }
    </style>
    <title>Accueil</title>
</head>
<body>
    <div class="container">
        <h1>Bienvenue sur votre page d'accueil !</h1>
        <p class="mt-4">Vous êtes maintenant connecté. Profitez de votre expérience !</p>

        <form action="{{route('deconnexion')}}" method="post">
            @csrf
            <button class="btn btn-danger mt-4">Se Déconnecter</button>
        </form>

        <h2 class="mt-5">Gestion des Tâches</h2>
        <a href="{{route('ajouter')}}" class="btn btn-success mb-3">Ajouter une tâche</a>

        <div class="task-table">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nom de la Tâche</th>
                        <th>Contenu</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!auth()->user()->tasks)
                    <h1>Pas de taches</h1>
                    @else
                    @foreach (auth()->user()->tasks as $item )
                    <tr>
                        <td>{{$item->nom}}</td>
                        <td>{{$item->contenu}}</td>
                        <td>
                            <a href="{{route('modifier',$item)}}" class="btn btn-warning btn-sm">Modifier</a>
                            <a href="{{route('supprimer',$item)}}" class="btn btn-danger btn-sm">Supprimer</a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
