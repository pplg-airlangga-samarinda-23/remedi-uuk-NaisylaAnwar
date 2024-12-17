<?php
    if (isset($_POST['submit_jumlah'])) 
        $jumlah_siswa = intval($_POST['jumlah_siswa']);

        echo "<form method='POST' action=''>";
        echo "<h3>Masukkan Tinggi Badan untuk $jumlah_siswa Siswa</h3>";
        for ($i = 1; $i <= $jumlah_siswa; $i++) 
?>