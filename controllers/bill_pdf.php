<?php
Class bill_pdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('../Pdf/pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A4');
        
        $pdf->AddPage();
        
        $pdf->SetFont('Arial','B',16);
        
        $pdf->Cell(190,7,'ICONIC',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'Order Summary',0,1,'C');
        
        $pdf->Line($pdf->x,$pdf->y,$pdf->w-$pdf->x-$pdf->rMargin,$pdf->y);

        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'ID',1,0);
        $pdf->Cell(45,6,'KODE MATA KULIAH',1,0);

        $pdf->Line($pdf->x,$pdf->y,$pdf->w-$pdf->x-$pdf->rMargin,$pdf->y);

        $pdf->SetFont('Arial','',10);
        $jadwal_kuliah = $this->db->get('checkout.html')->result();
        foreach ($jadwal_kuliah as $row){
            $pdf->Cell(20,6,$row->id,1,0);
            $pdf->Cell(45,6,$row->kode_makul,1,0);
        }
        $pdf->Output();
    }
}
