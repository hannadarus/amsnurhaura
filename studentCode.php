<?php
session_start();
require 'config.php';

// to delete students
if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($conn, $_POST['delete_student']);

    $query = "DELETE FROM register_form WHERE id='$student_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data telah dipadam";
        header("Location: studentdetails.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: studentdetails.php");
        exit(0);
    }
}

// to update students details
if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);

    $namaM = mysqli_real_escape_string($conn, $_POST['nama']);
    $icM = mysqli_real_escape_string($conn, $_POST['ic']);
    $noSijilM = mysqli_real_escape_string($conn, $_POST['noSijil']);
    $TarikhLM= mysqli_real_escape_string($conn, $_POST['tarikhL']);
    $uM= mysqli_real_escape_string($conn, $_POST['umur']);
    $jantinaM= mysqli_real_escape_string($conn, $_POST['jantina']);
    $agamaM= mysqli_real_escape_string($conn, $_POST['agama']);
    $bangsaM = mysqli_real_escape_string($conn, $_POST['bangsa']);
    $wargaM= mysqli_real_escape_string($conn, $_POST['warga']);
    $alamatM= mysqli_real_escape_string($conn, $_POST['alamat']);

    $penyakitM = mysqli_real_escape_string($conn, $_POST['penyakit']);
    $masalahM = mysqli_real_escape_string($conn, $_POST['masalah']);

    $namaBapa = $_POST['namaB'];
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


    $query = "UPDATE register_form SET namaMurid='$namaM', icMurid='$icM', noSijilMurid='$noSijilM' , TarikhLMurid='$TarikhLM' , uMurid='$uM' , jantinaMurid='$jantinaM' , agamaMurid='$agamaM' , bangsaMurid='$bangsaM' , wargaMurid='$wargaM', alamatMurid='$alamatM'  , penyakitMurid='$penyakitM'  , masalahMurid='$masalahM' ,namaBapa='$namaBapa' ,icBapa= '$icBapa', tarikhLBapa='$tarikhLBapa', uBapa='$umurBapa',agamaBapa='$agamaBapa', bangsaBapa='$bangsaBapa',wargaBapa='$kewarganegaraanBapa',tarafPBapa='$statusBapa',noRumahBapa='$noTelRumBapa',noBimBapa='$noTelBimBapa',noPejBapa='$noTelPejBapa',NAmajikanBapa='$namaAlamatPejBapa',namaEmak='$namaIbu',icEmak='$icIbu',tarikhLEmak='$tarikhLIbu',uEmak='$umurIbu',agamaEmak='$agamaIbu',bangsaEmak='$bangsaIbu',wargaEmak='$kewarganegaraanIbu',tarafPEmak='$statusIbu', noRumahEmak='$noTelRumIbu',noBimEmak='$noTelBimIbu',noPejEmak='$noTelPejIbu',NAmajikanEmak='$namaAlamatPejIbu'WHERE id='$student_id' ";
    

    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: studentdetails.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: index.php");
        exit(0);
    }

}
?>