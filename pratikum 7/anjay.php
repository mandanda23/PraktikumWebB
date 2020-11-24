<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai akhir</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
    if(isset($_POST["submit"])){
        $nilai_akhir = $_POST["tugas"]*0.4 + $_POST["uts"]*0.3 + $_POST["uas"]*0.3;
        if ($nilai_akhir>=80) {
            $keterangan = "Anda Lulus Dengan Nilai A";
        }elseif ($nilai_akhir>=70) {
            $keterangan = "Anda Lulus Dengan Nilai B";
        }elseif ($nilai_akhir>=60) {
            $keterangan = "Anda Lulus Dengan Nilai C";
        }else {
            $keterangan = "Anda Tidak Lulus";
        }
    }
?>
<div class="akhir">
<?php if(isset($nilai_akhir)){ ?> 
    <fieldset>  
        <h2>NILAI AKHIR MAKASISWA</h2>
        <table cellpadding="10">
            <tr>
                <td>Nama (nim)</td>
                <td>:</td>
                <td><?= $_POST["nama"];?> (<?= $_POST["nim"];?>)</td>
                
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td><?= $_POST["tugas"]; ?></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><?= $_POST["uts"]; ?></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><?= $_POST["uas"]; ?></td>
            </tr>
            <tr>
                <td>Nilai Akhir</td>
                <td>:</td>
                <td><?= $nilai_akhir; ?></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td><?= $keterangan; ?></td>
            </tr>
        </table>
        <table style="margin-left: 250px; padding: 8px">
        <tr></tr>
            <tr>
                <td><a href="coba.php"><button>kembali</button></a></td>
            </tr>
        </table>
        </fieldset>
    <?php } 
    ?>
    </div>
</body>
</html>