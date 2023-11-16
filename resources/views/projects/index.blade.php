<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>

<body class="antialiased">
    <header class="bg-blue-400 text-white py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-2xl font-semibold">Portfolio</h1>
            <ul class="flex space-x-4">
                @auth
                    <li><a href="{{ url('dashboard') }}" class="hover:underline">Dashboard</a></li>
                @else
                    <li><a href="{{ route('login') }}" class="hover:underline">Log in</a></li>

                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="hover:underline">Register</a></li>
                    @endif
                @endauth
            </ul>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="md:flex md:space-x-6">
                        <div class="flex-1 md:w-1/2">
                            <form method="get" action="/search" class="mb-4">
                                <div class="flex items-center">
                                    <input class="w-full px-4 py-2 border rounded-md" name="search" placeholder="Search..." value="{{ isset($search) ? $search : '' }}">
                                    <button type="submit" class="ml-2 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Project</th>
                                <th>Titel</th>
                                <th>Beschrijving</th>
                                <th>Afbeelding</th>
                                <th>Categorie</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->description }}</td>
                                <td><img src="{{ $project->image }}" alt="Project Image" width="150" height="150"></td>
                                <td>{{ $project->category->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-blue-400 text-white py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <p>&copy; 2023 Wesley | Project: Mijn Portfolio | Plek: Curio terheijdense weg 350</p>
        </div>
    </footer>
</body>
</html>
