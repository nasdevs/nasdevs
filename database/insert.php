<?php
    include "koneksi.php";

    $nisn = $_POST["NISN"];
    $namaLengkap = $_POST["namaLengkap"];
    $kelas = $_POST["kelasGugus"];
    $jenisKelamin = $_POST["jenisKelamin"];
    $nomorWhatsapp = $_POST["nomorWhatsapp"];
    $usernameInstagram = $_POST["usernameInstagram"];
    $PIN = $_POST["PIN"];
    $kodePendaftaran = $_POST["kodePendaftaran"];

    $listKodePendaftaran = array("NAS", "NIS", "NUS", "NES", "NOS");


    if (in_array($kodePendaftaran, $listKodePendaftaran)) {
        $sql = "INSERT INTO
                    pendaftar(nisn, nama_lengkap, kelas,
                            jenis_kelamin, nomor_whatsapp, username_instagram,
                            pin, kode_pendaftaran)
                VALUES
                    ('$nisn', '$namaLengkap', '$kelas',
                    '$jenisKelamin', '$nomorWhatsapp', '$usernameInstagram',
                    '$PIN', '$kodePendaftaran')";

        if (mysqli_query($koneksi, $sql)) {
            ?>
            <script>
                document.location.href = '../index.php';
            </script>
            <?php
        } 
        else {
            echo "data tidak berhasil diubdate";
        }
    } 
    else {
        ?>
            <script>
                alert('Kode pendaftaran anda tidak valdi');
                document.location.href = '../index.php';
            </script>
        <?php
    }
?>