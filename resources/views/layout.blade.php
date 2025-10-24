<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkUnity</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 font-sans text-gray-800 min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-white shadow sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center px-6 py-4">
            <h1 class="text-2xl font-bold text-blue-600">WorkUnity</h1>
            <nav class="space-x-4">
                <a href="{{ route('employees.index') }}" class="text-gray-700 hover:text-blue-600 transition">Employés</a>
                <a href="{{ route('employees.create') }}" class="text-gray-700 hover:text-blue-600 transition">Ajouter</a>
            </nav>
        </div>
    </header>

    <!-- Notification -->
    @if(session('success'))
        <div class="container mx-auto px-6 mt-4">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="container mx-auto px-6 mt-4">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                {{ session('error') }}
            </div>
        </div>
    @endif

    <!-- Main Content -->
    <main class="flex-1 container mx-auto px-6 py-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t mt-auto">
        <div class="container mx-auto px-6 py-6 text-center text-gray-500 text-sm">
            &copy; 2025 WorkUnity. Tous droits réservés.
        </div>
    </footer>

</body>
</html>
