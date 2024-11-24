<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Page</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            background: url('./image/cover.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .full-height {
            height: 100vh;
            background: rgba(255, 255, 255, 0.0); /* Fundo semi-transparente para o formulário */
            padding: 20px;
            border-radius: 10px; /* Bordas arredondadas */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); /* Sombra para profundidade */
        }

        .form {
            width: 100%;
            min-height: 390px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 20px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            color: #000;
        }

        h3 {
            color: #ff5733; /* Cor do título */
        }

        .btn-success {
            background-color: #ff5733; /* Cor do botão de login */
            border: none;
        }

        .btn-success:hover {
            background-color: #c0392b; /* Cor do botão ao passar o mouse */
        }

        .btn-primary {
            background-color: #3498db; /* Cor do botão de registro */
            border: none;
        }

        .btn-primary:hover {
            background-color: #2980b9; /* Cor do botão de registro ao passar o mouse */
        }

        .form-group {
            margin-bottom: 15px; /* Espaçamento entre os grupos de formulário */
        }
    </style>
</head>

<body>
    <div class="container-fluid full-height d-flex justify-content-center align-items-center">
        <div class="col-md-4">
            <aside class="shadow form">
                <h3 class="mb-4 h2 text-center">WELCOME TO PIZZA</h3>
                <form action="{{ route('auth') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input type="text" name="username" required autofocus placeholder="your email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="*****" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button class="form-control btn btn-success">Log In</button>
                    </div>
                    <div class="form-group">
                        <a class="form-control btn btn-primary" href="{{ route('register') }}">
                            Register
                        </a>
                    </div>
                </form>
            </aside>
        </div>
    </div>
</body>

</html>
