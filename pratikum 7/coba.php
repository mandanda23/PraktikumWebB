<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pratikum 7</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table td {
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <fieldset>
            <h2>
                MASUKAN NILAI MAHASISWA
            </h2>
            <form action="anjay.php" method="post">
                <table>
                    <tr>
                        <td><label style="margin-left: 49px;" for="nama">Nama </label></td>
                        <td>: <input type="text" name="nama" id="nama"></td>
                        <td><label style="margin-left: 25px;" for="nim">NIM </label></td>
                        <td>: <input type="text" name="nim" id="nim"></td>
                    </tr>
                </table>
                <table style="padding: 15px;">
                    <tr>
                        <td><label for="tugas">Nilai Tugas</label></td>
                        <td>: <input type="number" name="tugas" id="tugas"></td>
                    </tr>
                    <tr>
                        <td><label for="uts">Nilai UTS</label></td>
                        <td>: <input type="number" name="uts" id="uts"></td>
                    </tr>
                    <tr>
                        <td><label for="uas">Nilai UAS</label></td>
                        <td>: <input type="number" name="uas" id="uas"></td>
                    </tr>

                </table>
                <table style="margin-left: 250px;">
                    <tr>
                        <td><input type="submit" name="submit"></td>
                    </tr>
                </table>
        </fieldset>
        </form>
    </div>
</body>

</html>