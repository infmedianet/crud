<?php

class dbLokal
{
    var $host = "localhost";
    var $username = "root";
    var $password = "11110000";
    var $database = "crud";
    var $koneksi = "";

    function __construct()
    {
        // $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "Koneksi Data Gagal : " . mysqli_connect_error();
        }
    }

    // read data pasien
    function readDataPasien()
    {
        $hasil = null;
        $query = mysqli_query($this->koneksi, "SELECT * FROM pasien");
        while ($row = mysqli_fetch_array($query)) {
            $hasil[] = $row;
        }
        return $hasil;
    }

    // insert data pasien
    function simpanDataPasien($nama, $alamat)
    {
        $query = mysqli_query($this->koneksi, "INSERT INTO pasien (nama,alamat) VALUES ('$nama', '$alamat');");
        //pengecekan query jika error saja
        // if ($query) {
        //     echo "Data berhasil disimpan.";
        // } else {
        //     echo "Gagal menyimpan data: " . mysqli_error($this->koneksi);
        // }
    }

    // delete data pasien
    function deleteDataPasien($idPasien)
    {
        $query = mysqli_query($this->koneksi, "DELETE FROM pasien WHERE id_pasien ='$idPasien';");
        //pengecekan query jika error saja
        // if ($query) {
        //     echo "Data berhasil disimpan.";
        // } else {
        //     echo "Gagal menyimpan data: " . mysqli_error($this->koneksi);
        // }
    }
}
