<?php
include "../../config/conection.php";




function word($kata)
{
    $str = strtoupper(str_replace(" ", "", $kata));
    return $str;
}

function kendaraan($id)
{
    global $koneksi;
    $row = array();
    if (isset($_GET['service'])) {
        $query = "SELECT * FROM mobil WHERE id_kendaraan = '$id'";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
        } else {
            echo "row nya error";
        }
    } else {
        echo "sqlnya error";
    }
    return $row;
}

function inputService($data, $id)
{
    global $koneksi;

    $cabang = $data['cabang'];
    $jam = $data['jam'];
    $tgl = $data['tgl'];

    $query = "INSERT INTO service(id_kendaraan,cabang,jam,tgl) VALUES ('$id','$cabang','$jam','$tgl')";
    $result = mysqli_query($koneksi, $query);
    if ($result) {
        return true;
    } else {
        return false;
    }
}

function serviceOrder($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $hasil = array();
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $hasil[] = $row;
        }
    } else {
        echo "Kesalahan dalam menjalankan kueri SQL: " . mysqli_error($koneksi);
    }
    return $hasil;
}

function searchCar($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $hasil = array();
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $hasil[] = $row;
        }
    } else {
        echo "Kesalahan dalam menjalankan kueri SQL: " . mysqli_error($koneksi);
    }
    return $hasil;
}
