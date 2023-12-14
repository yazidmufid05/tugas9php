<?php
   class NilaiSantri {
        public $nama;
        public $nilai;
        public $kuliah = 'PeTIK Jombang';

        function __construct($nama, $nilai) {
            $this->nama = $nama;
            $this->nilai = $nilai;
        }

        public function getHasil() {
            if ($this->nilai >= 70) {
                return 'Lulus';
            } else {
                return 'Tidak Lulus';
            }
        }
   }
?>