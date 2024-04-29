<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
</head>
<title >
    PP. Salafiyah Syafi'iyah</title>

 <body>
 <?php include "layout/header.html" ?> 
<div class = "container_data_ziyadah">
    <br>
    <h4><center>DATA ZIYADAH SANTRI</center></h4>
<style>
    span {
      color: white;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }
    th {
        background-color: green;
        color: aliceblue;     
    }
    tbody {
        background-color: aquamarine;
    }
</style>
</head>
<body>
<div class = "container_data_ziyadah">
<table>
  <thead>
    <tr>
      <th style=width:10%;> NO</th>
      <th style=width:30%;>NAMA</th>
      <th style=width:20%;>MULAI SURAT</th>
      <th style=width:10%;>MULAI AYAT</th>
      <th style=width:20%;>SAMPAI SURAT</th>
      <th style=width:10%;>SAMPAI AYAT</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Nama</td>
      <td>surat</td>
      <td>ayat</td>
      <td>surat</td>
      <td>ayat</td>
    </tr>
    <!-- Tambahkan baris tambahan sesuai kebutuhan -->
  </tbody>
</table>

</div>

</body>
</html>
