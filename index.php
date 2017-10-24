<?php

class baju {

	public $ukuran 		= 'xl';
	public $berbahan 	= 'sutra';
	public $model		= 'pria';
	public $harga 		= 25.000;

}

$baju1 = new baju ;
echo "baju". '<br>' ; 
echo "	Ukuran baju 		: " .$baju1->ukuran. 	'<br>' ; 
echo "	Baju berbahan 		: " .$baju1->berbahan. 	'<br>' ;
echo "	Model baju 			: " .$baju1->model. 	'<br>' ; 
echo "	Harga 				: " .$baju1->harga. 	'<br>' ;  

echo"<br>";

class celana {

	public $ukuran 		= 46;
	public $model 		= 'wanita';
	public $kain		= 'katun';
}


$celana1 = new celana ;
echo "celana". '<br>';
echo "	Ukuran celana 		: " .$celana1->ukuran. 	'<br>' ; 
echo "	Model celana 		: " .$celana1->model. 	'<br>' ;
echo "	Ukuran celana 		: " .$celana1->kain. 	'<br>' ;

echo"<br>";

class harimau {

	public $suara 		= 'meong';
	public $jenis		= 'laki-laki';
	public $kaki		= 4;

}

$harimau1 = new harimau ;
echo "Harimau". '<br>';
echo "	Suara 		: " .$harimau1->suara. 		'<br>' ; 
echo "	jenis 		: " .$harimau1->jenis. 		'<br>' ;
echo "	Kaki 		: " .$harimau1->kaki. 		'<br>' ;

echo"<br>";

class menu {

	public $makanan 		= 'burger';
	public $minuman			= 'tea';

}

$menu1 = new menu ;  
echo "Menu". '<br>';
echo "	makanan 		: " .$menu1->makanan. 	'<br>' ; 
echo "	minuman 		: " .$menu1->minuman. 	'<br>' ;

echo"<br>";

class kaoskaki {

	public $warna 		= 'hitam';
	public $ukuran		= 'm';

}

$kaoskaki1 = new kaoskaki ;
echo "Kaoskaki". '<br>'; 
echo "	warna		: " .$kaoskaki1->warna. 	'<br>' ; 
echo "	ukuran 		: " .$kaoskaki1->ukuran. 	'<br>' ;
?>