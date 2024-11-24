<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Page</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            background: url('{{ asset('image/cover.jpg') }}') no-repeat center center fixed;
            background-size: cover;
        }

        .full-height {
            height: 100vh;
            background: rgba(0, 0, 0, 0.4);
            padding: 20px;
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


        .form {
            width: 100%;
            min-height: 390px;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 20px;
            border-radius: 6px;
        }
    </style>
</head>

<body>
    <div class="container-fluid full-height d-flex justify-content-center align-items-center">
        <div class="col-md-4">
            <aside class="shadow form">
                <h3 class="mb-4 h2 text-center">REGISTER TO PIZZA</h3>
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <form action="{{ route('signup') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" required autofocus placeholder="your Name"
                            class="form-control" value="{{ old('name') }}">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" required placeholder="your email" class="form-control"
                            value="{{ old('email') }}">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="*****" class="form-control" required>
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-success">Register</button>
                    </div>
                    <div class="form-group">
                        <a class="form-control btn btn-primary" href="{{ route('login') }}">Log In</a>
                    </div>
                </form>
            </aside>
        </div>
    </div>
</body>

</html>
