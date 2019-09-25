<?php
Class bill_pdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('../Pdf/pdf');
    }

    function index(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(280,7,'ICONIC',0,1,'C');
        $pdf->SetFont('Arial','B',12);

        $pdf->Cell(280,7,'Order Summary',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        
        $pdf->Line($pdf->x,$pdf->y,$pdf->w-$pdf->x-$pdf->rMargin,$pdf->y);

        $pdf->Cell(130 ,5,'Ambassador Heritage 1921',0,0);
        $pdf->Cell(59 ,5,'',0,1);//end of line

        $pdf->SetFont('Arial','',12);

        $pdf->Cell(130 ,5,'1 x $249',0,0);
        $pdf->Cell(59 ,5,'',0,1);

        $pdf->Cell(130 ,5,'Remove',0,0);

        $pdf->Cell(130 ,5,'Subtotal : ',0,0);
        $pdf->Cell(25 ,5,'$190',0,0);

        $pdf->Cell(130 ,5,'Shipping : ',0,0);
        $pdf->Cell(25 ,5,'Free',0,0);

        
    $pdf->Line($pdf->x,$pdf->y,$pdf->w-$pdf->x-$pdf->rMargin,$pdf->y);

        $pdf->Cell(130 ,5,'Total : ',0,0);
        $pdf->Cell(25 ,5,'#250',0,0);
    }  
    $pdf->Output();
    }
}