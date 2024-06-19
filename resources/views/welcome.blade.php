<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Mon Blog</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div id="app" class="min-h-screen flex flex-col items-center justify-center">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-blue-600 mb-4">Bienvenue sur Mon Blog</h1>
            <p class="text-lg text-gray-700 mb-8">Découvrez les derniers articles et mises à jour.</p>
            <a href="{{ route('articles.index') }}" class="inline-block px-8 py-3 bg-blue-600 text-white text-lg font-medium rounded hover:bg-blue-700 transition-colors duration-300">
                Voir les Articles
            </a>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>