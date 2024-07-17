<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Info Pekerja</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<h2>Input Pekerja Info</h2>

<div class="form-container">
    <form action="" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br>

        <label for="nokp">No. KP:</label><br>
        <input type="text" id="nokp" name="nokp" required><br>

        <label for="noTel">No. Tel:</label><br>
        <input type="text" id="noTel" name="noTel"><br>

        <label for="tarikhLahir">Tarikh Lahir:</label><br>
        <input type="date" id="tarikhLahir" name="tarikhLahir" required><br>

        <label for="negeri">Negeri:</label><br>
        <input type="text" id="negeri" name="negeri" required><br>

        <label for="institusi">Institusi:</label><br>
        <input type="text" id="institusi" name="institusi"><br>

        <label for="tahun">Tahun:</label><br>
        <input type="number" id="tahun" name="tahun"><br>

        <label for="pencapaian">Pencapaian:</label><br>
        <input type="text" id="pencapaian" name="pencapaian"><br>

        <!-- Button Submit -->
        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
