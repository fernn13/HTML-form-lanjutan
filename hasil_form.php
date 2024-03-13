<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Penjadwalan Pertemuan</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Hasil Penjadwalan Pertemuan</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $no_telepon = $_POST["no_telepon"];
        $email = $_POST["email"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $tujuan_pertemuan = $_POST["tujuan_pertemuan"];
        $tingkat_kepentingan = $_POST["tingkat_kepentingan"];
        $tanggal_pertemuan = $_POST["tanggal_pertemuan"];
        $waktu_pertemuan = $_POST["waktu_pertemuan"];
    ?>
    <h3>Informasi Pribadi</h3>
    <table>
        <tr>
            <th>Nama</th>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <th>No. Telepon</th>
            <td><?php echo $no_telepon; ?></td>
        </tr>
        <tr>
            <th>Alamat Email</th>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td><?php echo $tanggal_lahir; ?></td>
        </tr>
    </table>

    <h3>Permintaan Pertemuan</h3>
    <table>
        <tr>
            <th>Tujuan Pertemuan</th>
            <td><?php echo $tujuan_pertemuan; ?></td>
        </tr>
        <tr>
            <th>Tingkat Kepentingan Pertemuan</th>
            <td><?php echo $tingkat_kepentingan; ?></td>
        </tr>
        <tr>
            <th>Tanggal</th>
            <td><?php echo $tanggal_pertemuan; ?></td>
        </tr>
        <tr>
            <th>Waktu</th>
            <td><?php echo $waktu_pertemuan; ?></td>
        </tr>
    </table>
    <?php
    }
    ?>
</body>
</html>
