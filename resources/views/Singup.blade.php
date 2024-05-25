<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Link ke file CSS Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: flex-start; /* Mengubah justify-content menjadi flex-start */
            align-items: center; /* Mengubah align-items menjadi center */
            height: 100vh;
            background: url('/img/singup_1.jpg') no-repeat center center fixed;
            background-size: cover;
            padding-top: 50px; /* Padding atas untuk logo */
        }

        .logo-container {
            margin-bottom: 20px;
            text-align: center;
        }

        .signup-container {
            width: 280px; /* Perkecil lebar container */
            padding: 20px;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .form-group label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Container untuk logo -->
    <div class="logo-container">
        <img src="/img/Logo.png" alt="Logo" class="img-fluid" style="max-width: 150px;">
    </div>
    <!-- Container untuk formulir signup -->
    <div class="signup-container">
        <h2 class="text-center">Sign Up</h2>
        <form action="{{ route('register.post') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Username:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
        </form>
        <p class="mt-3 text-center">Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></p>
    </div>

    <!-- Tambahkan script JavaScript Bootstrap dan jQuery jika diperlukan -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
