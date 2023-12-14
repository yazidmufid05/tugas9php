<?php
   // Tangkap request class_fruit
   require_once 'class_fruit.php';

   // Buat instance objek fruit: $apple dan $banana
   $apple = new Fruit();
   $banana = new Fruit();

   // Panggil member class
   $apple->set_name('Apel'); 
   $apple->set_color('Merah'); 
   $banana->set_name('Pisang'); 
   $banana->set_color('Kuning'); 

   echo 'Nama Buah '.$apple->get_name().' Warna '.$apple->get_color();
   echo '<br/>Nama Buah '.$banana->get_name().' Warna '.$banana->get_color();
?>
