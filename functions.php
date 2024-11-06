<?php

require_once 'config.php';

function connect_db() {
    $db = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
    
    return $db;
}

$db = connect_db();

function get_list_kendaraan() {
    global $db;

    $sql = "SELECT * FROM siparkir_kendaraan";
    $eksekusi = $db->query($sql);

    $data = array();
    while ($row = $eksekusi->fetch_assoc()) {
        $data[] = $row;
    }

    return $data;
}

function add_kendaraan() {
    global $db;

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $jenis_kendaraan = $_POST['jenis_kendaraan'];
        $biaya_jam = $_POST['biaya_jam'];

        $sql = "INSERT INTO siparkir_kendaraan (jenis_kendaraan, biaya_jam) VALUES ('$jenis_kendaraan', '$biaya_jam')";
        $eksekusi = $db->query($sql);

        if($eksekusi) {
            header('Location: jenis_kendaraan.php');
            exit;
        }
    } 
}

function get_kendaraan_by_id() {
    global $db;

    $data = array();
    if(isset($_GET['id'])) {
        $get_id = $_GET['id'];
        $sql = "SELECT * FROM siparkir_kendaraan WHERE id = '$get_id'";
        $eksekusi = $db->query($sql);

        if($eksekusi && $eksekusi->num_rows > 0) {
            $data = $eksekusi->fetch_assoc();
        }
    }
    return $data;
}

function update_kendaraan() {
    global $db;

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $jenis_kendaraan = $_POST['jenis_kendaraan'];
        $biaya_jam = $_POST['biaya_jam'];

        $sql = "UPDATE siparkir_kendaraan SET jenis_kendaraan = '$jenis_kendaraan', biaya_jam = '$biaya_jam' WHERE id = '$id'";
        $eksekusi = $db->query($sql);

        if($eksekusi) {
            header('Location: jenis_kendaraan.php');
            exit;
        }
    } 
}

function delete_kendaraan() {
    global $db;

    if(isset($_GET['id'])) {
        $get_id = $_GET['id'];
        
        $sql = "DELETE FROM siparkir_kendaraan WHERE id = '$get_id'";
        $eksekusi = $db->query($sql);

        if($eksekusi) {
            header('Location: jenis_kendaraan.php');
            exit;
        }
    }
}