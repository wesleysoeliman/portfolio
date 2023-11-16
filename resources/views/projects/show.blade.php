<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Projecttitel</th>
                <th>Verwijderen</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td id="title">{{ $project->title }}</td>
                <td>
                    <button id="show-delete" class="btn btn-danger">Verwijder Project</button>
                    <form id="delete-form" style="display: none;" action="{{ route('projects.destroy', $project->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Weet je zeker dat je dit project wilt verwijderen?')" class="btn btn-danger">Ja, Verwijder</button>
                    </form>
                </td>
            </tr>
        </tbody>
        <script>
            document.getElementById('show-delete').addEventListener('click', function () {
                let projectTitle = document.getElementById('title').textContent;
                let userInput = prompt('Typ de projecttitel om te bevestigen');
               
                if (userInput === projectTitle) {
                    document.getElementById('delete-form').style.display = "block";
                    document.getElementById('show-delete').style.display = "none";
                } else {
                    alert('Foutieve projecttitel. Probeer opnieuw.');
                }
            });
        </script>
       
    </table>
</div>
</body>
</html>