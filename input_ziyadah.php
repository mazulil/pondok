<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SETORAN ZIYADAH</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h2>Input Ziyadah</h2>
    <form action="#input_ziyadah.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="mulai_surat">Mulai Surat:</label>
        <input type="text" id="mulai_surat" name="mulai_surat" required>

        <label for="mulai_ayat">Mulai Ayat:</label>
        <input type="text" id="mulai_ayat" name="mulai_ayat" required>

        <label for="sampai_surat">Sampai Surat:</label>
        <input type="text" id="sampai_surat" name="sampai_surat" required>

        <label for="sampai_ayat">Sampai Ayat:</label>
        <input type="text" id="sampai_ayat" name="sampai_ayat" required>

        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>
