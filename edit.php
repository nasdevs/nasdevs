<?php
    include "database/koneksi.php";

    if (isset($_POST['PIN'])) {
        $id = $_POST['PIN'];
        echo $id;

        $sql = "SELECT * FROM pendaftar WHERE id = $id";
        $result = mysqli_query($koneksi, $sql);
        // echo $result['id'];
        // $nisn = $_POST["NISN"];

        // $namaLengkap = $_POST["namaLengkap"];
        // $kelas = $_POST["kelasGugus"];
        // $jenisKelamin = $_POST["jenisKelamin"];
        // $nomorWhatsapp = $_POST["nomorWhatsapp"];
        // $usernameInstagram = $_POST["usernameInstagram"];
        // $PIN = $_POST["PIN"];
        // $kodePendaftaran = $_POST["kodePendaftaran"];
        
        // mysqli_query($koneksi, 
        //             "UPDATE pendaftar SET nisn = '$nisn', nama_lengkap = '$namaLengkap',
        //                                   kelas = '$kelas', jenis_kelamin = '$jenisKelamin',
        //                                   nomor_whatsapp = '$nomorWhatsapp', username_instagram = '$usernameInstagram',
        //                                   pin = '$PIN', kode_pendaftaran = '$kodePendaftaran'");
    }
    else {
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Start Formulir Pendaftaran -->
    <div class="container">
        <div class="col-md mb-4 mb-md-0 formulir-pendaftaran">
            <div class="top">
                <p class="card-title text-secondary"><b>Formulir Pendaftaran</i></p>
                <a class="text-decoration-none" href="https://api.whatsapp.com/send?phone=62089503420939&text=Kak, Butuh Bantuan">Perlu bantuan</a>
            </div>
            <form action="database/insert.php" method="post">
                <?php
                    while ($data = mysqli_fetch_array($result)) {
                        $nins = $data['nins'];
                        $namaLengkap = $data['nama_lengkap'];
                        $kelas = $data['kelas'];
                        $jenisKelamin = $data['jenis_kelamin'];
                        $nomorWhatsapp = $data['nomor_whatsapp'];
                        $usernameInstagram = $data['usernameInstagram'];
                        $pin = $data['PIN'];
                        $kodePendaftaran = $data['kode_pendaftaran'];
                ?>
                <div class="mb-0">
                    <label class="form-label" for="namaLengkap">NAMA LENGKAP</label>
                    <input class="form-control" name="namaLengkap" required="true" type="text" id="namaLengkap" placeholder="Lengkap Kamu" value="<?php echo $namaLengkap?>">
                </div>
                <div class="mb-0">
                    <label class="form-label" for="NISN">NOMOR INDUK SISWA NASIONAL (NISN)</label>
                    <input class="form-control" name="NISN" oninput="nisn_validation()" maxlength="10" type="text" id="NISN" placeholder="00123456789" value="<?php echo $nisn?>">
                </div>
                <div class="mb-0">
                    <label class="form-label" for="kelasGugus">KELAS / GUGUS</label>
                    <input class="form-control" name="kelasGugus" type="text" id="kelasGugus" placeholder="X MIPA 0 / Gugus 3" value="<?php echo $kelas?>">
                </div>
                <div class="mb-0">
                    <label class="form-label" for="jenisKelamin">JENIS KELAMIN</label><br>
                    <div class="d-flex align-items-center">
                        <input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelaminLakiLaki" value="Laki-Laki">
                        <label class="form-check-label" for="jenisKelaminLakiLaki">Laki-Laki</label>
                    </div>
                    <div>
                        <input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelaminPerempuan" value="Perempuan">
                        <label class="form-check-label" for="jenisKelaminPerempuan">
                            Perempuan
                        </label>
                    </div>
                </div>
                <div class="mb-0">
                    <label class="form-check" for="nomorWhatsapp">NOMOR WHATSAPP</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">📞</span>
                        <input type="text" class="form-control" oninput="number_phone_validation()" name="nomorWhatsapp" id="nomorWhatsapp" placeholder="081234567890" aria-label="nomorWhatsapp" aria-describedby="addon-wrapping" value="<?php echo $nomorWhatsapp?>">
                    </div>
                </div>
                <div class="mb-0">
                    <label class="form-check" for="usernameInstagram">INSTAGRAM</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="text" class="form-control" name="usernameInstagram" placeholder="smuneljc (isi angka 0 jika tidak memiliki Instagram)" aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $usernameInstagram?>">
                    </div>
                </div>
                <div class="mb-0">
                    <label class="form-check" for="PIN">PIN</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="PIN" maxlength="6" placeholder="...... (6 Digit)" aria-label="Recipient's username" aria-describedby="button-addon2" value="<?php echo $PIN?>">
                    </div>
                </div>
                <div class="mb-0">
                    <label class="form-label" for="kodePendaftaran">KODE PENDAFTARAN</label>
                    <input class="form-control" name="kodePendaftaran" oninput="upper_case()" type="text" id="kodePendaftaran" placeholder="Kode Pendaftaran">
                    <p>apa itu kode pendaftaran?</p>
                </div>
                <div class="mb-0 input-group d-flex align-items-center">
                    <input class="form-input" name="cofirm" type="checkbox">
                    <label for="confirm">
                        Saya telah bersedia untuk mengikuti aturan yang telah ditetapkan oleh SmunelJC
                    </label>
                </div>
                <div class="mb-0">
                    <button type="submit" class="btn btn-primary submit-form">Edit</button>
                </div>
                <?php
                    }
                ?>
            </form>
        </div>
    </div>
    <!-- End Formulir Pendaftaran -->
</body>

</html>