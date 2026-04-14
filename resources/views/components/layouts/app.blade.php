<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pizzaria Luna - Sistema de Estoque</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>

    @livewireStyles
</head>

<body class="bg-gray-100">

    <nav class="bg-red-600 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 shadow-md">
            <div class="flex justify-between items-center h-16">
                <div class="font-bold text-xl">
                    🍕 Pizzaria Senai
                </div>

                <div class="flex items-center space-x-4">
                    @auth
                        <span class="bg-red-700 px-3 py-1 rounded-full text-sm">
                            👤 {{ auth()->user()->nome }}
                        </span>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="hover:bg-red-800 px-3 py-2 rounded transition text-sm font-semibold">
                                Sair
                            </button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        {{ $slot }}
    </main>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>



</body>

</html>
