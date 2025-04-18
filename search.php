<?php
include("connect.php");
$q = $_GET["query"];
$query = ("SELECT * FROM data_siswa WHERE nama LIKE '%$q%';");
$result = $connect->query($query);

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Belajar CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    .input-group{
      width: auto;
    }
  </style>
</head>

<body style="background:pink;">
  <div class="container mt-5">
    <h2 class="text-center">Data Siswa</h2>
    <div class="d-flex justify-content-between mb-3">
      <a href="create.php" class="btn btn-primary">Create+</a>
      <form action="search.php" method="GET" class="input-group">
        <input type="text" name="query" class="form-control" placeholder="nama siswa">
        <button class="btn btn-outline-primary" type="submit" id="button-addon2">Search</button>
      </form>
    </div>
    <table class="table table-dark table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nis</th>
          <th scope="col">Nama Siswa</th>
          <th scope="col">Gender</th>
          <th scope="col">Telepon</th>
          <th scope="col">Alamat</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php $i=1; ?>
        <?php while ($row = $result->fetch_assoc()) : ?>
          <tr class="table-danger">
            <th scope="row"><?= $i++; ?></th>
            <td><?= $row['nis']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['gender']; ?></td>
            <td><?= $row['telp']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td>
              <a href="<?php echo "edit.php?id=" . $row['id']; ?>" class="btn btn-warning">
                <i class="fa-solid fa-pencil"></i>
              </a>
              <a href="<?php echo "delete.php?id=" . $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Data <?= $row['nama']; ?> akan dihapus?');">
                <i class="fa-solid fa-trash text-black"></i>
              </a>
            </td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>