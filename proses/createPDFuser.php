<?php

include('../db.php');


// Koneksi library FPDF
require('../fpdf181/fpdf.php');
// Setting halaman PDF
$pdf = new FPDF('l','mm','A4');
// Menambah halaman baru
$pdf->AddPage();
// Setting jenis font
$pdf->SetFont('Arial','B',16);
// Membuat string
$pdf->Cell(260,7,'List Peserta',0,1,'C');
// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,6,'NO',1,0);
$pdf->Cell(40,6,'NAMA',1,0);
$pdf->Cell(55,6,'EMAIL',1,0);
$pdf->Cell(55,6,'TANGGAL LAHIR',1,0);
$pdf->Cell(30,6,'NOMOR HP',1,0);
$pdf->Cell(25,6,'GENDER',1,1);
 
$pdf->SetFont('Arial','',12);
$query = mysqli_query($con, "SELECT * FROM customer");
$no = 1;
while ($data = mysqli_fetch_array($query)){
    $gender = $data['jenisKelamin'];
    list($y,$m,$d) = explode('-', $data['tanggalLahir']);
    $nama_bulan = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Augustus','September','Oktober','November','Desember');
                

    if($gender == 0){
        $gndr = 'Laki-laki';
    }else{
        $gndr = 'Perempuan';
    }

    $pdf->Cell(10,6,$no,1,0);
    $pdf->Cell(40,6,$data['name'],1,0);
    $pdf->Cell(55,6,$data['email'],1,0);
    $pdf->Cell(55,6,$d." ".$nama_bulan[$m-1]." ".$y,1,0);
    $pdf->Cell(30,6,$data['nomorHandphone'],1,0);
    $pdf->Cell(25,6,$gndr,1,1);
    $no++;
}

$pdf->Output();
?>