<?php
require 'functions.php';

$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
    alert('Data anda berhasil dihapus');
    document.location.href = 'data.php';
    </script>";
} else {
    echo "<p><font>Data gagal dihapus</p></font>";
}
