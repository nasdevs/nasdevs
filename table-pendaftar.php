<?php
include "database/koneksi.php";
$sql = "SELECT id, nama_lengkap, nisn FROM pendaftar";
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <script src="script/script.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table-pendaftar').DataTable();
        });
        function pin_confirmation() {
            let btn_id = event.target.id;
            console.log('halo');

            let pin_confirm_id = 'id-' + btn_id.replace('btn-id-', '');
            let elm = document.getElementById(pin_confirm_id);
            elm.className = elm.className + ' show'
            elm.setAttribute('aria-modal', 'true')
            elm.setAttribute('role', 'dialog')
            elm.setAttribute('style', 'display: block;')
        }
    </script>
</head>

<body>
    <div class="filter d-flex justify-between">
        <table id="table-pendaftar" class="table table-striped" style="width:100%">
            <thead>
                <th>No.</th>
                <th>NAMA</th>
                <th>NISN</th>
                <th>EDIT</th>
            </thead>
            <tbody>
                <?php
                while ($data = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['nama_lengkap']; ?></td>
                        <td><?php echo $data['nisn']; ?></td>
                        <td><button class="btn btn-primary" id=<?php echo "btn-id-" . $data['id']; ?> onclick="pin_confirmation()">Edit</button></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>No.</th>
                    <th>NAMA</th>
                    <th>NISN</th>
                    <th>EDIT</th>
                </tr>
            </tfoot>
        </table>
    </div>
</body>

</html>