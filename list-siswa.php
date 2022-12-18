<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMA MAJU JAYA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        .custab {
            border: 1px solid #ccc;
            padding: 5px;

            transition: 0.5s;
        }

        .custab:hover {
            box-shadow: 3px 3px 0px transparent;
            transition: 0.5s;
        }
    </style>
</head>

<body>
    <br>
    <h1>List Daftar Calon Siswa</h1>

    <div class=" container" style="margin-top:20px; margin-bottom: 40px">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;800;900&family=Roboto:wght@100&family=Secular+One&display=swap" rel="stylesheet">
            <p style="text-align: right; margin:15px">
                <a href=" form-daftar.php" class="btn btn-primary btn-xs col-md-3">[+] Tambah Baru</a>
                <a href= "unduh-pdf.php" class="btn btn-primary btn-xs col-md-3">+ Unduh PDF</a>
            </p>
            <div class="col-md-12 col-md-offset-2 custyle">
                <table class="table table-striped custab">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Sekolah Asal</th>
                            <th>Foto</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        include "config.php";
                        
                    $sql = "Select * From tambah_foto";
                    $query = mysqli_query($db, $sql);

                        //$sql = $pdo->prepare("SELECT * FROM tambah_foto");
                        //$sql->execute(); // Eksekusi querynya

                        while ($siswa = mysqli_fetch_array($query)) {
                            echo "<tr>";

                            echo "<td>" . $siswa['id'] . "</td>";
                            echo "<td>" . $siswa['nama'] . "</td>";
                            echo "<td>" . $siswa['alamat'] . "</td>";
                            echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                            echo "<td>" . $siswa['agama'] . "</td>";
                            echo "<td>" . $siswa['sekolah_asal'] . "</td>";
                            echo "<td><img src='img/".$siswa['foto']."' width='100' height='100'></td>";


                            echo "<td class='text-center'>";
                            echo "<a class='btn btn-info btn-xs' href='form-edit.php?id=" . $siswa['id'] . "' ><span class='glyphicon glyphicon-edit'></span>Edit</a> | ";
                            echo "<a  class='btn btn-danger btn-xs' href='hapus.php?id=" . $siswa['id'] . "'><span class='glyphicon glyphicon-remove'></span>Hapus</a>";
                            echo "</td>";

                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <p style="font-weight : bolder">Total : <?php echo mysqli_num_rows($query) ?></p>
            </div>

            </div>
</body>

</html>