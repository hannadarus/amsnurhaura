<?php
session_start();
require 'config.php';

if ($_SESSION['usertype'] == 'Guru') {
  include('sidebar.php');
} else {
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
      .error {
        color: #ff0000;
      }

      nav {
        background-color: #11101d;
        height: 75px;
        width: 100%;
        line-height: 70px;
      }

      label.logo {
        line-height: 90%;
        padding: 0 90px;
      }

      .text {
        color: white;
        font-size: 15px;
      }
    </style>
    <title>EDIT PELAJAR</title>
  </head>
  <body>
    <nav>
      <label class="logo">
        <img src="images/logo.png" width="50" height="40">&nbsp;&nbsp;&nbsp; <span class="text"> Selamat Datang <?= $_SESSION['nama']; ?> </span>
      </label>
    </nav>
    <div class="container mt-5"> 
     <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>KEMASKINI DATA PELAJAR </h4>
            </div>
            <div class="card-body">
                    <?php

                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM register_form WHERE id='$student_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)        
                        {
                                $student = mysqli_fetch_array($query_run);

                        ?>
                                    <form action="studentCode.php" method="POST">
                                        <input type="hidden" name="student_id" value="<?= $student['id']; ?>">
                                        <div class="mb-3">
                                            <label>NAMA PENUH </label>
                                            <input type="text" name="nama" value="<?=$student['namaMurid'];?>" class="form-control" required title="Jangan tinggalkan ruangan ini kekosongan"> </div>
                                        <div class="mb-3">
                                            <label>NO KAD PENGENALAN</label>
                                            <input type="text" name="ic" value="<?=$student['icMurid'];?>" readonly class="form-control"> </div>
                                        <div class="mb-3">
                                            <label>NO.SIJIL KELAHIRAN</label>
                                            <input type="text" name="noSijil" value="<?=$student['noSijilMurid'];?>" class="form-control" required title="Jangan tinggalkan ruangan ini kekosongan"> </div>
                                        <div class="mb-3">
                                            <label>TARIKH LAHIR </label>
                                            <input type="date" name="tarikhL" value="<?=$student['TarikhLMurid'];?>" class="form-control" required title="Jangan tinggalkan ruangan ini kekosongan"> </div>
                                        <div class="mb-3">
                                            <label>UMUR</label>
                                            <input type="text" name="umur" list="uPelajar" value="<?=$student['uMurid'];?>" class="form-control" placeholder="Pilih Salah Satu" required title="Jangan tinggalkan ruangan ini kekosongan">
                                            <datalist id="uPelajar">
                                                <option>3 Tahun</option>
                                                <option>4 Tahun</option>
                                                <option>5 Tahun</option>
                                                <option>6 Tahun</option>
                                            </datalist>
                                        </div>
                                        <div class="mb-3">
                                            <label>JANTINA <span class="error" title="Sila pilih jantina pelajar"> * </span></label>
                                            <br><br>
                                            <input type="radio" name="jantina" value="Perempuan" <?=$student['jantinaMurid']=='Perempuan' ? 'checked' : '' ?> >&nbsp;&nbsp;Perempuan</label>&nbsp;&nbsp;
                                            <input type="radio" name="jantina" value="Lelaki" required <?=$student['jantinaMurid']=='Lelaki' ? 'checked' : '' ?>>&nbsp;&nbsp; Lelaki</label>
                                        </div>
                                        <br>
                                        <div class="mb-3">
                                            <label>AGAMA</label>
                                            <input type="text" name="agama" list="agamaPelajar" value="<?=$student['agamaMurid'];?>" class="form-control" placeholder="Pilih Salah Satu" required title="Jangan tinggalkan ruangan ini kekosongan">
                                            <datalist id="agamaPelajar">
                                                <option value="Islam">Islam</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Kristian">Kristian</option>
                                                <option value="Hindu">Hindu</option>
                                            </datalist>
                                        </div>
                                        <div class="mb-3">
                                            <label>BANGSA</label>
                                            <input type="text" name="bangsa" list="agamaPelajar" value="<?=$student['bangsaMurid'];?>" class="form-control" placeholder="Pilih Salah Satu" required title="Jangan tinggalkan ruangan ini kekosongan">
                                            <datalist id="agamaPelajar">
                                                <option value="Melayu">Melayu</option>
                                                <option value="Cina">Cina</option>
                                                <option value="India">India</option>
                                            </datalist>
                                        </div>
                                        <div class="mb-3">
                                            <label>KEWARGANEGARAAN</label>
                                            <input type="text" name="warga" value="<?=$student['wargaMurid'];?>" class="form-control" required title="Jangan tinggalkan ruangan ini kekosongan"> </div>
                                        <div class="mb-3">
                                            <label>ALAMAT SURAT-MENYURAT</label>
                                            <input name="alamat" value="<?=$student['alamatMurid'];?>" class="form-control" required title="Jangan tinggalkan ruangan ini kekosongan"> </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card-header">
                                                    <h4>Latar Belakang Kesihatan Kanak-Kanak
                                            </h4> </div>
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <label>PENYAKIT <span class="error"> * </span></label>
                                                        <br>
                                                        <input type="text" name="penyakit" list="penyakitPelajar" value="<?=$student['masalahMurid'];?>" class="form-control" placeholder="Pilih Salah Satu" required title="Jangan tinggalkan ruangan ini kekosongan">
                                                        <datalist id="penyakitPelajar">
                                                            <option value="Lelah">Lelah</option>
                                                            <option value="Batuk Kering">Batuk Kering</option>
                                                            <option value="Sakit Jantung">Sakit Jantung</option>
                                                            <option>Gastrik</option>
                                                            <option value="Barah">Barah</option>
                                                            <option value="Sawan">Sawan</option>
                                                            <option value="Tiada">Tiada</option>
                                                        </datalist>
                                                    </div>
                                                    <br>
                                                    <label>MASALAH<span class="error"> * </span></label>
                                                    <br>
                                                    <input type="text" name="masalah" list="masalahPelajar" value="<?=$student['masalahMurid'];?>" class="form-control" placeholder="Pilih Salah Satu" required title="Jangan tinggalkan ruangan ini kekosongan">
                                                    <datalist id="masalahPelajar">
                                                        <option value="Cepat Penat">Cepat Penat</option>
                                                        <option value="Sakit Dada">Sakit Dada</option>
                                                        <option value="Selalu Pitam / Pening Kepala">Selalu Pitam / Pening Kepala</option>
                                                        <option value="Kurang Penglihatan">Kurang Penglihatan</option>
                                                        <option value="Kurang Pendengaran">Kurang Pendengaran</option>
                                                        <option value="Alahan">Alahan</option>
                                                        <option value="Tiada">Tiada</option>
                                                    </datalist>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card-header">
                                                            <h4>Maklumat Bapa / Penjaga
                                                    </h4> </div>
                                                        <div class="card-body">
                                                            <div class="mb-3">
                                                                <label>NAMA PENUH BAPA <span class="error"> * </span></label>
                                                                <input type="text" name="namaB" value="<?=$student['namaBapa'];?>" class="form-control" pattern="[a-zA-Z ]+" required title="Masukkan perkataan sahaja."> </div>
                                                            <br>
                                                            <div class="mb-3">
                                                                <label>NO.KAD PENGENALAN <span class="error"> * </span></label>
                                                                <input type="text" name="icB" value="<?=$student['icBapa'];?>" placeholder="Masukkan kad pengenalan bapa" class="form-control" pattern="[0-9]{6}-[0-9]{2}-[0-9]{4}" size="14" required title=" Masukkan nombor sahaja & mengikut format yang betul."> Example: 990218-08-5599 </div>
                                                            <br>
                                                            <div class="mb-3">
                                                                <label>TARIKH LAHIR <span class="error"> * </span></label>
                                                                <input type="text" name="tarikhLB" value="<?=$student['tarikhLBapa'];?>" class="form-control" placeholder="Masukkan tarikh lahir" required> </div>
                                                            <br>
                                                            <div class="mb-3">
                                                                <label>UMUR <span class="error" t> * </span></label>
                                                                <input type="text" name="umurB" value="<?=$student['uBapa'];?>" placeholder="Masukkan umur anda" required title="Jangan tinggalkan ruangan ini kekosongan" class="form-control"> </div>
                                                            <br>
                                                            <div class="mb-3">
                                                                <label>AGAMA <span class="error"> * </span></label>
                                                                <br>
                                                                <input type="text" name="agamaB" list="agamaBapa" value="<?=$student['agamaBapa'];?>" class="form-control" placeholder="Pilih Salah Satu" required title="Jangan tinggalkan ruangan ini kekosongan">
                                                                <datalist id="agamaBapa">
                                                                    <option value="Islam">Islam</option>
                                                                    <option value="Buddha">Buddha</option>
                                                                    <option value="Kristian">Kristian</option>
                                                                    <option value="Hindu">Hindu</option>
                                                                </datalist>
                                                                <br>
                                                                <br>
                                                                <div class="mb-3">
                                                                    <label>BANGSA <span class="error"> * </span></label>
                                                                    <br>
                                                                    <input type="text" name="bangsaB" list="bangsaBapa" value="<?=$student['bangsaBapa'];?>" class="form-control" placeholder="Pilih Salah Satu" required title="Jangan tinggalkan ruangan ini kekosongan">
                                                                    <datalist id="bangsaBapa">
                                                                        <option value="Melayu">Melayu</option>
                                                                        <option value="Cina">Cina</option>
                                                                        <option value="India">India</option>
                                                                    </datalist>
                                                                </div>
                                                                <br>
                                                                <div class="mb-3">
                                                                    <label>KEWARGANEGARAAN <span class="error"> * </span></label>
                                                                    <input type="text" name="wargaB" value="<?=$student['wargaBapa'];?>" placeholder="Masukkan kewarganegaraan anda" class="form-control" pattern="[a-zA-Z ]+" required title="Pastikan ruangan ini tidak kekosongan"> </div>
                                                                <br>
                                                                <div class="mb-3">
                                                                    <label>TARAF PERKAHWINAN <span class="error"> * </span></label>
                                                                    <br>
                                                                    <input type="text" name="tarafPB" list="tarafPBapa" value="<?=$student['tarafPBapa'];?>" class="form-control" placeholder="Pilih Salah Satu" required title="Jangan tinggalkan ruangan ini kekosongan">
                                                                    <datalist id="tarafPBapa">
                                                                        <option value="Berkahwin">Berkahwin</option>
                                                                        <option value="Duda">Duda</option>
                                                                        <option value="Bujang">Bujang</option>
                                                                    </datalist>
                                                                </div>
                                                                <br>
                                                                <div class="mb-3">
                                                                    <label>NO.TELEFON RUMAH <span class="error"> * </span></label>
                                                                    <input type="text" name="noRumahB" value="<?=$student['noRumahBapa'];?>" placeholder="Masukkan nombor telefon rumah" class="form-control" required title="Multi-line input field "></input>
                                                                </div>
                                                                <br>
                                                                <div class="mb-3">
                                                                    <label>NO.TELEFON BIMBIT<span class="error"> * </span></label>
                                                                    <input type="text" name="noBimbitB" value="<?=$student['noBimBapa'];?>" placeholder="Masukkan nombor telefon bimbit" class="form-control" required title="Multi-line input field "></input>
                                                                </div>
                                                                <br>
                                                                <div class="mb-3">
                                                                    <label>NO.TELEFON PEJABAT <span class="error"> * </span></label>
                                                                    <input type="text" name="noPejB" value="<?=$student['noPejBapa'];?>" placeholder="Masukkan nombor telefon pejabar" class="form-control" required title="Multi-line input field "></input>
                                                                </div>
                                                                <br>
                                                                <div class="mb-3">
                                                                    <label>NAMA DAN ALAMAT MAJIKAN <span class="error"> * </span></label>
                                                                    <textarea name="alamatB" placeholder="Masukkan nama dan alamat majikan" class="form-control" required title="Multi-line input field "><?=$student['NAmajikanBapa'];?></textarea>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="card-header">
                                                                            <h4>Maklumat Ibu / Penjaga</h4> </div>
                                                                        <div class="card-body">
                                                                            <div class="mb-3">
                                                                                <label>NAMA PENUH IBU <span class="error"> * </span></label>
                                                                                <input type="text" name="namaE" value="<?=$student['namaEmak'];?>" class="form-control" pattern="[a-zA-Z ]+" required title="Masukkan perkataan sahaja." placeholder="Masukkan nama penuh ibu"> </div>
                                                                            <br>
                                                                            <div class="mb-3">
                                                                                <label>NO.KAD PENGENALAN <span class="error"> * </span></label>
                                                                                <input type="text" name="icE" value="<?=$student['icEmak'];?>" class="form-control" pattern="[0-9]{6}-[0-9]{2}-[0-9]{4}" size="14" required title=" Must only contain numbers with correct format." placeholder="Masukkan kad pengenalan"> Example: 990218-08-5599 </div>
                                                                            <br>
                                                                            <div class="mb-3">
                                                                                <label>TARIKH LAHIR <span class="error"> * </span></label>
                                                                                <input type="text" name="tarikhLE" value="<?=$student['tarikhLEmak'];?>" class="form-control" placeholder="" required> </div>
                                                                            <br>
                                                                            <div class="mb-3">
                                                                                <label>UMUR <span class="error" t> * </span></label>
                                                                                <input type="text" name="umurE" value="<?=$student['uEmak'];?>" class="form-control" placeholder="Masukkan umur anda" required title="Jangan tinggalkan ruangan ini kekosongan"> </div>
                                                                            <br>
                                                                            <div class="mb-3">
                                                                                <label>AGAMA <span class="error" title="Must select one."> * </span></label>
                                                                                <br>
                                                                                <input type="text" name="agamaE" list="agamaEmak" value="<?=$student['agamaEmak'];?>" class="form-control" placeholder="Pilih Salah Satu" required title="Jangan tinggalkan ruangan ini kekosongan">
                                                                                <datalist id="agamaEmak">
                                                                                    <option value="Islam">Islam</option>
                                                                                    <option value="Buddha">Buddha</option>
                                                                                    <option value="Kristian">Kristian</option>
                                                                                    <option value="Hindu">Hindu</option>
                                                                                </datalist>
                                                                            </div>
                                                                            <br>
                                                                            <div class="mb-3">
                                                                                <label>BANGSA <span class="error" title="Must select one of the following options."> * </span></label>
                                                                                <br>
                                                                                <input type="text" name="bangsaE" list="bangsaEmak" value="<?=$student['bangsaEmak'];?>" class="form-control" placeholder="Pilih Salah Satu" required title="Jangan tinggalkan ruangan ini kekosongan">
                                                                                <datalist id="bangsaEmak">
                                                                                    <option value="Melayu">Melayu</option>
                                                                                    <option value="Cina">Cina</option>
                                                                                    <option value="India">India</option>
                                                                                </datalist>
                                                                            </div>
                                                                            <br>
                                                                            <div class="mb-3">
                                                                                <label>KEWARGANEGARAAN <span class="error"> * </span></label>
                                                                                <input type="text" name="wargaE" value="<?=$student['wargaEmak'];?>" placeholder="Masukkan kewarganegaraan" class="form-control" pattern="[a-zA-Z ]+" required title="Jangan tinggalkan ruangan ini kekosongan."> </div>
                                                                            <br>
                                                                            <div class="mb-3">
                                                                                <label>TARAF PERKAHWINAN <span class="error"> * </span></label>
                                                                                <br>
                                                                                <input type="text" name="tarafPE" list="tarafPEmak" value="<?=$student['tarafPEmak'];?>" class="form-control" placeholder="Pilih Salah Satu" required title="Jangan tinggalkan ruangan ini kekosongan">
                                                                                <datalist id="tarafPEmak">
                                                                                    <option value="Berkahwin">Berkahwin</option>
                                                                                    <option value="Janda">Janda</option>
                                                                                    <option value="Bujang">Bujang</option>
                                                                                </datalist>
                                                                            </div>
                                                                            <br>
                                                                            <div class="mb-3">
                                                                                <label>NO.TELEFON RUMAH <span class="error"> * </span></label>
                                                                                <input type="text" name="noRumahE" value="<?=$student['noRumahEmak'];?>" placeholder="Masukkan nombor telefon rumah" class="form-control" required title="Jangan tinggalkan ruangan ini kekosongan "></input>
                                                                            </div>
                                                                            <br>
                                                                            <div class="mb-3">
                                                                                <label>NO.TELEFON BIMBIT<span class="error"> * </span></label>
                                                                                <input type="text" name="noBimbitE" value="<?=$student['noBimEmak'];?>" placeholder="Masukkan nombor telefon bimbit" class="form-control" required title="Jangan tinggalkan ruangan ini kekosongan "></input>
                                                                            </div>
                                                                            <br>
                                                                            <div class="mb-3">
                                                                                <label>NO.TELEFON PEJABAT <span class="error"> * </span></label>
                                                                                <input type="text" name="noPejE" value="<?=$student['noPejEmak'];?>" placeholder="Masukkan nombor telefon pejabat" class="form-control" required title="Jangan tinggalkan ruangan ini kekosongan "></input>
                                                                            </div>
                                                                            <br>
                                                                            <div class="mb-3">
                                                                                <label>NAMA DAN ALAMAT MAJIKAN <span class="error"> * </span></label>
                                                                                <input type="text" name="alamatE" value="<?=$student['NAmajikanEmak'];?>" class="form-control" placeholder="Masukkan nama & alamat majikan" required title="Jangan tinggalkan ruangan ini kekosongan"></div>
                                                                            <br>
                                                                            <div class="mb-3">
                                                                                <button type="submit" name="update_student" class="btn btn-primary"> Simpan </button>
                                                                            </div>
                                                        </form>
                                                    <?php
                                                        }
                                                        else
                                                        {
                                                            echo "<h4>No Such Id Found</h4>";
                                                        }
                                                    }
                                                    ?> 
                                            </div>
                                    </div>
                            </div>
                    </div>
             </div>
    </body>

</html>