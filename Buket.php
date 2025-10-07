<?php
include 'FormInputBuket.php';
$form = new FormInputBuket('ProsesBuket.php');
$form->open();

// Dropdown jenis buket
$form->select('jenis_buket', 'Jenis Buket', [
    'buket_bunga'=>'Buket Bunga',
    'buket_snack'=>'Buket Snack',
    'buket_boneka'=>'Buket Boneka',
    'buket_uang'=>'Buket Uang',
]);

// Checkbox tema
$form->inputCheckbox('tema', 'Tema', [
    'graduation'=>'Graduation',
    'birthday'=>'Birthday',
    'wedding'=>'Wedding'
]);

// Radio ukuran
$form->inputRadio('size', 'Size', [
    'kecil'=>'Kecil',
    'sedang'=>'Sedang',
    'besar'=>'Besar'
]);

// Input text harga
$form->inputText('harga', 'Harga');

// Textarea deskripsi
$form->textarea('deskripsi', 'Deskripsi');

// Submit
$form->submit('Simpan Buket');
$form->close();
?>
