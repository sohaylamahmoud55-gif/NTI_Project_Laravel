<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natural Glow</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- icon -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('partials.navbar')
    @if(session('success'))
    <div id="success-message" class="custom-alert">
        {{ session('success') }}
    </div>
    @endif
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        setTimeout(function() {
            let message = document.getElementById('success-message');
            if (message) {
                message.style.transition = ".5s";
                message.style.opacity = 0;
                setTimeout(() => {
                    message.remove();
                }, 500);
            }
        }, 3000);
    </script>
</body>

</html>