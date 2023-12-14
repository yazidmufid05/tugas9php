<?php
   // Tangkap request class_nilai.php
   require_once 'class_nilai.php';

   $ns1 = new NilaiSantri('Fulan', 70);
   $ns2 = new NilaiSantri('Bedu', 68);
   $ns3 = new NilaiSantri('Somad', 85);
   $ns4 = new NilaiSantri('Bubu', 40);
   $ar_santri = [$ns1, $ns2, $ns3, $ns4];
?>

<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }
</style>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Hasil</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nomor = 1;
            foreach ($ar_santri as $san) {
                echo '<tr><td>'.$nomor.'</td><td>'.$san->nama.'</td>';
                echo '<td>'.$san->nilai.'</td><td>'.$san->getHasil().'</td></tr>';
                $nomor++;
            }
        ?>    
    </tbody>
</table>