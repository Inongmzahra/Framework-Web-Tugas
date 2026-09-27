<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>403 - Forbidden</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-sm text-center">
        <h1 class="text-4xl font-semibold text-red-600 mb-4">
            403!
        </h1>

        <p class="text-gray-700">
            Maaf, Anda tidak memiliki akses ke halaman ini, silahkan kembali ke dashboard.
        </p>

        <a href="{{ route('dashboard') }}"
           class="inline-block bg-indigo-600 text-white px-5 py-2 rounded-md">
            Kembali ke Dashboard
        </a>
    </div>

</body>
</html>