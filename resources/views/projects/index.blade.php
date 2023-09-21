<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">
                    <div class="col-md-6">
                        <div class="form-group">
                            <form method="get" action="/search">
                                <div class="input-group">
                                    <input class="form-control" name="search" placeholder="Search..." value="{{ isset($search) ? $search : ''}}">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <div class="pull-right mb-2">
                                    <a class="btn btn-success" href="{{ route('projects.create') }}">Nieuw project</a>
                                </div>
                                <th>Project</th>
                                <th>Titel</th>
                                <th>Beschrijving</th>
                                <th>Afbeelding</th>
                                <th>Categorie</th>
                                <th>Actie</th>
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
                                <td>
                                    <a class="btn btn-primary" href="{{ route('projects.edit', $project->id) }}">
                                        <i class="fas fa-pencil-alt"></i> Edit
                                    </a>
                                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
