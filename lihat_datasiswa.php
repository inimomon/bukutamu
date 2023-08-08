<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Komentar</th>
            <th>Tanggal</th>
        </tr>
    <?php 
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"select * from peserta where id='$id'");
        while ($d = mysqli_fetch_array($data)){
        ?>
            <tr>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['komentar']; ?></td>
                <td><?php echo $d['tanggal']; ?></td>
            </tr>
        </table>
        <?php 
        }
        ?>
    
</body>
</html>