<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMA MAJU JAYA</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
    <div class=" formContainer" style="margin-top: auto; margin-bottom: auto;">
	<p align="center">
    <img src="img/logo.png" width="150">
    </p>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;800;900&family=Roboto:wght@100&family=Secular+One&display=swap" rel="stylesheet">
            <h1> Pendaftaran Siswa Baru </h1>
			<h3> 2022/2023 </h3>
            <br><br>

            <div class="d-flex justify-content-center">
                <a href="form-daftar.php"><button class="mr-3 btn btn-primary"> Daftar Baru</button></a>
                <a href="list-siswa.php"><button class="btn btn-primary">Pendaftar</button></a>
            </div>
            <?php if (isset($_GET['status'])) : ?>
                <br><br><br>
                <p>
                    <?php
                    if ($_GET['status'] == 'sukses') {
                        echo "<h3>Pendaftaran siswa baru berhasil!</h3>";
                    } else {
                        echo "<br><br><h3>Pendaftaran gagal!</h3>";
                    }
                    ?>
                </p>
            <?php endif; ?>
    </div>
</body>

</html>