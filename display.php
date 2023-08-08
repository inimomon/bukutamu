<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="displayy.css">
</head>
<body>

    <div class="container"><br>
    <center><h1>Komentar Peserta :</h1></center>

    <center><a href="cari.php">Cari Hasil</a></center><br>    
    <center>
    <table class="table" border="colapse" width="450px">
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Komentar</td>
            <td>Tanggal</td>
            <td>Aksi</td>
        </tr>

        <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from peserta");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr id="hasil">
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['komentar']; ?></td>
            <td><?php echo $d['tanggal'] ?></td>
            <td><a href="respon.php?id=$d[0]">Respon</a></td>
        </tr>
        <?php 
        }
        ?>
        </table></center>
    </div>
    
</body>
</html>