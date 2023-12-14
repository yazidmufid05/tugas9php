<?php
    class Matematika {
        // Konstanta class
        const PHI = 3.14;

        // static member variable
        public static $counter = 100;

        // static member function
        public static function tambahkan($a, $b){
            return $a + $b;
        }

        // akses member variable dari dalam class
        public static function naikanCounter(){
            // Increment the counter
            self::$counter++;
        }

        // akses konstanta class
        public static function luasLingkaran($jari){
            $luas = self::PHI * $jari * $jari;
            return $luas;
        }
    }
?>
