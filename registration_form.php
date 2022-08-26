<?php
session_start();
require 'config.php';

$icmurid = $_SESSION["icMurid"];
$query = "SELECT nama,gender FROM users WHERE noMykad = '$icmurid'";

//syntax execute statement mysql in php
$exec_query = mysqli_query($conn,$query);

//syntax fetch result selepas execute statement
while ($result = mysqli_fetch_assoc($exec_query)) {
    $namamurid = $result["nama"];
    $gendermurid = $result["gender"];
}

$query_check = "SELECT icMurid from register_form WHERE icMurid = '$icmurid'";
    $result_check = mysqli_query($conn, $query_check);
    $row_check = mysqli_num_rows($result_check);
?>
<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <title> Pendaftaran Nur Haura</title>
        <style type="text/css">
        .error {
            color: #ff0000;
        }
        @media (max-width: 768px) {  
          .title {font-size:12px;} /*1rem = 16px*/
        }
       .navbar {
        background-color: #11101d;
       }
       .p{
        color: white;
       }

        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-sm ">
            &nbsp;&nbsp; <img src="images/logo.png" width="50" height="40">
            <a class="nav-link title" href="index.php" style="color: white; text-decoration: none;">Sign Out</a>
            <a class="navbar-brand mx-auto title" href="#"><div id="logo" class="p">Selamat Datang <?= $_SESSION['nama']; ?> Ke Tadika Nur Haura  </div> </a>
        </nav>
       <body>
        <div class="container mt-5">
            <center>
                <h4>BORANG PENDAFTARAN KANAK KANAK</h4><br>
            </center>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <?php if ($row_check == 0) :?> 
                            <div class="card-body">
                                <form action="process.php" method="POST">
                                    <div class="mb-3">
                                        <label>NAMA PENUH<span class="error"> * </span></label>
                                        <input type="text" name="nama" placeholder="Masukkan nama penuh pelajar" class="form-control" pattern="[a-zA-Z ]+" required title="Masukkan perkataan sahaja" value=" <?= $namamurid ?>"> 
                                    </div><br>
                                    <div class="mb-3">
                                        <label>NO KAD PENGENALAN <span class="error"> * </span></label>
                                        <input type="text" name="ic" placeholder="Masukkan kad pengenalan pelajar" class="form-control" pattern="[0-9]{6}-[0-9]{2}-[0-9]{4}" size="14" required title="Masukkan nombor sahaja & ikut format yang betul." value="<?= $_SESSION['icMurid']; ?>" readonly> Example: 990218-08-5599 
                                    </div><br>
                                    <div class="mb-3">
                                        <label>NO.SIJIL KELAHIRAN <span class="error"> * </span></label>
                                        <input type="text" name="noSijil" placeholder="Masukkan nombor sijil kelahiran pelajar" class="form-control" required title="Jangan tinggalkan ruangan ini kekosongan"> 
                                    </div><br>
                                    <div class="mb-3">
                                        <label>TARIKH LAHIR <span class="error"> * </span></label>
                                        <input type="date" name="tarikhL" placeholder="Masukkan tarikh lahir pelajar" class="form-control" required title="Jangan tinggalkan ruangan ini kekosongan"> 
                                    </div><br>
                                    <div class="mb-3">
                                        <label>UMUR <span class="error"> * </span></label><br>
                                        <input type="text" name="umur" list="uPelajar" class="form-control" placeholder="Sila pilih umur pelajar"required title="Jangan tinggalkan ruangan ini kekosongan"/>
                                        <datalist id="uPelajar">
                                            <option>3 Tahun</option>
                                            <option>4 Tahun</option>
                                            <option>5 Tahun</option>
                                            <option>6 Tahun</option>
                                        </datalist>
                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label>JANTINA <span class="error" title="Sila pilih jantina pelajar"> * </span></label>
                                        <br><br>
                                        <input type="radio" name="jantina" value="Perempuan" <?=$gendermurid=='Perempuan' ? 'checked' : '' ?> >&nbsp;&nbsp;Perempuan</label>&nbsp;&nbsp;
                                        <input type="radio" name="jantina" value="Lelaki" required <?=$gendermurid=='Lelaki' ? 'checked' : '' ?>>&nbsp;&nbsp; Lelaki</label>
                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label>AGAMA <span class="error"> * </span></label>
                                        <br>
                                        <input type="text" name="agama" list="agamaPelajar" class="form-control" placeholder="Pilih salah satu agama jika tiada sila nyatakan" required title="Jangan tinggalkan ruangan ini kekosongan"/>
                                        <datalist id="agamaPelajar">
                                            <option value="Islam">Islam</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Kristian">Kristian</option>
                                            <option value="Hindu">Hindu</option>
                                        </datalist>
                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label>BANGSA <span class="error"> * </span></label>
                                        <br>
                                        <input type="text" name="bangsa" list="bangsaPelajar" class="form-control" placeholder="Pilih salah satu bangsa jika tiada sila nyatakan" required title="Jangan tinggalkan ruangan ini kekosongan"/>
                                        <datalist id="bangsaPelajar">
                                            <option value="Melayu">Melayu</option>
                                            <option value="Cina">Cina</option>
                                            <option value="India">India</option>
                                        </datalist>
                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label>KEWARGANEGARAAN <span class="error"> * </span></label>
                                        <input type="text" name="warga" placeholder="Masukkan kewarganegaraan pelajar" class="form-control" pattern="[a-zA-Z ]+" required title="Jangan tinggalkan ruangan ini kekosongan."> </div>
                                    <br>
                                    <div class="mb-3">
                                        <label>ALAMAT SURAT-MENYURAT <span class="error"> * </span></label>
                                        <textarea name="alamat" class="form-control" placeholder="Masukkan alamat yang lengkap" required title="Jangan tinggalkan ruangan ini kekosongan "></textarea>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card-header">
                                                <h4>Latar Belakang Kesihatan Kanak-Kanak</h4> 
                                            </div>
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <label>NAMA PENYAKIT <span class="error"> * </span></label>
                                                    <br>
                                                    <input type="text" name="penyakit" list="penyakitPelajar" class="form-control" placeholder="Pilih salah satu jika tiada sila nyatakan" />
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
                                                <div class="mb-3">
                                                    <label>MASALAH<span class="error"> * </span></label>
                                                    <br>
                                                    <input type="text" name="masalah" list="masalahPelajar" class="form-control" placeholder="Pilih salah satu jika tiada sila nyatakan"/>
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
                                                            <h4>Maklumat Bapa / Penjaga</h4> 
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="mb-3">
                                                                <label>NAMA PENUH BAPA <span class="error"> * </span></label>
                                                                <input type="text" name="namaB" placeholder="Masukkan nama bapa" class="form-control" pattern="[a-zA-Z ]+" required title="Masukkan perkataan sahaja."> </div>
                                                            <br>
                                                            <div class="mb-3">
                                                                <label>NO.KAD PENGENALAN <span class="error"> * </span></label>
                                                                <input type="text" name="icB" placeholder="Masukkan kad pengenalan bapa" class="form-control" pattern="[0-9]{6}-[0-9]{2}-[0-9]{4}" size="14" required title=" Masukkan nombor sahaja & mengikut format yang betul."> Contoh: 990218-08-5599 </div>
                                                            <br>
                                                            <div class="mb-3">
                                                                <label>TARIKH LAHIR <span class="error"> * </span></label>
                                                                <input type="date" name="tarikhLB" class="form-control" placeholder="Masukkan tarikh lahir" required> </div>
                                                            <br>
                                                            <div class="mb-3">
                                                                <label>UMUR <span class="error" t> * </span></label>
                                                                <input type="text" name="umurB" placeholder="Masukkan umur bapa" class="form-control"> </div>
                                                            <br>
                                                            <div class="mb-3">
                                                                <label>AGAMA <span class="error"> * </span></label>
                                                                <br>
                                                                <input type="text" name="agamaB" list="agamaBapa" class="form-control" placeholder="Sila pilih salah satu jika tiada sila nyatakan" required title="Jangan tinggalkan ruangan ini kekosongan"/>
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
                                                                    <input type="text" name="bangsaB" list="bangsaBapa" class="form-control" placeholder="Sila pilih salah satu jika tiada sila nyatakan" required title="Jangan tinggalkan ruangan ini kekosongan"/>
                                                                    <datalist id="bangsaBapa">
                                                                        <option value="Melayu">Melayu</option>
                                                                        <option value="Cina">Cina</option>
                                                                        <option value="India">India</option>
                                                                    </datalist>
                                                                </div>
                                                                <br>
                                                                <div class="mb-3">
                                                                    <label>KEWARGANEGARAAN <span class="error"> * </span></label>
                                                                    <input type="text" name="wargaB" placeholder="Masukkan kewarganegaraan anda" class="form-control" pattern="[a-zA-Z ]+" required title="Pastikan ruangan ini tidak kekosongan"> </div>
                                                                <br>
                                                                <div class="mb-3">
                                                                    <label>TARAF PERKAHWINAN <span class="error"> * </span></label>
                                                                    <br>
                                                                    <input type="text" name="tarafPB" list="tarafPBapa" class="form-control" placeholder="Pilih Salah Satu" required title="Jangan tinggalkan ruangan ini kekosongan"/>
                                                                    <datalist id="tarafPBapa">
                                                                        <option value="Berkahwin">Berkahwin</option>
                                                                        <option >Duda</option>
                                                                        <option >Tidak Berkhawin</option>
                                                                    </datalist>
                                                                </div>
                                                                <br>
                                                                <div class="mb-3">
                                                                    <label>NO.TELEFON RUMAH <span class="error"> * </span></label>
                                                                    <input type="text" placeholder="Masukkan nombor telefon rumah" name="noRumahB" class="form-control" required title="Multi-line input field "></input>
                                                                </div>
                                                                <br>
                                                                <div class="mb-3">
                                                                    <label>NO.TELEFON BIMBIT<span class="error"> * </span></label>
                                                                    <input type="text" placeholder="Masukkan nombor telefon bimbit" name="noBimbitB" class="form-control" required title="Multi-line input field "></input>
                                                                </div>
                                                                <br>
                                                                <div class="mb-3">
                                                                    <label>NO.TELEFON PEJABAT <span class="error"> * </span></label>
                                                                    <input type="text" name="noPejB" placeholder="Masukkan nombor telefon pejabar" class="form-control" required title="Multi-line input field "></input>
                                                                </div>
                                                                <br>
                                                                <div class="mb-3">
                                                                    <label>NAMA DAN ALAMAT MAJIKAN <span class="error"> * </span></label>
                                                                    <textarea name="alamatB" placeholder="Masukkan nama dan alamat majikan" class="form-control" required title="Multi-line input field "></textarea>
                                                                </div>
                                                                <br>

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="card-header">
                                                                            <h4>Maklumat Ibu / Penjaga</h4> 
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="mb-3">
                                                                                <label>NAMA PENUH IBU <span class="error"> * </span></label>
                                                                                <input type="text" name="namaE" class="form-control" pattern="[a-zA-Z ]+" required title="Masukkan perkataan sahaja." placeholder="Masukkan nama penuh ibu"> </div>
                                                                            <br>
                                                                            <div class="mb-3">
                                                                                <label>NO.KAD PENGENALAN <span class="error"> * </span></label>
                                                                                <input type="text" name="icE" class="form-control" pattern="[0-9]{6}-[0-9]{2}-[0-9]{4}" size="14" required title=" Must only contain numbers with correct format." placeholder="Masukkan kad pengenalan"> Example: 990218-08-5599 </div>
                                                                            <br>
                                                                            <div class="mb-3">
                                                                                <label>TARIKH LAHIR <span class="error"> * </span></label>
                                                                                <input type="date" name="tarikhLE" class="form-control" placeholder="" required> </div>
                                                                            <br>
                                                                            <div class="mb-3">
                                                                                <label>UMUR <span class="error" t> * </span></label>
                                                                                <input type="text" name="umurE" class="form-control" placeholder="Masukkan umur" required title="Jangan tinggalkan ruangan ini kekosongan"> </div>
                                                                            <br>
                                                                            <div class="mb-3">
                                                                                <label>AGAMA <span class="error" title="Must select one."> * </span></label>
                                                                                <br>
                                                                                <input type="text" name="agamaE" list="agamaEmak" class="form-control"  placeholder="Pilih Salah Satu" required title="Jangan tinggalkan ruangan ini kekosongan"/>
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
                                                                                <input type="text" name="bangsaE" list="bangsaEmak" class="form-control"  placeholder="Sila pilih salah satu jika tiada sila nyatakan" required title="Jangan tinggalkan ruangan ini kekosongan"/>
                                                                                <datalist id="bangsaEmak">
                                                                                    <option value="Melayu">Melayu</option>
                                                                                    <option value="Cina">Cina</option>
                                                                                    <option value="India">India</option>
                                                                                </datalist>
                                                                            </div>
                                                                            <br>
                                                                            <div class="mb-3">
                                                                                <label>KEWARGANEGARAAN <span class="error"> * </span></label>
                                                                                <input type="text" name="wargaE" placeholder="Masukkan kewarganegaraan" class="form-control" pattern="[a-zA-Z ]+" required title="Jangan tinggalkan ruangan ini kekosongan."> </div>
                                                                            <br>
                                                                            <div class="mb-3">
                                                                                <label>TARAF PERKAHWINAN <span class="error"> * </span></label>
                                                                                <br>
                                                                                <input type="text" name="tarafPE" list="tarafPEmak" class="form-control" placeholder="Sila pilih salah satu jika tiada sila nyatakan" required title="Jangan tinggalkan ruangan ini kekosongan"/>
                                                                                <datalist id="tarafPEmak">
                                                                                    <option value="Berkahwin">Berkahwin</option>
                                                                                    <option >Ibu Tunggal</option>
                                                                                    <option >Tidak Berkhawin</option>
                                                                                </datalist>
                                                                            </div>
                                                                            <br>
                                                                            <div class="mb-3">
                                                                                <label>NO.TELEFON RUMAH <span class="error"> * </span></label>
                                                                                <input type="text" name="noRumahE" placeholder="Masukkan nombor telefon rumah" class="form-control" required title="Jangan tinggalkan ruangan ini kekosongan "></input>
                                                                            </div>
                                                                            <br>
                                                                            <div class="mb-3">
                                                                                <label>NO.TELEFON BIMBIT<span class="error"> * </span></label>
                                                                                <input type="text" name="noBimbitE" placeholder="Masukkan nombor telefon bimbit" class="form-control" required title="Jangan tinggalkan ruangan ini kekosongan "></input>
                                                                            </div>
                                                                            <br>
                                                                            <div class="mb-3">
                                                                                <label>NO.TELEFON PEJABAT <span class="error"> * </span></label>
                                                                                <input type="text" name="noPejE" placeholder="Masukkan nombor telefon pejabat" class="form-control" required title="Jangan tinggalkan ruangan ini kekosongan "></input>
                                                                            </div>
                                                                            <br>
                                                                            <div class="mb-3">
                                                                                <label>NAMA DAN ALAMAT MAJIKAN <span class="error"> * </span></label>
                                                                                <textarea name="alamatE" class="form-control" placeholder="Masukkan nama & alamat majikan" required title="Jangan tinggalkan ruangan ini kekosongan"></textarea>
                                                                            </div>
                                                                            <br>
                                                                            <div class="mb-3">
                                                                                <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                                   </form>
                                </div>
                            <?php else : ?>
                            <div class="card-header">
                                <h4><?= $_SESSION['nama']; ?> Telah berdaftar.</h4> 
                            </div>
                            <?php
                                endif;
                            ?>
                     </div>
                </div>
            </div>
         </div>
    </body>
</html>