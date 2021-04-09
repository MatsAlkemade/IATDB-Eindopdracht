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
    <title>Registreren</title>
</head>
<body>
    <header class="header">
        <h1>Extra informatie</h1>
        <h2>{{$user->name}}</h2>
    </header>
    <main class="register">
        @if ($errors->any())
            <section class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            </section>
        @endif
        <form action="/register/edit" method="post" enctype="multipart/form-data" class="register__form">
            @csrf
            @method('patch')
            <section class="register__form__input">
                <label for="profile_picture">Profielfoto: </label>
                <input type="file" name="profile_picture" id="profile_picture" accept="image/*" />
            </section>
            <section class="register__form__input">
                <label for="phone_number">Telefoonnummer: </label>
                <input type="text" name="phone_number" id="phone_number" placeholder="0612345678" />
            </section>
            <section class="register__form__input">
                <label for="role">Wat ga je doen?</label>
                <select name="role" id="role">
                    <option value="Sitter">Oppas</option>
                    <option value="Owner">Huisdiereigenaar</option>
                </select>
            </section>
            <section class="register__form__input">
                <label for="description" class="u-label-vert-align-top">Vertel wat over jezelf: </label>
                <textarea name="description" id="description" placeholder="Typ hier..."></textarea>
            </section>
            <section class="register__form__button">
                <button type="submit" class="u-button">Registreer</button>
            </section>
        </form>
    </main>
</body>
</html>