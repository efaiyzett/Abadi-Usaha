<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <style>
/* body {
    font-family: ;
} */

        .navbar {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            position: relative;
            z-index: 1;
            font-family: "Bebas Neue", serif;
            font-weight: 400;
            font-style: normal;
            font-size: 20;
            }
        

        .auth-links {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .auth-links a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            padding: 8px 16px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .auth-links a:hover {
            background-color: #555;
            color: #fff;
        }

        .btn-login {
            background-color: #007bff;
            color: white;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }

        .btn-register {
            background-color: #28a745;
            color: white;
        }

        .btn-register:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand" style="font-size: 30" href="beranda">Abadi Usaha</a>

            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="layanan">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang-kami">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontak">Kontak</a>
                    </li>
                </ul>
            </div>

            @auth
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="tampil-pesanan">Pesanan</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
            @else
            <div class="auth-links">
                <a href="{{ route('login') }}" class="btn-login">🔐 Login</a>
                <a href="{{ route('register') }}" class="btn-register">✍️ Register</a>
            </div>
            @endauth

        </div>
    </nav>

</body>

</html>
