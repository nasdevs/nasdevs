<?php
    include "database/koneksi.php";
    $sql = "SELECT * FROM pendaftar";
    $result = mysqli_query($koneksi, $sql);
    $number_of_rows = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
</head>
<body>
    
    <?php
        while ($data = mysqli_fetch_array($result)) {
    ?>
            <div class="modal modal-transparent fade" id=<?php echo "id-" . $data["id"] ?> tabindex="-1" aria-modal="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                    <a href="javascript:void(0);" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></a>
                    <p class="text-white text-large fw-light mb-3">Masukkan PIN untuk mengedit "Andi Alinsyamini"</p>
                    <form action="edit.php" method="post">
                        <div class="input-group input-group-lg mb-3">
                        <input type="text" name="PIN" class="form-control bg-white border-0" placeholder="PIN Kamu (6 Digit)" aria-describedby="subscribe" id="<?php $data['id']?>">
                        <button class="btn btn-primary" type="submit" id="subscribe">Edit Form</button>
                    </div>
                    </form>
                    <div class="text-start text-white opacity-50">PIN dibutuhkan untuk mengedit / menghapus form kamu</div>
                    </div>
                </div>
                </div>
            </div>
    <?php
        }
    ?>
</body>
</html>