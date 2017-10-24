<?php
require_once 'index6.php';

$biodata1 =new biodata('Rudi','Bandung','XI RPL 1','pelajar');

echo "Namanya :".$biodata1->get_nama().'<br>';
echo "Tempat Lahir :".$biodata1->get_tempatlahir().'<br>';
echo "Kelas :".$biodata1->get_kelas().'<br>';
echo "Status :".$biodata1->get_status().'<br>';

echo "<br>";

$biodata2 =new biodata('robi','Bandung','XI RPL 2','kawin');

echo "Namanya :".$biodata2->get_nama().'<br>';
echo "Tempat Lahir :".$biodata2->get_tempatlahir().'<br>';
echo "Kelas :".$biodata2->get_kelas().'<br>';
echo "Status :".$biodata2->get_status().'<br>';

echo "<br>";

$biodata3 =new biodata('firas','Bandung','XI RPL 3','duda');

echo "Namanya :".$biodata3->get_nama().'<br>';
echo "Tempat Lahir :".$biodata3->get_tempatlahir().'<br>';
echo "Kelas :".$biodata3->get_kelas().'<br>';
echo "Status :".$biodata3->get_status().'<br>';

echo "<br>";

$biodata4 =new biodata('rizki f','Bandung','XI RPL 4','mahasiswi');

echo "Namanya :".$biodata4->get_nama().'<br>';
echo "Tempat Lahir :".$biodata4->get_tempatlahir().'<br>';
echo "Kelas :".$biodata4->get_kelas().'<br>';
echo "Status :".$biodata4->get_status().'<br>';

echo "<br>";

$biodata5 =new biodata('ceu ayom','Bandung','XI RPL 5','janda');

echo "Namanya					 :".$biodata5->get_nama().'<br>';
echo "Tempat Lahir				 :".$biodata5->get_tempatlahir().'<br>';
echo "Kelas 					 :".$biodata5->get_kelas().'<br>';
echo "Status 					 :".$biodata5->get_status().'<br>';








?>