<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil User - Politeknik Negeri Malang</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>
<body>
    <style>
        /* Add your styles here */
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #0F3AA6;
            color: white;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .navbar-header img {
            height: 40px;
        }

        .navbar-text {
            color: white;
            margin-left: 10px;
            font-size: 24px;
            font-weight: bold;
        }

        .container.content {
            text-align: center;
            padding: 50px 15px;
        }

        .btn-user-category {
            background-color: #4839e6;
            border-color: #4839e6;
            color: #fff;
            font-size: 18px;
            padding: 15px;
            margin: 5px;
        }

        .btn-user-category:hover {
            background-color: #372fb5;
            border-color: #372fb5;
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 32px;
            margin-bottom: 40px;
        }

        .logo img {
            height: 40px;
        }
    </style>
    <nav class="navbar navbar-expand-sm p-3 navbar-dark">
        <div class="logo">
            <img src="logo-polinema.png" alt="Logo Polinema">
        </div>
        <div class="container-fluid">
            <p class="navbar-brand">POLITEKNIK NEGERI MALANG</p>
        </div>
    </nav>

    <h2>Pilih Kategori User</h2>
    <ul>
        <li><a href="login.php?kategori_user_id=3">Tendik</a></li>
        <li><a href="login.php?kategori_user_id=6">Orang Tua</a></li>
        <li><a href="login.php?kategori_user_id=4">Mahasiswa</a></li>
        <li><a href="login.php?kategori_user_id=7">Industri</a></li>
        <li><a href="login.php?kategori_user_id=2">Dosen</a></li>
        <li><a href="login.php?kategori_user_id=5">Alumni</a></li>
    </ul>
</body>
</html>
