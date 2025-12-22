<!DOCTYPE html>
<html lang='id'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>@yield('title', 'Jakarta Luxury AI')</title>
    <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500;600&display=swap' rel='stylesheet'>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #0A0A0A; color: #E5E5E5; }
        .luxury-gold { background-color: #C5A059; }
        .luxury-card { background-color: #161616; }
        .glass { background: rgba(22, 22, 22, 0.8); backdrop-filter: blur(10px); }
    </style>
</head>
<body class='luxury-dark'>
    <nav class='bg-luxury-card p-4 shadow-lg'>
        <div class='container mx-auto flex justify-between items-center'>
            <a href='{{ route('home') }}' class='text-luxury-gold text-2xl font-bold'>Jakarta Luxury AI</a>
            <div class='space-x-4'>
                <a href='{{ route('home') }}' class='text-white hover:text-luxury-gold'>Home</a>
                @auth
                    <a href='{{ route('dashboard') }}' class='text-white hover:text-luxury-gold'>Dashboard</a>
                    <a href='{{ route('reservations.index') }}' class='text-white hover:text-luxury-gold'>Reservations</a>
                    <form action='{{ route('logout') }}' method='POST' class='inline'>
                        @csrf
                        <button type='submit' class='text-white hover:text-luxury-gold'>Logout</button>
                    </form>
                @else
                    <a href='{{ route('login') }}' class='text-white hover:text-luxury-gold'>Login</a>
                    <a href='{{ route('register') }}' class='text-white hover:text-luxury-gold'>Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <main class='container mx-auto p-4'>
        @yield('content')
    </main>

    <footer class='bg-luxury-card p-4 mt-8'>
        <div class='container mx-auto text-center text-gray-400'>
            &copy; 2025 Jakarta Luxury AI. All rights reserved.
        </div>
    </footer>

    <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
    @yield('scripts')
</body>
</html>
