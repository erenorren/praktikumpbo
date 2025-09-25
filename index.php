<?php
// Daftar file Praktikum Matkul PBO
$latihan = [
   ["file" => "latihansatu.php", "judul" => "Latihan : Persegi Panjang", "tanggal" => "2025"],
   ["file" => "latihandua.php", "judul" => " Latihan : Stok Barang", "tanggal" => "2025"],
   ["file" => "latihantiga.php", "judul" => "Latihan : Login", "tanggal" => "2025"],
   ["file" => "classsegitiga.php", "judul" => "Tugas PBO Sesi 4 : classsegitiga.php ", "tanggal" => "01-09-2025"],
   ["file" => "objeksegitiga.php", "judul" => "Tugas PBO Sesi 4 : objeksegitiga.php", "tanggal" => "01-09-2025"],
   ["file" => "Sesi 5 - Modul 1 lembar kerja 3.php", "judul" => "Tugas PBO Sesi 5 : Praktikum 5.1 ", "tanggal" => "13-09-2025"],
   ["file" => "Sesi 5 - Modul 2 lembar kerja 1.php", "judul" => "Tugas PBO Sesi 5 : Praktikum 5.2  ", "tanggal" => "13-09-2025"],
   ["file" => "Sesi 6 - Modul 3 lembar kerja 2.php", "judul" => "Tugas PBO Sesi 6 : Praktikum", "tanggal" => "19-09-2025"]


];
?>
<!DOCTYPE html>
<html lang="id">
<head>
   <meta charset="UTF-8">
   <title>Daftar Latihan dan Tugas - PBO</title>
   <style>
       body { 
           font-family: Arial, sans-serif; 
           margin: 40px; 
           background: #f9fafb;
           color: #333;
       }
       h1 { 
           text-align: center; 
           margin-bottom: 30px;
       }
       table {
           width: 100%;
           border-collapse: collapse;
           background: #fff;
           box-shadow: 0 2px 8px rgba(0,0,0,0.1);
           border-radius: 8px;
           overflow: hidden;
       }
       th, td {
           padding: 12px 16px;
           border-bottom: 1px solid #e5e7eb;
           text-align: left;
       }
       th {
           background: #b2d1ff;
           color: #000;
           font-weight: bold;
       }
       tr:hover {
           background: #f1f5f9;
       }
       a {
           text-decoration: none;
           color: #0a0e13;
           background: #e0ecff;
           padding: 6px 12px;
           border-radius: 6px;
           font-size: 14px;
       }
       a:hover {
           background: #0a0e13;
           color: #fff;
       }
   </style>
</head>
<body>
   <h1>Daftar Latihan dan Tugas PBO - Regisha Sheren</h1>
   <table>
       <thead>
           <tr>
               <th>No</th>
               <th>Judul Tugas</th>
               <th>Tanggal</th>
               <th>Link</th>
           </tr>
       </thead>
       <tbody>
           <?php foreach ($latihan as $i => $item): ?>
               <tr>
                   <td><?= $i+1 ?></td>
                   <td><?= $item["judul"] ?></td>
                   <td><?= $item["tanggal"] ?></td>
                   <td><a href="<?= $item["file"] ?>" target="_blank">Lihat</a></td>
               </tr>
           <?php endforeach; ?>
       </tbody>
   </table>
</body>
</html>
