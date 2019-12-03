<!DOCTYPE html>
<html>
<head>
    <title>Buffalo Burger</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/styles.css">
</head>


<body>
        <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span> Buffalo Burger <span class="glyphicon glyphicon-cutlery"></span></h1>

        <div class="container admin">
            <div class="row">
                <h1><strong> Listes des plats </strong><a href="insert.php?id=1" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span> Ajouter </a></h1>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Catégories</th>
                        <th>Actions</th>
                    </tr>

                    </thead>
                    <tbody>
                    <td>Item 1</td>
                    <td>Description</td>
                    <td>89.26</td>
                    <td>Categorie 1</td>
                    <td width="300">
                        <a class="btn btn-warning" href="view.php?id=1"> <span class="glyphicon glyphicon-eye-open"></span> Voir </a>
                        <a class="btn btn-primary" href="update.php?id=1"> <span class="glyphicon glyphicon-pencil"></span> Modifier </a>
                        <a class="btn btn-danger" href="delete.php?id=1"> <span class="glyphicon glyphicon-remove"></span> Supprimer </a>
                    </td>

                    </tbody>

                </table>
            </div>
        </div>

</body>
</html>



