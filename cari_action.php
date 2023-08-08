<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    include 'koneksi.php';
    $field = $_POST['field'];
    $pencarian = $_POST['pencarian'];

    $data = mysqli_query($koneksi, "select * from peserta where $field like '%$pencarian%'");
    while($d = mysqli_fetch_array($data)) {
        echo "<a href='lihat_datasiswa.php?id=$d[0]'>$d[$field]</a><br>"; 
    }
    ?>
    
</body>
</html>