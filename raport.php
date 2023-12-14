<?php
    // Tangkap request class_nilaiSantri.php
    require_once 'class_nilaisantri.php';

    $ns1 = new NilaiSantri(); 
    $ns1->nama = 'Fulan';
    $ns1->nilai = 70; 
    echo $ns1->nama . ' Kuliah di ' . $ns1->sekolah;
    echo '<br/>Hasil Ujian : ' . $ns1->nilai . ' dinyatakan ' . $ns1->getHasil();
?>