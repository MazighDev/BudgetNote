<!DOCTYPE html>
<html>

<head>
   
    <link rel="stylesheet" href="{{ asset('css/stylehome.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/loginform.css') }}" />
</head>
<body>

    <div class="register-form">
        <header>
            @include('includes.navbar');
         
        </header>

        <form method="POST" action="/users">
            <h2>Insciption</h2>
            <p><small style="color: black;">Créez votre compte pour gérer votre budget</small></p>
            @csrf
            <div>
                <label for="lname">Nom</label>
                <input type="text" name="lname" value="{{ old('lname') }}" />
                @error('lname')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="fname">Prénom</label>
                <input type="text" name="fname" value="{{ old('fname') }}" />
                @error('fname')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" />
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" value="{{ old('password') }}" />
                @error('password')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password2">Confirmez le mot de passe</label>
                <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" />
                @error('password_confirmation')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit">S'inscrire</button>
            </div>


        </form>
    </div>

@include('includes.footer')
</body>

</html>
