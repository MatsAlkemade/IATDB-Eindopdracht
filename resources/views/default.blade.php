<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="/js/main.js" defer></script>
    <title>@yield('title')</title>
</head>
<body>
    <header class="title">
        <a href="/"><h1 class="title__text">PassenOpJeDier</h1></a>
        <section class="nav" id="js--nav">  
            <button class="nav__button" id="js--navButton">
                <i class="fal fa-bars js--nc"></i>
            </button>
            <div class="nav__dropdown" id="js--navDropdown">
                <a class="js--nc" href="/">Homepagina</a>
                <a class="js--nc" href="/pets">Huisdieren</a>
                <a class="js--nc" href="/sitters">Oppassers</a>
                <a class="js--nc" href="/requests">Berichten</a>
                <a class="js--nc" href="/profile">Profiel</a>
                <a class="js--nc nav__adminPanel" href="/admin" data-check-if-admin="{{$user->role}}" id="js--adminPanel">Admin Panel</a>
                <a class="js--nc" href="/logout">Log uit</a>
            </div>
        </section>
    </header>
    @yield('content')
</body>
</html>