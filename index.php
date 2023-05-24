<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <script src="script/script.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="background-color: #f3f4f4;">
    <div class="container">

        <!-- Start Formulir Pendaftaran -->
        <div class="col-md mb-4 mb-md-0 formulir-pendaftaran">
            <div class="top">
                <p class="card-title text-secondary"><b>Formulir Pendaftaran</i></p>
                <a class="text-decoration-none" href="https://api.whatsapp.com/send?phone=62089503420939&text=Kak, Butuh Bantuan">Perlu bantuan</a>
            </div>
            <form action="database/insert.php" method="post">
                <div class="mb-0">
                    <label class="form-label" for="namaLengkap">NAMA LENGKAP</label>
                    <input class="form-control" name="namaLengkap" required="true" type="text" id="namaLengkap" placeholder="Lengkap Kamu">
                </div>
                <div class="mb-0">
                    <label class="form-label" for="NISN">NOMOR INDUK SISWA NASIONAL (NISN)</label>
                    <input class="form-control" name="NISN" required="true" oninput="nisn_validation()" maxlength="10" type="text" id="NISN" placeholder="00123456789">
                </div>
                <div class="mb-0">
                    <label class="form-label" for="kelasGugus">KELAS / GUGUS</label>
                    <input class="form-control" name="kelasGugus" required="true" type="text" id="kelasGugus" placeholder="X MIPA 0 / Gugus 3">
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
                        <input type="text" class="form-control" required="true" oninput="number_phone_validation()" name="nomorWhatsapp" id="nomorWhatsapp" placeholder="081234567890" aria-label="nomorWhatsapp" aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="mb-0">
                    <label class="form-check" for="usernameInstagram">INSTAGRAM</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="text" class="form-control" required="true" name="usernameInstagram" placeholder="smuneljc (isi angka 0 jika tidak memiliki Instagram)" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="mb-0">
                    <label class="form-check" for="PIN">PIN</label>
                    <div class="input-group">
                        <input type="password" class="form-control" required="true" name="PIN" maxlength="6" placeholder="...... (6 Digit)" aria-label="Recipient's username" aria-describedby="button-addon2">
                    </div>
                </div>
                <div class="mb-0">
                    <label class="form-label" for="kodePendaftaran">KODE PENDAFTARAN</label>
                    <input class="form-control" name="kodePendaftaran" required="true" oninput="upper_case()" type="text" id="kodePendaftaran" placeholder="Kode Pendaftaran">
                    <p>apa itu kode pendaftaran?</p>
                </div>
                <div class="mb-0 input-group d-flex align-items-center">
                    <input class="form-input" name="cofirm" required="true" type="checkbox">
                    <label for="confirm">
                        Saya telah bersedia untuk mengikuti aturan yang telah ditetapkan oleh SmunelJC
                    </label>
                </div>
                <div class="mb-0">
                    <button type="submit" class="btn btn-primary submit-form">Submit</button>
                </div>
            </form>
        </div>
        <!-- End Formulir Pendaftaran -->

        <!-- Start List Pendaftar -->
        <div class="col-md mb-4 mb-md-0 list-pendaftar">
            <div class="top">
                <p>List Pendaftar</p>
            </div>
            <?php
                include "table-pendaftar.php";
            ?>
        </div>

        <!-- End List Pendaftar -->


    </div>
    <!-- Start Input PIN -->
        <?php
            include "pin-confirmation.php";
        ?>
    <!-- End Input PIN -->

</body>

</html>