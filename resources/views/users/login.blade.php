<!DOCTYPE html>
<html>

<head>

      <link rel="stylesheet" href="{{asset('css/stylehome.css')}}" />
      <link rel="stylesheet" href="{{asset('css/loginform.css')}}" />
</head>
<body>

    <div class="register-form">
        <header>
            @include('includes.navbar')
           
        </header>

        <form method="POST" action="/users/authenticate">
            <h2>Se Connecter</h2>
            <p><small style="color: black;">Se Connecter à votre compte pour gérer votre budget</small></p>
            @csrf

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
                <button type="submit">Se connecter</button>
            </div>


        </form>
    </div>

@include('includes.footer')
</body>

</html>
