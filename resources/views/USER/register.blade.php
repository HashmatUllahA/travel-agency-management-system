<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user rigister</title>
</head>
<body>
    <form method="POST" action="{{ route('register') }}">
        @csrf
    
        <div>
            <label for="name">Name:</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        </div>
    
        <div>
            <label for="email">Email:</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
        </div>
    
        <div>
            <label for="password">Password:</label>
            <input id="password" type="password" name="password" required autocomplete="new-password">
        </div>
    
        <div>
            <label for="password-confirm">Confirm Password:</label>
            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
        </div>
    
        <button type="submit">Register</button>
    </form>
    
</body>
</html>