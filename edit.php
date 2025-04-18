<?php

include("connect.php");

$id = $_GET['id'];
$query = $connect->query("SELECT * FROM data_siswa WHERE id=$id");
$row = $query->fetch_assoc();
// echo $row["nama"];



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $gender = $_POST['gender'];
        $telp = $_POST['telp'];
        $alamat = $_POST['alamat'];


    $query ="UPDATE data_siswa 
            SET nis='$nis', nama='$nama', gender='$gender', telp='$telp', alamat='$alamat'
            WHERE id=$id;
            ";

    if($connect->query($query) === TRUE) {
        header('location: index.php');
    }else{
        echo'gagal';
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body{
        background: pink;
    }
</style>

<body>
    <div class="container mt-5">
        <h3 class="text-center py-4">Edit Data Siswa</h3>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="nis" class="form-label">NIS</label>
                <input type="text" class="form-control" name="nis" id="nis" value="<?= $row['nis']; ?>">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?= $row['nama']; ?>" >
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="genderL" value="L" <?= $row['gender'] == 'L'  ? "checked"  : '' ;?> required>
                    <label class="form-check-label" for="genderL">
                        Ikhwan
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="genderP" value="P" <?= $row['gender'] == 'P'  ? "checked"  : '' ;?> required>
                    <label class="form-check-label" for="genderP">
                        Akhwat
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="telp" class="form-label">No Telepon</label>
                <input type="text" class="form-control" name="telp" id="telp" value="<?= $row['telp']; ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea type="text" class="form-control" name="alamat" id="alamat"><?= $row['alamat']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>