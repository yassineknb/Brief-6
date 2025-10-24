<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkUnity</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 font-sans text-gray-800">
    <header class="bg-white shadow py-4 mb-6">
        <div class="container mx-auto flex justify-between items-center px-6">
            <h1 class="text-2xl font-bold text-primary">WorkUnity</h1>
            <nav>
                <a href="{{ route('employees.index') }}" class="text-gray-700 hover:text-primary px-3">Employés</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-6">
        @yield('content')
    </main>

    <footer class="text-center text-gray-500 text-sm mt-12 mb-6">
        &copy; 2025 WorkUnity. Tous droits réservés.
    </footer>
</body>
</html>
