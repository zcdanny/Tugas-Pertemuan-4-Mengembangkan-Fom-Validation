<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Rata-rata</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Kalkulator Rata-rata</h1>

    <form action="proses.php" method="post">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="nilai1">Nilai 1:</label>
            <input type="number" name="nilai1" id="nilai1" required>
        </div>

        <div class="form-group">
            <label for="nilai2">Nilai 2:</label>
            <input type="number" name="nilai2" id="nilai2" required>
        </div>

        <div class="form-group">
            <label for="nilai3">Nilai 3:</label>
            <input type="number" name="nilai3" id="nilai3" required>
        </div>

        <button type="submit">Hitung Rata-rata</button>
    </form>

    <?php
    if (isset($_GET['error'])) {
        echo "<p class='error-message'>" . $_GET['error'] . "</p>";
    }

    if (isset($_GET['rata_rata'])) {
        echo "<p class='result'>Rata-rata: " . $_GET['rata_rata'] . "</p>";
    }
    ?>

</body>
</html>
