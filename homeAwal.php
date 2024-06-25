<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <title>Survey Kepuasan Pelanggan</title>
    <script>
      function openPopup() {
    document.getElementById("popup").style.display = "block";
   }
   function closePopup() {
    document.getElementById("popup").style.display = "none";
   }
   function pilihPengguna(tipe) {
    window.location.href = "homepilihuser.php";
    closePopup();
  }
   function toggleMenu() {
    const menu = document.getElementById("menu");
    menu.classList.toggle("active");
  }
    </script>
</head>
<style>
    h1, h4 {
    text-align: center;
}

body {
  text-align: center;
  background-image: url('assets/images/gedung-aa-polinema.jpg');
  background-size: 130%; 
  background-position: center;
  background-repeat: repeat; 
  color: white; /* Ensure text is visible on the image */
}

/* Gaya Navbar */
.navbar {
  background-color: #0F3AA6; 
  color: white;
  padding: 15px;
  display: flex;
  justify-content: space-around;
  align-items: center;
}
  
.logo img {
  height: 40px; 
}

.masuk-btn {
  background-color: #0F3AA6; 
  color: white;
  padding: 8px 12px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}

.content {
  text-align: center;
  color: black;
  padding-top: 100px; /* Add more padding to match the image */
  padding: 50px;
}
  
  .popup {
    display: none; /* Sembunyikan popup secara default */
    position: fixed; /* Tetap pada posisinya saat di-scroll */
    top: 10px; /* Jarak dari atas */
    right: 10px; /* Jarak dari kanan */
    /* Hapus transform: translate(-50%, -50%); */ 
    background-color: white;
    padding: 20px;
    border-radius: 8px;

  }
  
  .popup-content {
    text-align: center;
  }
  
  .close-button {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 20px;
    cursor: pointer;
  }
</style>
<body>
    <nav class="navbar navbar-expand-sm">
        <div class="logo">
            <img src="assets/images/logo-polinema.png" alt="Logo Polinema">
        </div>
        <div class="container-fluid">
            <p class="navbar-brand">POLITEKNIK NEGERI MALANG</p>
        </div>
        <button class="masuk-btn" onclick="openPopup()">Masuk</button>
    </nav>
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close-button" onclick="closePopup()">&times;</span>
            <h2>Pilih Pengguna</h2>
            <a href="login.php?kategori_user_id=1">Admin</a> | <a href="homepilihuser.php">User</a>
        </div>
    </div>
    <div class="content">
        <h1>Survey Kepuasan Pelanggan <br> Politeknik Negeri Malang</h1>
        <p>Mengukur kepuasan dan meningkatkan kualitas layanan serta fasilitas <br> Politeknik Negeri Malang agar menjadi lebih baik</p>
    </div>
    <script>
        function openPopup() {
            document.getElementById('popup').style.display = 'block';
        }
        function closePopup() {
            document.getElementById('popup').style.display = 'none';
        }
    </script>
</body>
</html>
