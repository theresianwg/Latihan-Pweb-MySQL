<?php

    require("../fpdf185/fpdf.php");

    include "config.php";

    $pdf = new FPDF("l", "mm", "A4");

    $pdf->AddPage();
    $pdf->SetFont("Times", "B", 16);
    $pdf->Cell(272, 7, "SMA MAJU JAYA", 0, 1, "C");
    $pdf->Cell(272, 7, "", 0, 1, "C");

    $query = "SELECT * FROM tambah_foto";
    
    $result = mysqli_query($db,  $query);

    if ($result) {
        $pdf->SetFont("Times", "B", 12);
            
        $pdf->Cell(16, 6, "ID", 1, 0, "C");
        // $pdf->Cell(16, 6, "foto", 1, 0, "C");
        $pdf->Cell(64, 6, "Nama", 1, 0, "C");
        $pdf->Cell(64, 6, "Alamat",  1,  0,  "C");
        $pdf->Cell(64, 6, "Sekolah Asal", 1, 1, "C");
        $pdf->Cell(32, 6, "Agama", 1, 0, "C");
        $pdf->Cell(32, 6, "Jenis Kelamin", 1, 0, "C");

        $pdf->SetFont("Times", "", 12);
        while($siswa = mysqli_fetch_array($result)) {
            
            $pdf->Cell(16, 6, $siswa["id"], 1, 0, "C");
            // $pdf->Cell(16, 6, $siswa["foto"], 1, 0, "C");
            $pdf->Cell(64, 6, $siswa["nama"], 1, 0, "C");
            $pdf->Cell(64, 6, $siswa["alamat"],  1,  0,  "C");
            $pdf->Cell(64, 6, $siswa["sekolah_asal"], 1, 1, "C");
            $pdf->Cell(32, 6, $siswa["agama"], 1, 0, "C");
            $pdf->Cell(32, 6, $siswa["jenis_kelamin"], 1, 0, "C");

        }
    }
    else {
        die("Gagal mengakses basis data...");
    }


$pdf->Output();
?>