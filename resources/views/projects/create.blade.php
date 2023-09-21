<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard - Projects - Create') }}
        </h2>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('projects.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="title">Titel:</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Beschrijving:</label>
                            <textarea class="form-control" id="description" name="description"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="description">Afbeelding:</label>
                            <input type="text" name="image" id="image" class="form-control" placeholder="image path">
                        </div>
                        <a class="btn btn-primary">
                        <input type="submit" value="Project item opslaan">
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>