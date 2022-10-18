<?php
include "connection.php";
require('../fpdf/fpdf.php');
$cutiID = $_GET['cutiID'];
$logo = "white.png";
$result = mysqli_query($link, "SELECT * FROM Cuti WHERE id='".$cutiID."' ");
$header = mysqli_query($link, "SELECT `COLUMN_NAME` 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='globalel_cuti' 
    AND `TABLE_NAME`='Cuti'");
while($row= mysqli_fetch_array($result, MYSQLI_BOTH))
{
    $result1 = mysqli_query($link, "select * from users where username = '".$row['sUsername']."'");
    $Crow= mysqli_fetch_array($result1, MYSQLI_BOTH);
    $resultMa = mysqli_query($link,"SELECT name FROM users WHERE dept='".$Crow['dept']."' AND type_user='Manager'");
    $manager = mysqli_fetch_array($resultMa, MYSQLI_BOTH);
    $man = $manager['name'];
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',12);	
    $pdf->Image($logo, 5, 1, 50);
    $pdf->Image($logo, 5, 280, 50);
    $pdf->Cell(0,30,"Report Cuti",0,1,'C');
    
    $pdf->Cell(50,10,"Cuti ID :   ",0,0);
    $pdf->Cell(50,10,$row['id'],0,1,'L');
    
    $pdf->Cell(50,10,"Nama Penuh :   ",0,0);
    $pdf->Cell(50,10,$Crow['name'],0,1,'L');
    
    $pdf->Cell(50,10,"No. Telefon :   ",0,0);
    $pdf->Cell(50,10,$Crow['Hp'],0,1,'L');
    
    $pdf->Cell(50,10,"Email :   ",0,0);
    $pdf->Cell(50,10,$Crow['email'],0,1,'L');
    
    $pdf->Cell(50,10,"Jabatan :   ",0,0);
    $pdf->Cell(50,10,$Crow['dept'],0,1,'L');
    
    $pdf->Cell(50,10,"Jenis Cuti :   ",0,0);
    $pdf->Cell(50,10,$row['LType'],0,1,'L');
    
    $pdf->Cell(50,10,"Sebab :   ",0,0);
    $pdf->Cell(50,10,$row['sebab'],0,1,'L');
    
    $pdf->Cell(50,10,"Nama Manager :   ",0,0);
    $pdf->Cell(50,10,$man,0,1,'L');
    
    $pdf->Cell(50,20,"Status    :", 0,0);
    
    $x = $pdf->GetX();
    $pdf->Cell(25,10,"Admin        : ", 0,0);
    if($row['admin']==1){
        $pdf->SetTextColor(0,128,0);
        $pdf->Cell(50,10,"Diterima", 0,1);}
    else{
        $pdf->SetTextColor(194,8,8);
        $pdf->Cell(50,10,"Dalam Proses", 0,1);}
    $pdf->SetX($x);
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(25,10,"Manager    : ", 0,0);
    if($row['management']==1){
        $pdf->SetTextColor(0,128,0);
        $pdf->Cell(50,10,"Diterima", 0,1);}
    else{
        $pdf->SetTextColor(194,8,8);
        $pdf->Cell(50,10,"Dalam Proses", 0,1);}
    $pdf->SetTextColor(0,0,0);        
    
    $fileName = $row['doku'];
}
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    $newfilename = '../client/dokumen/'.$fileName;
    $allowedfileExtensions = array('jpg', 'PNG', 'png');
    $pdfextension = array('pdf','PDF');
    if(in_array($fileExtension, $allowedfileExtensions))
    {   
        $pdf->AddPage();
        $pdf->Image($logo, 5, 1, 50);
        $pdf->Image($logo, 5, 280, 50);
        $pdf->Cell(0,30,"Lampiran",0,1,'C');
        $pdf->Image($newfilename, 20, 40, 150);
    }
    else if(in_array($fileExtension, $pdfextension))
    {
        $pdf->AddPage();
        $pdf->Image($logo, 5, 1, 50);
        $pdf->Image($logo, 5, 280, 50);
        $pdf->Cell(0,30,"Lampiran",0,1,'C');
        $pdf->Cell(50,10,"PDF File Link :",0,0);
        $pdflink = 'https://globalelite.com.my/cuti/admin/'.$newfilename;
        $pdf->SetFont('Arial','U',12);
        $pdf->SetTextColor(0,0,255);
        $pdf->Cell(50,10,$pdflink,0,0);
    }
    $pdfname = $cutiID . '_cuti.pdf';
    $pdf->Output('I',$pdfname);
?>