<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="cari_action.php" method="post">
        <div>
            <label>Kategori :</label>
            <select name="field">
                <option value="nama">Nama</option>
                <option value="komentar">Komentar</option>
                <option value="tanggal">Tanggal</option>
            </select>
        </div>

        <div>
            <label>Cari :</label>
            <input type="text" name="pencarian">
        </div>

        <div><button type="submit">Submit</button></div>
        
    </form>
    
</body>
</html>