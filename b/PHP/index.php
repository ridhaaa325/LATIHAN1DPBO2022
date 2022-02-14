<?php include "timbola.php";

	$Barcelona = new TimBola();
    $ManchesterUnited = new TimBola();
	$ManchesterCity = new TimBola();
    $Arsenal = new TimBola();
    
	$Barcelona->set_nama("Barcelona");
    $Barcelona->set_negara("Spanyol");
    $Barcelona->set_tahun("1899");
    $Barcelona->set_pelatih("Xavi");
    //$Barcelona->set_pemain("4");

	$ManchesterUnited->set_nama("Manchester United");
    $ManchesterUnited->set_negara("Inggris");
    $ManchesterUnited->set_tahun("1878");
    $ManchesterUnited->set_pelatih("Ralf Rangnick");
    //$ManchesterUnited->set_pemain("4");
    
    $ManchesterCity->set_nama("Manchester City");
    $ManchesterCity->set_negara("Inggris");
    $ManchesterCity->set_tahun("1880");
    $ManchesterCity->set_pelatih("Pep Guardiola");
    //$ManchesterCity->set_pemain("4");

    $Arsenal->set_nama("Arsenal");
    $Arsenal->set_negara("Inggris");
    $Arsenal->set_tahun("1886");
    $Arsenal->set_pelatih("Mikel Arteta");
    //$Arsenal->set_pemain("4");

	echo "Nama Tim          : " . $Barcelona->get_nama(); echo "<br>";
	echo "Negara Tim        : " . $Barcelona->get_negara(); echo "<br>";
    echo "Tahun Tim Berdiri : " . $Barcelona->get_tahun(); echo "<br>";
    echo "Nama Pelatih      : " . $Barcelona->get_pelatih(); echo "<br>";
    echo "<br>";

    echo "Nama Tim          : " . $ManchesterUnited->get_nama(); echo "<br>";
	echo "Negara Tim        : " . $ManchesterUnited->get_negara(); echo "<br>";
    echo "Tahun Tim Berdiri : " . $ManchesterUnited->get_tahun(); echo "<br>";
    echo "Nama Pelatih      : " . $ManchesterUnited->get_pelatih(); echo "<br>";
    echo "<br>";
    
    echo "Nama Tim          : " . $ManchesterCity->get_nama(); echo "<br>";
	echo "Negara Tim        : " . $ManchesterCity->get_negara(); echo "<br>";
    echo "Tahun Tim Berdiri : " . $ManchesterCity->get_tahun(); echo "<br>";
    echo "Nama Pelatih      : " . $ManchesterCity->get_pelatih(); echo "<br>";
    echo "<br>";

    echo "Nama Tim          : " . $Arsenal->get_nama(); echo "<br>";
	echo "Negara Tim        : " . $Arsenal->get_negara(); echo "<br>";
    echo "Tahun Tim Berdiri : " . $Arsenal->get_tahun(); echo "<br>";
    echo "Nama Pelatih      : " . $Arsenal->get_pelatih(); echo "<br>";
    echo "<br>";
    
?>