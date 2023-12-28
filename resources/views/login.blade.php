<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @error('error')
        <span>{{ $message }}</span>
    @enderror

    <form action="{{ route('login.store') }}" method="post">
        @csrf

        <label for="cpf">E-mail</label>
        <input type="email" name="email" value="admin@example.com">
        @error('email')
            <span>{{ $message }}</span>
        @enderror

        <label for="password">Senha</label>
        <input type="password" name="password" value="123">
        @error('password')
            <span>{{ $message }}</span>
        @enderror

        <button type="submit">Login</button>
    </form>
</body>
</html>
