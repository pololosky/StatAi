<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body class="bg-white text-black scroll-smooth">
    <header class="flex justify-between items-center px-32 py-4 sticky top-0 border-b-1 border-gray-200 bg-white shadow">
        <div class="text-blue-600"> 
            <a href="/" class="flex gap-2 items-center">
                <i class="ri-graduation-cap-fill text-4xl"></i>
                <h1 class="text-4xl font-bold italic">StatAi</h1>
            </a>
        </div>
        {{-- <nav class="flex gap-8 items-center">
            <a href="/">
                <p class="text-gray-500 text-lg">navList</p>
            </a>
            <a href="/">
                <p class="text-gray-500 text-lg">navList</p>
            </a>
            <a href="/">
                <p class="text-gray-500 text-lg">navList</p>
            </a>
        </nav> --}}
        @if (Route::has('login'))
            <nav class="flex items-center justify-end gap-4">
                @auth
                    <a
                        href="{{ url('/livres') }}"
                        class="flex px-5 py-1.5 rounded-sm text-sm cursor-pointer
                        {{ request()->is('livres') ? 'bg-blue-600 text-white' : 'hover:bg-blue-600 hover:text-white text-[#1b1b18]' }}"
                    >
                        Mes abonnements
                    </a>
                    {{-- si et seulement si on est un admin --}}
                    @if (auth()->user()->is_admin)
                        <a
                            href="{{ url('/AdminDashboard') }}"
                            class="flex px-5 py-1.5 rounded-sm text-sm cursor-pointer
                            {{ request()->is('AdminDashboard') ? 'bg-blue-600 text-white' : 'hover:bg-blue-600 hover:text-white text-[#1b1b18]' }}"
                        >
                            Administrateur
                        </a>
                    @else
                        <a href="{{ url('/dashboard') }}"
                            class="flex px-5 py-1.5 rounded-sm text-sm cursor-pointer
                            {{ request()->is('dashboard') ? 'bg-blue-600 text-white' : 'hover:bg-blue-600 hover:text-white text-[#1b1b18]' }}"
                        >
                            Mon Profil
                        </a>
                    @endif
                @else
                    <a
                        href="{{ route('login') }}"
                        class="flex px-5 py-1.5 shadow bg-blue-600 text-white cursor-pointer rounded-xl text-lg font-semibold"
                    >
                        Se connecter
                    </a>
                    {{-- @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="flex px-5 py-1.5 border-gray-500 hover:border-[#1915014a] hover:bg-amber-600 hover:text-white cursor-pointer border text-[#1b1b18] rounded-sm text-sm">
                            S'inscrire
                        </a>
                    @endif --}}
                @endauth
            </nav>
        @endif
    </header>
    <main>
        {{ $slot }}
    </main>
</body>
</html>