<?php
include("../connect.php");


$method = $_SERVER['REQUEST_METHOD'];

function respon_data($code, $msg, $data = null)
{
    $res = [
        'code' => $code,
        'msg' => $msg,
    ];
    if ($data !== null) {
        $res['data'] = $data;
    }
    echo json_encode($res);
}

$requireds = ['nis', 'nama', 'telp', 'gender', 'alamat'];
function validate_required_field(array $input, array $requireds)
{
    foreach ($requireds as $required) {
        if (!isset($input[$required]) || empty($input[$required])) {
            respon_data(500, "Kolom$required harus di isi !");
            exit;
        }
    }
}
switch ($method) {
    case 'GET':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $q = $connect->query("SELECT * FROM data_siswa  WHERE id = $id");
            $row = $q->fetch_all(MYSQLI_ASSOC);
            if ($row) {
                respon_data(200, 'Get detail data students', $row);
            } else {
                respon_data(404, 'No Data');
            }
        } else {
            $q = $connect->query("SELECT * FROM data_siswa");
            $row = $q->fetch_all(MYSQLI_ASSOC);
            // print_r($row);
            echo json_encode([
                'code' => 200,
                'msg' => 'Get data students',
                'data' => $row
            ]);
        }
        break;
    case 'POST':
        $input = json_decode(file_get_contents('php://input'), true);

        validate_required_field($input, $requireds);

        $nis = $input['nis'];
        $nama = $input['nama'];
        $gender = $input['gender'];
        $telp = $input['telp'];
        $alamat = $input['alamat'];

        $query = "INSERT INTO data_siswa 
            (nis, nama, gender, telp, alamat)
            VALUES
            ('$nis', '$nama', '$gender', '$telp', '$alamat');
            ";

        if ($connect->query($query) === TRUE) {
            respon_data(200, 'Create data students');
        } else {
            respon_data(200, 'Failed to get data students');
        }
        break;
    case 'PUT':
        $input = json_decode(file_get_contents('php://input'), true);
        validate_required_field($input, $requireds);

        $id = $input['id'];
        $nis = $input['nis'];
        $nama = $input['nama'];
        $gender = $input['gender'];
        $telp = $input['telp'];
        $alamat = $input['alamat'];

        $q = "UPDATE data_siswa 
        SET nis='$nis', nama='$nama', gender='$gender', telp='$telp', alamat='$alamat'
        WHERE id=$id;
        ";
        $query = $connect->query("SELECT * FROM data_siswa WHERE id=$id");
        $row = $query->fetch_assoc();

        if ($connect->query($q) === TRUE) {
            respon_data(200, 'Update data students', $row);
        } else {
            respon_data(200, 'Failed to Update data students');
        }
        break;
    case 'DELETE':
        $id = $_GET['id'];

        $query = "DELETE FROM data_siswa WHERE id=$id";

        if ($connect->query($query) === true) {
            respon_data(200, "Delete Data Student");
        } else {
            respon_data(200, 'Failed to Update data students');
        }
        break;
    default:
        # code...
        break;
}
