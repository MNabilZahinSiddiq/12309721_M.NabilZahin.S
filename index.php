<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan IMT ( Index Massa Tubuh )</title>

    <!-- Memanggil file CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Icon Website -->
    <link rel="Icon Website" href="./assets/icon.png">
</head>
<body>
    <!-- Main Div Start -->
    <div class="container">

        <!-- Div Hasil Start -->
        <div class="container-main">
            
            <!-- Image Logo -->
            <img src="./assets/icon.png" alt="assets-image">
            
            <?php

                // Merubah input menjadi class
                $tinggi = @$_POST['tinggi_badan'];

                echo "<h1>IMT</h1>";

                // Percabangan untuk mencari nilai
                if (@$_POST['berat_badan'] == "" || @$_POST['tinggi_badan'] == "") {
                    echo "<h3>Masukkan berat dan tinggi badan anda!</h3>";
                } else {

                    // Mmencari nilai tingkat obesitas
                    $obesitas = $_POST['berat_badan'] / ($tinggi * $tinggi);

                    // Percabangan untuk menentukan nilai dari tingkat obesitas
                    if ($obesitas < 15){
                        $tingkat = "Sangat kurus";
                    } else if ($obesitas >= 15 && $obesitas < 18.5) {
                        $tingkat = "Kurus";
                    } else if ($obesitas >= 18.5 && $obesitas < 25) {
                        $tingkat = "Normal";
                    } else if ($obesitas >= 25 && $obesitas < 30) {
                        $tingkat = "Berlebih (Kegemukan)";
                    } else if ($obesitas >= 30 && $obesitas < 35) {
                        $tingkat = "Obesitas Tingkat I";
                    } else if ($obesitas >= 35 && $obesitas < 40) {
                        $tingkat = "Obesitas Tingkat II";
                    } else {
                        $tingkat = "Obesitas Tingkat III";
                    }

                    // Output tingkat obesitas
                    echo "<h2>" . $tingkat . "</h2>";
                }
            ?>

        </div>
        <!-- Div Hasil End -->

        <div class="container-aside">

            <!-- Form untuk pengisian data -->
            <form action="" method="POST">
                <!-- Pembagian DIV untuk mempermudah proses styling input -->
                <div class="form-group">
                    <!-- <label for="berat_badan">Berat Badan (kg) :</label> -->
                    <input type="text" name="berat_badan" id="" placeholder="Berat Badan (kg)">
                </div>
                <div class="form-group">
                    <!-- <label for="tinggi_badan">Tinggi Badan (m) :</label> -->
                    <input type="text" name="tinggi_badan" id="" placeholder="Tinggi Badan (m)">
                </div>

                <!-- Button tipe submit untuk mengirim input di pengisian data -->
                <button class="btn" type="submit">Kirim</button>
            </form>
        </div>
    </div>
    <!-- Main Div End -->
</body>
</html>