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
        $pdf->SetFont('Arial','B',18);

        $pdf->Cell(280,7,'Payment Billing Report',0,1,'C');
        $pdf->SetFont('Arial','B',14);
        
        $pdf->SetLineWidth(0.8);
        $pdf->Line(10,28,199,28);
        $pdf->Ln(8); 

        $pdf->Cell(130 ,5,'Ambassador Heritage 1921',0,0);
        $pdf->Cell(59 ,5,'',0,1);

        $pdf->SetFont('Arial','',12);

        $pdf->Cell(130 ,5,'1 x $249',0,0);
        $pdf->Cell(59 ,5,'',0,1);

        $pdf->Cell(130 ,5,'Remove',0,0);
        $pdf->Ln(6); 

        $pdf->Cell(45,5,'Subtotal :',0,0,'L'); 
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(70,7,...($...),0,1,'J'); 
        $pdf->Ln(6); 

        $pdf->Cell(45,5,'Shipping',0,0,'L');
        $pdf->Cell(70,7,....($...),0,1,'J'); 
        $pdf->Ln(6); 

        $pdf->SetLineWidth(0.8);
        $pdf->Line(10,28,199,28);
        $pdf->Ln(8); 
   
        $pdf->Cell(45,5,'Total : ',0,0,'L');
        $pdf->Cell(70,7,....($...),0,1,'J'); 
        $pdf->Ln(6); 
    }  
    $pdf->Output();
    }
}