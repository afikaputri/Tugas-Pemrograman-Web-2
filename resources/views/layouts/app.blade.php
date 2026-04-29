<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie App</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f9;
        }

        .navbar {
            background: linear-gradient(to right, #141e30, #243b55);
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            color: white !important;
            font-size: 24px;
            font-weight: 600;
        }

        .main-content {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }

        footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            color: #777;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/"> Movie App</a>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="main-content">
            @yield('content')
        </div>
    </div>

    <footer>
        © {{ date('Y') }} Movie App - Laravel 13 & Bootstrap 5_Afika Putri Maulida
    </footer>

</body>

</html>
