<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Login Aplikasi Pegawai</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            background-image: url('images/bg.jpeg'); 
            background-size: cover; /* Menyesuaikan ukuran gambar dengan layar */
            background-position: center; /* Menyelaraskan gambar ke tengah */
            background-repeat: no-repeat; /* Mencegah pengulangan gambar */
            height: 80vh; /* Memastikan background menutupi seluruh viewport */
            margin: 0; /* Menghilangkan margin default body */
            display: flex; /* Menyelaraskan konten di tengah secara vertikal */
            justify-content: center; /* Menyelaraskan konten di tengah secara horizontal */
            align-items: center; /* Menyelaraskan konten di tengah secara vertikal */
        }
    </style>

</head>
<body>
    <div class="container">
        <section class="login-box">
        <h2>Login<br>Aplikasi Pencatatan<br>Data Pegawai</h2>
            <form action="ceklogin.php" method="post" >
                <input type="text" name="username" placeholder="Username" >
                <input type="password" name="password" id="password" placeholder="Password" >
                <input type="submit" value="Login">
            </form>
        </section>
    </div>
</body>
</html>