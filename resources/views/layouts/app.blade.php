<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>

    <!-- Menyertakan Bootstrap CSS -->
    <link href="{{ asset('bootstrap-5.3.3/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Google Fonts - Font Poppins yang modern dan clean -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7fc; /* Latar belakang lebih terang dan bersih */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            padding-top: 30px;
        }

        h1 {
            font-size: 2rem;
            color: #333;
            font-weight: 600;
            text-align: center;
            margin-bottom: 20px;
        }

        .card {
            border: none;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1); /* Soft shadow */
            border-radius: 8px;
            margin-bottom: 20px;
            background-color: white;
        }

        .card-header {
            background-color: #4e73df;
            color: white;
            padding: 15px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            font-size: 1.25rem;
        }

        .card-body {
            padding: 20px;
        }

        .btn-primary {
            background-color: #4e73df;
            border-color: #4e73df;
            font-weight: 600;
        }

        .btn-primary:hover {
            background-color: #2e59d9;
            border-color: #2e59d9;
        }

        .table th, .table td {
            vertical-align: middle;
        }

        .table td img {
            max-width: 50px;
            border-radius: 5px;
        }

        /* Styling tambahan untuk tombol */
        .btn {
            transition: background-color 0.3s ease;
        }

        /* Responsiveness */
        @media (max-width: 767px) {
            h1 {
                font-size: 1.5rem;
            }

            .container {
                padding-left: 10px;
                padding-right: 10px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        @yield('content') <!-- Konten dinamis halaman -->
    </div>

    <!-- Menyertakan Bootstrap JS dan dependensinya -->
    <script src="{{ asset('bootstrap-5.3.3/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
