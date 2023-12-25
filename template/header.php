<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contoh Modularisasi</title>
<link href="style.css" rel="stylesheet" type="text/stylesheet"
media="screen" />
<style>
body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 5px;
}
h1 {
  text-align: center;
}

header {
    background-color: #d3d3d3;
    padding: 20px;
    text-align: center;
  }

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
footer {
  background-color: #333;
  padding: 5px;
  color: #eee;
  text-align: center;
}
</style>
</head>
<body>
<div class="container">
<header>
<h1>Modularisasi Menggunakan Require</h1>
</header>
<nav>
    <ul>
<li><a href="home.php">Home</a></li>
<li><a href="about.php">Tentang</a></li>
<li><a href="kontak.php">Kontak</a></li>
<li><a href="tambah.php">Tambah Data</a></li>
<li><a href="index.php">Lihat Data</a></li>
</ul>
</nav>