<?php include "mahasiswa.php";

	$ridha = new Mahasiswa();
    $satria = new Mahasiswa();
	$amim = new Mahasiswa();
    $parhan = new Mahasiswa();
    
	$ridha->set_nama("Muhammad Ridha Samudra");
    $ridha->set_nim("2001680");
    $ridha->set_prodi("Ilmu Komputer");
    $ridha->set_gender("Laki Laki");
    $ridha->set_semester("4");

	$amim->set_nama("Ahmad Muflih");
    $amim->set_nim("2000867");
    $amim->set_prodi("Ilmu Komputer");
    $amim->set_gender("Laki Laki");
    $amim->set_semester("4");
    
    $satria->set_nama("Muhammad Satria R");
    $satria->set_nim("2005128");
    $satria->set_prodi("Ilmu Komputer");
    $satria->set_gender("Laki Laki");
    $satria->set_semester("4");

    $parhan->set_nama("Parhan Ferdiansyah");
    $parhan->set_nim("2001531");
    $parhan->set_prodi("Pendidikan Ilmu Komputer");
    $parhan->set_gender("Laki Laki");
    $parhan->set_semester("4");

	echo "Nama: " . $ridha->get_nama(); echo "<br>";
	echo "Nim: " . $ridha->get_nim(); echo "<br>";
    echo "Prodi: " . $ridha->get_prodi(); echo "<br>";
    echo "Gender: " . $ridha->get_gender(); echo "<br>";
    echo "Semester: " . $ridha->get_semester(); echo "<br>";
    echo "<br>";

    echo "Nama: " . $amim->get_nama(); echo "<br>";
	echo "Nim: " . $amim->get_nim(); echo "<br>";
    echo "Prodi: " . $amim->get_prodi(); echo "<br>";
    echo "Gender: " . $amim->get_gender(); echo "<br>";
    echo "Semester: " . $amim->get_semester(); echo "<br>";
    echo "<br>";
    
    echo "Nama: " . $satria->get_nama(); echo "<br>";
	echo "Nim: " . $satria->get_nim(); echo "<br>";
    echo "Prodi: " . $satria->get_prodi(); echo "<br>";
    echo "Gender: " . $satria->get_gender(); echo "<br>";
    echo "Semester: " . $satria->get_semester(); echo "<br>";
    echo "<br>";

    echo "Nama: " . $parhan->get_nama(); echo "<br>";
	echo "Nim: " . $parhan->get_nim(); echo "<br>";
    echo "Prodi: " . $parhan->get_prodi(); echo "<br>";
    echo "Gender: " . $parhan->get_gender(); echo "<br>";
    echo "Semester: " . $parhan->get_semester(); echo "<br>";
    echo "<br>";
    
?>