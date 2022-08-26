<?php
session_start();
include "config.php";

$b= $_POST['nama'];
$c = $_POST['ic'];
$d= $c ;
$e = $c." .png";

ini_set('display_errors','Off');

$f = $_POST['noSijil'];
$g = $_POST['tarikhL'];
$h = $_POST['umur'];
$i = $_POST['jantina'];
$j = $_POST['agama'];
$k = $_POST['bangsa'];
$l = $_POST['warga'];
$m = $_POST['alamat'];
$n = $_POST['penyakit'];
$o = $_POST['masalah'];

$p = $_POST['namaB'];
$icBapa = $_POST['icB'];
$tarikhLBapa = $_POST['tarikhLB'];
$umurBapa = $_POST['umurB'];
$agamaBapa = $_POST['agamaB'];
$bangsaBapa = $_POST['bangsaB'];
$kewarganegaraanBapa = $_POST['wargaB'];
$statusBapa = $_POST['tarafPB'];
$noTelRumBapa = $_POST['noRumahB'];
$noTelBimBapa = $_POST['noBimbitB'];
$noTelPejBapa = $_POST['noPejB'];
$namaAlamatPejBapa = $_POST['alamatB'];

$namaIbu = $_POST['namaE'];
$icIbu = $_POST['icE'];
$tarikhLIbu = $_POST['tarikhLE'];
$umurIbu = $_POST['umurE'];
$agamaIbu = $_POST['agamaE'];
$bangsaIbu = $_POST['bangsaE'];
$kewarganegaraanIbu = $_POST['wargaE'];
$statusIbu = $_POST['tarafPE'];
$noTelRumIbu = $_POST['noRumahE'];
$noTelBimIbu = $_POST['noBimbitE'];
$noTelPejIbu = $_POST['noPejE'];
$namaAlamatPejIbu = $_POST['alamatE'];

//quality 
$ecc ="L";
$pixel_size = 5;
$frame_size = 5;

//utk masukkan data

$sql_noMyKad = "SELECT * FROM register_form WHERE icMurid='$c'";
$res_noMyKad = mysqli_query($conn, $sql_noMyKad) or die(mysqli_error($conn));

    if (mysqli_num_rows($res_noMyKad) > 0) {
      echo '<script>alert("Maaf no MyKad sudah berdaftar..")</script>';
    }
    else{
    	$sql = $conn -> query ("INSERT INTO register_form (namaMurid, icMurid, gbrqrcode,noSijilMurid, TarikhLMurid, uMurid, jantinaMurid,agamaMurid, bangsaMurid, wargaMurid, alamatMurid,penyakitMurid, masalahMurid, namaBapa, icBapa, tarikhLBapa, uBapa, agamaBapa, bangsaBapa, wargaBapa, tarafPBapa, noRumahBapa, noBimBapa, noPejBapa, NAmajikanBapa, namaEmak, icEmak, tarikhLEmak, uEmak, agamaEmak, bangsaEmak, wargaEmak, tarafPEmak, noRumahEmak, noBimEmak, noPejEmak, NAmajikanEmak) VALUES ('$b','$c','$e' ,'$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$icBapa','$tarikhLBapa','$umurBapa','$agamaBapa','$bangsaBapa','$kewarganegaraanBapa','$statusBapa','$noTelRumBapa','$noTelBimBapa','$noTelPejBapa','$namaAlamatPejBapa','$namaIbu','$icIbu','$tarikhLIbu','$umurIbu','$agamaIbu','$bangsaIbu','$kewarganegaraanIbu','$statusIbu','$noTelRumIbu','$noTelBimIbu','$noTelPejIbu','$namaAlamatPejIbu')");


		if($sql){
		 echo "<script>alert('Data Pendaftaran Kanak-Kanak Berjaya Disimpan..');</script>";
		 header('location:registration_form.php');
		 
		}else{
		    echo"Gagal";
		    die ($conn -> error);
		}

    }



?>